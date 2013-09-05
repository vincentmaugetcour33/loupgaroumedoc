<?php

namespace VM\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserEditType extends UserType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        // on désactive le champ correspondant à l'ancien mot de passe
        //$builder->remove('password');
     
        $builder->add('password', 'password', array('label'=>'Votre nouveau mot de passe :',
                                    'required' => false));
        $builder->remove('file');
          //      ->add('file',  'file',  array( 'label' => 'Votre nouvelle photo', 'required' => false));
        // on ajoute un champ password pour le nouveau mot de passe
        //$builder->add('nvpassword', 'password', array('label'=>'Votre nouveau mot de passe :'));          
            
           
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
        return 'vm_userbundle_useredittype';
    }
}
