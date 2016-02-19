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
class UserController extends Controller
{
    /**
     * 
     */
    public function createUserAccountAction(Request $request)
    {
        $user = new User();

        $formUserAccount = $this->createForm(UserCreateAccountType::class, $user)->handleRequest($request);

        if ($formUserAccount->isValid()) {
            $encryptedPassword = $this
                ->get('security.encoder_factory')
                ->getEncoder($user)
                ->encodePassword($user->getPlainPassword(), $user->getSalt())
            ;

            $user->setPassword($encryptedPassword);

            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Votre compte a été créé');
        }

        return $this->render('BlogBundle:User:createUserAccount.html.twig', [
            'form'    => $formUserAccount->createView()
        ]);
    }
}
