<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * 	ENTITY USER 
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 *
 */
class User implements UserInterface
{

    /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
        private $id;


        /**
         * @ORM\Column(type="string", name="username")
         */
        private $username;


        /**
         * @ORM\Column(type="string", name="firstname")
         */
        private $firstname;


        /**
         * @ORM\Column(type="string", name="lastname")
         */
        private $lastname;


        /**
         * @ORM\Column(type="string", name="password")
         */
        private $password;


        /**
         * @ORM\Column(type="array",name="roles")
         */
        private $roles;


        /**
         * 
         */
        public function __construct()
        {
            $this->roles = [];
        }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
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

            return $this;
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
            return $this->lastname;
        }


        /**
         * 
         */
        public function setFirstname($firstname)
        {
            $this->firstname = $firstname;

            return $this;
        }
        

        /**
         * 
         */
        public function setLastname($lastname)
        {
            $this->lastname = $lastname;

            return $this;
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

            return $this;
        }


        /**
         * 
         */
        public function addRole($role)
        {
            if (!in_array($role, $this->roles)) {
                $this->roles[] = $role;
            }

            return $this;
        }


        /**
         * 
         */
        public function getRoles()
        {
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
            return null ;
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
