<?php

namespace VM\BlogBundle\Twig\Extensions;

class HTMLDecodeTwigExtension extends \Twig_Extension 
{

    public function getFilters()
    {
        return array(
            'htmldecode' => new \Twig_Filter_Method($this, 'htmldecode', array(
                'is_safe' => array('html'))
            )
        );
    }

    // your custom function
    public function htmldecode($contenu)
    {
        return strtolower($contenu);
    }

    // Name for Service
    public function getName()
    {
        return 'html_decode';
    }
}
