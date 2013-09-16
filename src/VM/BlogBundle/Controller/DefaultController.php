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
        $em = $this->getDoctrine()->getManager();
        
        $repository = $em->getRepository('VMBlogBundle:Livre');
        $livre_principal = $repository->findOneByTitre('Loup-Garou, le monstre du Médoc');
        
        // Recherche du document PDF à mettre sur la page d'accueil
        $repository = $em->getRepository('VMBlogBundle:Document');
        $document_principal = $repository->getTrouveDernierDocument();
        
        return $this->render('VMBlogBundle:Default:index.html.twig', array(
            'document' => $document_principal,
            'livre' => $livre_principal));
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
        
        

