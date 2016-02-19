<?php

namespace BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * 
 *  FORMULAIRE DE CREATION DE COMPTE UTILISATEUR
 *
 */
class UserCreateAccountType extends AbstractType
{

    /**
     *  Construction de formulaire de création de compte
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class)
            ->add('firstname', TextType::class)
            ->add('lastname', TextType::class)
            ->add('password', TextType::class)
        ;

    }

    /**
     *  Retourne le nom du formulaire 
     *
     * @return String
     */
    public function getName(){
        return 'user_create_account';
    }
}