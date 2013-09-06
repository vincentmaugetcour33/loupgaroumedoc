<?php

namespace VM\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',      'text', array('label' => 'Votre pseudo* (au moins 4 caractères) : ', 'required'=>true))
            ->add('password',      'password', array('label' => 'Votre mot de passe* (uniquement des caractères alphanumériques) : ', 'required'=>true,
                            'always_empty' => false))
          /*->add('password', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'Les mots de passe entrés ne correspondent pas.',
                    'options' => array('label' => 'Confirmer le mot de passe* :'),
                    'first_name' => "password",
                    'second_name' => "repassword",
                ))*/
            ->add('email',         'email', array('label' => 'Votre email* :', 'required'=>true))
            ->add('file',          'file',  array( 'label' => 'Votre photo', 'required'=>false))
            ->add('realname',      'text', array('label' => 'Votre prénom/nom : ', 'required'=>false))
            ->add('ville',         'text', array('label' => 'Votre ville : ', 'required'=>false))
            ->add('sexe',          'choice', array(
                                     'choices'   => array('homme' => 'un homme', 'femme' => 'une femme'),
                                     'empty_value' => 'Vous êtes ?'))
            ->add('age',           'integer', array('label' => 'Votre âge : ', 'required'=>false));
            
            //->add('photo')
            
            //->add('salt')
            //->add('roles');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VM\UserBundle\Entity\User',
            'label' => false
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vm_userbundle_usertype';
    }
}
