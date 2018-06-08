<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $firstname;

    /**
     * @ORM\Column(type="string")
     */
    protected $lastname;

    /**
     * @ORM\Column(type="string")
     */
    protected $phone;

    /**
     * @ORM\Column(type="string")
     */
    protected $adress;


    public function __construct()
    {
        parent::__construct();
    }

    public function getId(){
    	return $this->id;
    }

    public function getFirstname(){
    	return $this->firstname;
    }

    public function setFirstname($firstname){
    	$this->firstname = $firstname;
    }

    public function getLastname(){
    	return $this->lastname;
    }

    public function setLastname($lastname){
    	$this->lastname = $lastname;
    }

    public function getEmail(){
    	return $this->email;
    }

    public function setEmail($email){
	    $email = is_null($email) ? '' : $email;
	    parent::setEmail($email);
	    $this->setUsername($email);
    }

    public function getPhone(){
    	return $this->phone;
    }

    public function setPhone($phone){
    	$this->phone = $phone;
    }

    public function getAdress(){
    	return $this->adress;
    }

    public function setAdress($adress){
    	$this->adress = $adress;
    }
}