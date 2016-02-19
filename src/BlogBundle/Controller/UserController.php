<?php

namespace BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Form\Model\UserCreateAccount;
use BlogBundle\Form\Type\UserCreateAccountType;

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
		$formUserAccount = $this->createForm(UserCreateAccountType::class,new UserCreateAccount());

		$formUserAccount->handleRequest($request);

		if ( $formUserAccount->isValid() ){
	     	$em = $this->getDoctrine()->getManager();

	     	$userInCreating = $formUserAccount->getData();
	     	

		    $this->addFlash('success','Votre compte a été créé');

	       	//return $this->redirectToRoute('knoodle_survey_show',['surveyId' => $surveyId ]);
	    }



	    return $this->render('BlogBundle:User:createUserAccount.html.twig', [
	        'form'	=> $formUserAccount->createView()
	    ]);

	}



}