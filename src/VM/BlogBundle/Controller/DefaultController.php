<?php

namespace VM\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Livre');
        $livre_principal = $repository->findOneByTitre('Le monstre du Médoc');
        
        return $this->render('VMBlogBundle:Default:index.html.twig', array('livre' => $livre_principal));
    }
    
    public function bioAction()
    {
        return $this->render('VMBlogBundle:Default:biographie.html.twig');
    }

     public function comAction()
     {
      $repository = $this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Commentaire');
      $liste_commentaires = $repository->getCommentairesAcceptes();
      
      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
        $liste_commentaires,$this->get('request')->query->get('page', 1),
        5  );
        return $this->render('VMBlogBundle:Default:commentaire.html.twig', array('pagination' => $pagination));
        }

     public function comlistAction()
     {
      $repository = $this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Commentaire');
      $liste_commentaires = $repository->getCommentairesAcceptes();
      
     }
        
}      
        
        

