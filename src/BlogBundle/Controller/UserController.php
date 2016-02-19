<?php

namespace BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Form\Type\UserCreateAccountType;
use BlogBundle\Entity\User;


/**
 * 
 *	Controller managant les users
 *
 *
 */
class UserController extends Controller{



	/**
	 * 
	 */
	public function createUserAccountAction(Request $request)
	{
		$formUserAccount = $this->createForm(UserCreateAccountType::class, new User())->handleRequest($request);

		if ( $formUserAccount->isValid() ){
			$em = $this->getDoctrine()->getManager();

			$user = $formUserAccount->getData();

	     	$em->persist($user);
			$em->flush();

		    $this->addFlash('success','Votre compte a été créé');
	    }



	    return $this->render('BlogBundle:User:createUserAccount.html.twig', [
	        'form'	=> $formUserAccount->createView()
	    ]);

	}



}