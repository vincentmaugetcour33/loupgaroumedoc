<?php

namespace VM\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use VM\BlogBundle\Entity\Commentaire;
use VM\BlogBundle\Form\CommentaireType;


class CommentaireController extends Controller
{
    # action de la page commentaires paginée avec bundle
     public function comAction()
     {
      $repository = $this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Commentaire');
      $liste_commentaires = $repository->getCommentairesAcceptes1();
      
      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
        $liste_commentaires,$this->get('request')->query->get('page', 1),
        5  );
        return $this->render('VMBlogBundle:Commentaire:commentaire.html.twig', array('pagination' => $pagination));
        }

     # action de la page commentaires paginée sans bundle
     public function comlistAction($page)
     {
      $repository = $this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Commentaire');
      $liste_commentaires = $repository->getCommentairesAcceptes();
      
      $total_commentaires = count($liste_commentaires);
      $commentaires_per_page = $this->container->getParameter('max_commentaires_on_listepage');
      $last_page = ceil($total_commentaires / $commentaires_per_page);
      $previous_page = $page > 1 ? $page - 1 : 1;
      $next_page = $page < $last_page ? $page + 1 : $last_page;  
      
      /* résultat  à afficher*/    
      $resultats = $repository->getCommentairesAcceptes_pagine($page,$commentaires_per_page);
      
      return $this->render('VMBlogBundle:Commentaire:comlist.html.twig', array(
         'entities' => $resultats,
            'last_page' => $last_page,
          'previous_page' => $previous_page,
            'current_page' => $page,
            'next_page' => $next_page,
            'total_commentaires' => $total_commentaires
        ));
      }
     
      
      public function ajoutcommentaireAction()
      {
       // analyse de la route
       $request = $this->get('request');
       
       // creation du formulaire
       $commentaire = new Commentaire();
       $repository =$this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Livre');
       $livre_principal = $repository->findOneByTitre('Le monstre du Médoc');
       $commentaire->setLivre($livre_principal);
       $form = $this->createForm(new CommentaireType, $commentaire);
      
       // traitement daffichage du formulaire après clic sur le bouton d'ajout de commentaire
       if($request->isXmlHttpRequest())
       {
         return $this->render("VMBlogBundle:Commentaire:formulaire.html.twig", array(
           'form' => $form->createView()
           ));
        } 
       else 
       {
         if ($request->getMethod() == 'POST')
         {
            $form->bind($request);
             if ($form->isValid())
             {
              $manager = $this->getDoctrine()->getManager();
              $manager->persist($commentaire);
              $manager->flush();   
              return $this->redirect($this->generateUrl('vm_blog_com_list'));
             }
          }  
         else
            {
            return $this->render("VMBlogBundle:Commentaire:formulaire.html.twig");  
            }    
       }    
         
      }
 
    
    
    
}
