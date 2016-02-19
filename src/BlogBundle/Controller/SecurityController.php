<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecutityContext;

/**
* 
*/
class SecurityController extends Controller
{
    
    /**
     * 
     */
    public function loginAction()
    {
        $autentificationUtils = $this->get('security.authentication_utils');
        $error = $autentificationUtils->getLastAuthenticationError();
        $lastUsername = $autentificationUtils->getLastUsername();


        return $this->render('BlogBundle:Security:login.html.twig', [
            'last_username' => $lastUsername,
            'error'=> $error,
            ]);
    }
}
