<?php

namespace VM\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    /**
     * Index
     */
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Livre');
        $livre_principal = $repository->findOneByTitre('Loup-Garou, le monstre du Médoc');
        
        return $this->render('VMBlogBundle:Default:index.html.twig', array('livre' => $livre_principal));
    }
    
    /**
     * Biographie
     */
    public function bioAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Livre');
        $livres_secondaires = $repository->findautreslivres();
        
        return $this->render('VMBlogBundle:Default:biographie.html.twig',
                array ( 'livres_secondaires' => $livres_secondaires));
    }

           
}      
        
        

