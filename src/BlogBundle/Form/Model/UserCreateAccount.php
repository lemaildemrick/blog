<?php
 
 namespace BlogBundle\Form\Model;

 use KnoodleBundle\Entity\User;
 use Symfony\Component\Validator\Constraints as Assert;

/**
 *  Modèle de formulaire pour la création de compte user
 */
 class UserCreateAccount {


 	/**
 	 * @Assert\NotBlank
 	 * @Assert\Length(max=10)
 	 */
 	public $firstname;

 	/**
 	 * @Assert\NotBlank
 	 * @Assert\Length(max=10)
 	 */
 	public $lastname;
 	
 	/**
 	 * @Assert\NotBlank
 	 * @Assert\Length(max=255)
 	 */
 	public $username;

 	/**
 	 * @Assert\NotBlank
 	 * @Assert\Length(max=255)
 	 */
 	public $password;
 	

 }