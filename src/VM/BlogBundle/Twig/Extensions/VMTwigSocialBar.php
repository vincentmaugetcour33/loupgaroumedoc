<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

namespace VM\BlogBundle\Twig\Extensions;

use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * Description of VMTwigSocialBar
 *
 * @author Vincent
 */
class VMTwigSocialBar extends \Twig_Extension 
{
 
    private $container;
    
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function getName()
    {
        return 'vm_social_bar';
    }

    
    public function getFunctions()
    {
      return array(
        'socialButtons' => new \Twig_Function_Method($this, 'getSocialButtons' ,array('is_safe' => array('html'))),
        'facebookButton' => new \Twig_Function_Method($this, 'getFacebookLikeButton' ,array('is_safe' => array('html'))),
        'twitterButton' => new \Twig_Function_Method($this, 'getTwitterButton' ,array('is_safe' => array('html')))
        );
    }

    
    public function getSocialButtons($parameters = array())
    {
      // Aucun paramètre défini, on garde les valeurs par défaut
      if (!array_key_exists('facebook', $parameters)){
        $render_parameters['facebook'] = array();
      // des paramètres sont définis, on surcharge les valeurs
      }else if(is_array($parameters['facebook'])){
        $render_parameters['facebook'] = $parameters['facebook'];
      // le bouton n'est pas affiché
      }else{
        $render_parameters['facebook'] = false;
      }

      if (!array_key_exists('twitter', $parameters)){
        $render_parameters['twitter'] = array();
      }else if(is_array($parameters['twitter'])){
        $render_parameters['twitter'] = $parameters['twitter'];
      }else{
        $render_parameters['twitter'] = false;
      }

      // récupère le service du helper et affiche le template
      return $this->container->get('vm.socialbarhelper')->socialButtons($render_parameters);
    }
    
    
    // https://developers.facebook.com/docs/reference/plugins/like/ 
    public function getFacebookLikeButton($parameters = array())
    {
       // valeurs par défaut. Vous pouvez les surcharger en les définissant
       $parameters = $parameters + array(
            'url' => null,
            'locale' => 'fr_FR',
            'send' => false,
            'width' => 300,
            'showFaces' => false,
            'layout' => 'button_count'
        );

       return $this->container->get('vm.socialbarhelper')->facebookButton($parameters);
    }
    
    
     public function getTwitterButton($parameters = array())
     {
       $parameters = $parameters + array(
            'url' => null,
            'locale' => 'fr_FR',
            'message' => "Je veux partager cette page avec vous",
            'text' => 'Patrice Mauget',
            'via' => '@pathrv1',
            'tag' => ""
        );


       return $this->container->get('vm.socialbarhelper')->twitterButton($parameters);
    }
    
}


