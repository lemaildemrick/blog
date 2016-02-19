<?php

namespace Blog\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * 	ENTITY USER 
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 *
 */
class User implements UserInterface {


		private $username;

		private $firstname;

		private $lastname;

		private $password;

		private $roles;


		/**
		 * 
		 */
		public function __construct()
		{
			$this->roles = [];
		}


		/**
		 * 
		 */
		public function getUsername()
		{
			return $this->username;
		}


		/**
		 * 
		 */
		public function setUsername($username)
		{
			$this->username = $username;
		}


		/**
		 * 
		 */
		public function getFirstname()
		{
			return $this->firstname;
		}


		/**
		 * 
		 */
		public function getLastname()
		{
			return $this->lasttname;
		}


		/**
		 * 
		 */
		public function setFirstname($firstname)
		{
			$this->firstname = $firstname;
		}
		

		/**
		 * 
		 */
		public function setLastname($lastname)
		{
		 	$this->lastname = $lastname;
		}


		/**
		 * 
		 */
		public function getPassword()
		{
			return $this->password;
		}

		/**
		 * 
		 */
		public function setPassword($password)
		{
			$this->password = $password;
		}


		/**
		 * 
		 */
		public function addRole($role)
		{
			if (!in_array($role,$this->roles))
			{
				$this->roles[] = $role;
			}

			return $this;
		}


		/**
		 * 
		 */
	    public function getRoles(){
	    	return $this->$roles;
	    }



	    /**
	     * Returns the salt that was originally used to encode the password.
	     *
	     * This can return null if the password was not encoded using a salt.
	     *
	     * @return string|null The salt
	     */
	    public function getSalt()
	    {
	    	return '' ;	
	    }

	    /**
	     * Removes sensitive data from the user.
	     *
	     * This is important if, at any given point, sensitive information like
	     * the plain-text password is stored on this object.
	     */
	    public function eraseCredentials()
	    {
			return ;
	    }



}