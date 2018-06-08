<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="contacts")
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $owner = null;

    /**
     * @ORM\Column(type="string")
     */
    private $firstname;

    /**
     * @ORM\Column(type="string")
     */
    private $lastname;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     */
    private $phone;

    /**
     * @ORM\Column(type="string")
     */
    private $adress;

    /**
     * @ORM\Column(type="string")
     */
    private $country;

    public function getId(){
    	return $this->id;
    }

    public function getOwner(){
    	return $this->owner;
    }

    public function setOwner($owner){
    	if(null === $this->owner)
    	{
	    	$this->owner = $owner;
	    }
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
    	$this->email = $email;
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

    public function getCountry(){
    	return $this->country;
    }

    public function setCountry($country){
    	$this->country = $country;
    }

}