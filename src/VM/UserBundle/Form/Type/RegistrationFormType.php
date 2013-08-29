<?php

namespace VM\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;


class RegistrationFormType 
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('realname', 'text', array('label' => 'Nom :'));    
        $builder->add('sexe','choice', array('required' => false,'choices' => 
                array('homme' => 'Masculin', 'femme' => 'Féminin'),
                        'empty_value' => 'Sélectionner votre sexe','label' => 'Sexe :') );
        $builder->add('age','text', array('required' => false,'label' => 'Age :'));
        $builder->add('ville','text',array('required' => false,'label' => 'Ville :'));
        
        #$builder->add('photo');
    }

    public function getName()
    {
        return 'vm_userstore_registration';
    }
}