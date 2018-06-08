<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\ControllerTrait;  //  For createFormBuilder()
use Symfony\Component\Form\Form;                                //  For createView()
use Symfony\Component\Form\FormBuilder;                         //  For getForm()

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use AppBundle\Entity\Contact;                                   //  Entity Schema
use Doctrine\ORM\EntityManagerInterface;                        //  To create an entry in the db

use Symfony\Component\HttpFoundation\Session\Session;           //  To create flash messages
use Symfony\Component\HttpFoundation\Session\SessionInterface;  //  To get session

use Symfony\Component\Security\Core\User\UserInterface;         //  To get User in any controller

use Symfony\Component\Serializer\Encoder\CsvEncoder;            //  In order to use CSV import / export actions
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ContactController extends Controller
{
    /**
     * @Route("/contacts/new", name="createContact")
     * @Method({"GET", "POST"})
     */
    public function createAction(Request $request, UserInterface $user)
    {
        $form = $this->createFormBuilder()
                ->add('first_name', TextType::class)
                ->add('last_name', TextType::class)
                ->add('email', EmailType::class)
                ->add('phone_number', TelType::class)
                ->add('adress', TextType::class)
                ->add('country', CountryType::class)
                ->add('submit', SubmitType::class)
                ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            $req = $request->request->all();
            $contact = $this->getDoctrine()
                    ->getRepository(Contact::class)
                    ->findOneByEmail($req['form']['email']);
            if($contact)
            {
                $this->addFlash("error", "Ce contact existe déjà !");

            }
            else
            {
                $this->alterContactAction($req['form'], $user->getId());
                return $this->redirect('/contacts/');
            }
        }

        return $this->render('contact/add.html.twig', [
            'createForm' => $form->createView(),
        ]);
    }

    public function alterContactAction($form, $owner, $id = null)                               // Create or Edit a contact
    {
        $entityManager = $this->getDoctrine()->getManager();

        if($id)
        {
            $contact = $entityManager->getRepository(Contact::class)->find($id);
        }
        else 
        {
            $contact = new Contact();
            $entityManager->persist($contact);
        }

        $contact->setFirstname($form['first_name']);
        $contact->setLastname($form['last_name']);
        $contact->setEmail($form['email']);
        $contact->setPhone($form['phone_number']);
        $contact->setAdress($form['adress']);
        $contact->setCountry($form['country']);
        $contact->setOwner($owner);

        $entityManager->flush();
    }

    /**
     *  @Route("/contacts/", name="listContacts")
     */
    public function listAction(UserInterface $user = null)
    {
        if($user)
        {
            $contacts = $this->getDoctrine()
                        ->getRepository(Contact::class)
                        ->findByOwner($user->getId());

            return $this->render('contact/list.html.twig', [
                'contacts' => $contacts,
            ]);
        }
        return $this->redirect('/login');
    }

    /**
     *  @Route("/contacts/{id}", name="showContact")
     *  @%Method("GET")
     */
    public function showAction($id, UserInterface $user)
    {
        $contact = $this->getDoctrine()
                ->getRepository(Contact::class)
                ->findOneById($id);

        if($contact->getOwner() != $user->getId())
        {
            $this->addFlash('error', 'Not allowed action to see this contact');

            return $this->redirect('/contacts/');
        }

        return $this->render('contact/show.html.twig', [
            'contact' => $contact,
        ]);
    }

    /**
     *  @Route("/contacts/edit/{id}", name="editContact")
     *  @Method({"GET", "POST"})
     */
    public function editAction($id, Request $request, UserInterface $user)
    {
        $contact = $this->getDoctrine()
                ->getRepository(Contact::class)
                ->findOneById($id);

        if($contact->getOwner() != $user->getId())
        {
            $this->addFlash('error', 'Not allowed action to edit this contact');

            return $this->redirect('/contacts/');
        }

        $form = $this->createFormBuilder()
                ->add('first_name', TextType::class, [
                    'data' => $contact->getFirstname(),
                ])
                ->add('last_name', TextType::class, [
                    'data' => $contact->getLastname(),
                ])
                ->add('email', EmailType::class, [
                    'data' => $contact->getEmail(),
                ])
                ->add('phone_number', TelType::class, [
                    'data' => $contact->getPhone(),
                ])
                ->add('adress', TextType::class, [
                    'data' => $contact->getAdress(),
                ])
                ->add('country', CountryType::class, [
                    'data' => $contact->getCountry(),
                ])
                ->add('submit', SubmitType::class, [
                    'label' => 'Edit',
                ])
                ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            $req = $request->request->all();
            $this->alterContactAction($req['form'], $user->getId(), $id);

            return $this->redirect('/contacts/');
        }

        return $this->render('contact/edit.html.twig', [
            'editForm' => $form->createView(),
        ]);
    }

    /**
     *  @Route("/contacts/delete/{id}", name="deleteContact")
     *  @Method({"GET"})
     */
    public function deleteAction($id, UserInterface $user)
    {
        $contact = $this->getDoctrine()
                ->getRepository(Contact::class)
                ->findOneById($id);

        if($contact->getOwner() != $user->getId())
        {
            $this->addFlash('error', 'Not allowed action to delete this contact');

            return $this->redirect('/contacts/');
        }
        if($contact && ($contact->getOwner() == $user->getId()))
        {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($contact);
            $entityManager->flush();
        }
        return $this->redirect('/contacts/');
    }

    /**
     *  @Route("/contacts/CSV/import", name="importAction")
     *  @Method({"GET", "POST"})
     */
    public function importAction(Request $request, UserInterface $user, SerializerInterface $serializer)
    {
        $form = $this->createFormBuilder()
                    ->add('file', FileType::class, [ 'label' => 'CSV File to import: ', ])
                    ->add('submit', SubmitType::class, [ 'label' => 'Submit', ])
                    ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted())
        {
            $file = $form['file']->getData();
            if(!$file || $file->getClientMimeType() != "text/csv")
            {
                $this->addFlash('error', 'Please use a ".csv" file');
                dump($file);
            }
            else
            {
                $filename = '['.$user->getFirstname().'_'.$user->getLastname().'].csv';
                $file->move('../csv', $filename);
                $handle = fopen('../csv/'.$filename, 'r');
                while (($line = fgets($handle)) !== false)
                {
                    dump($line);
                    $contact = $serializer->deserialize($line, Contact::class, 'csv');
                    dump($contact);
                }
                fclose($handle);
                // unlink('../csv/'.$filename);
            }
        }

        return $this->render('contact/csv.html.twig', [
            'importForm' => $form->createView(),
        ]);
    }

    /**
     *  @Route("/contacts/CSV/export", name="exportAction")
     *  @Method({"GET"})
     */
    public function exportAction(Request $request, UserInterface $user)
    {
        $contacts = $this->getDoctrine()
                    ->getRepository(Contact::class)
                    ->findByOwner($user->getId());

        $normalizer = new ObjectNormalizer();
        $normalizer->setIgnoredAttributes([ 'id', 'owner' ]);
        $serializer = new Serializer([$normalizer], [new CsvEncoder()]);

        $fileSystem = new Filesystem();
        $filepath = '../csv/['.$user->getFirstname().'_'.$user->getLastname().'].csv';

        $csvContent = $serializer->serialize($contacts, 'csv');

        $handle = fopen($filepath, 'w+');
        fputcsv($handle, [$csvContent]);
        fclose($handle);
        return $this->file($filepath);
    }
}
