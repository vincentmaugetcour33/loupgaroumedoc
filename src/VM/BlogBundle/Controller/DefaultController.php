<?php

namespace VM\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    # action de la page d'accueil
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Livre');
        $livre_principal = $repository->findOneByTitre('Le monstre du Médoc');
        
        return $this->render('VMBlogBundle:Default:index.html.twig', array('livre' => $livre_principal));
    }
    
    # action de la page biographie
    public function bioAction()
    {
        return $this->render('VMBlogBundle:Default:biographie.html.twig');
    }

           
}      
        
        

