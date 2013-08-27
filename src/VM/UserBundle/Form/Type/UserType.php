<?php

namespace VM\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class UserType extends BaseType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('sexe');
        $builder->add('age');
        $builder->add('ville');
        #$builder->add('photo');
    }

    public function getName()
    {
        return 'vm_userbundle_usertype';
    }
}