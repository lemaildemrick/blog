<?php

namespace BlogBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

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
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                    'first_options' => [
                       'label' => 'Your password',
                    ],
                    'second_options' => [
                        'label' => 'Repeat your password',
                    ]
                ])
                ;

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'BlogBundle\Entity\User',
        ]);
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