<?php
namespace VM\UserBundle\Form;    
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RangeType extends AbstractType
    {
        public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            
            'min' => "8", 
            'maxlength' => "100",
            "step" => "1"  )
        );
    }
        
    
         /**
         * Get parent
         *
         * @return string
         */
        public function getParent()
        {
            return 'integer';
        }

        /**
         * Get name
         *
         * @return string
         */
        public function getName()
        {
            return 'range';
        }
    } 