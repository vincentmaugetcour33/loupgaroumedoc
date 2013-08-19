<?php

namespace VM\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ExtraitController extends Controller
{
    /**
     * Index
     * 
     */
    public function indexAction()
    {
      $manager =$this->getDoctrine()->getManager();
      $liste_extraits = $manager->getRepository('VMBlogBundle:Extrait')->findAll();
      $total_extraits = count($liste_extraits);
      
      $choix = rand(1,$total_extraits);
      return $this->render('VMBlogBundle:Extrait:index.html.twig', array(
          'liste_extraits' => $liste_extraits,
          'choix' => $choix
      ));
      
    }
    
}
