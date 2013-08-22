<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SocialBarHelper
 *
 * @author Vincent
 */


namespace VM\BlogBundle\Templating\Helper;

use Symfony\Component\Templating\Helper\Helper;
use Symfony\Component\Templating\EngineInterface;


class SocialBarHelper extends Helper{
   
   protected $templating;
   
   public function __construct(EngineInterface $templating)
    {
        $this->templating  = $templating;
    }
    
    public function socialButtons($parameters)
    {
      return $this->templating->render('AcmeDemoBundle:helper:socialButtons.html.twig', $parameters);
    }
    
    public function facebookButton($parameters)
    {
      return $this->templating->render('AcmeDemoBundle:helper:facebookButton.html.twig', $parameters);
    }

    public function twitterButton($parameters)
    {
      return $this->templating->render('AcmeDemoBundle:helper:twitterButton.html.twig', $parameters);
    }
    
    public function getName()
   {
    return 'socialButtons';
   }








}

?>
