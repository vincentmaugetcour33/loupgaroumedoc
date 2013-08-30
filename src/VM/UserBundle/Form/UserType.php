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
            ->add('username',       'text', array('label' => 'Votre pseudo* : ', 'required'=>true))
            ->add('password',      'text', array('label' => 'Votre mot de passe* : ', 'required'=>true))
            ->add('realname',       'text', array('label' => 'Votre nom : ', 'required'=>false))
            ->add('ville',       'text', array('label' => 'Votre ville : ', 'required'=>false))
            ->add('sexe', 'choice', array(
                 'choices'   => array('homme' => 'Masculin', 'femmme' => 'Féminin'),
                'empty_value' => 'Vous êtes ?'))
            ->add('age',      'integer', array('label' => 'Votre âge : ', 'required'=>false));
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
