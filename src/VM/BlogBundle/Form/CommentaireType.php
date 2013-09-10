<?php

namespace VM\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            //->add('user', 'text', array('label' => 'Auteur'))
            ->add('contenu', 'textarea', array('label' => 'Commentaire', 
                    'attr'=> array('class'=>"tinymce", 'cols'=>'120'), 'required'=>true));
            //->add('date', 'date',);
            //->add('statut', )
            //->add('livre');
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VM\BlogBundle\Entity\Commentaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vm_blogbundle_commentairetype';
    }
}
