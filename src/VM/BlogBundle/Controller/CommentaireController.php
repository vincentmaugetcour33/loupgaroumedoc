<?php

namespace VM\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use VM\BlogBundle\Entity\Commentaire;
use VM\BlogBundle\Form\CommentaireType;


class CommentaireController extends Controller
{
     /**
      * List commentaire
      * 
      * @param integer page
      */
     public function listcommentaireAction($page)
     {      
      
      $request = $this->get('request');
      $manager =$this->getDoctrine()->getManager();
    
      // pour le formulaire d'ajout
      $commentaire = new Commentaire();
      $livre_principal = $manager->getRepository('VMBlogBundle:Livre')->findOneByTitre('Le monstre du Médoc');
      $commentaire->setLivre($livre_principal);
  
      $form = $this->createForm(new CommentaireType, $commentaire);
       
      if ($request->getMethod() == 'POST')
         {
            $form->bind($request);
             if ($form->isValid())
             {
           
              $manager->persist($commentaire);
              $manager->flush();   
             }
             return $this->redirect($this->generateUrl('vm_blog_commentaire_list'));
          }  
      
      $commentaires_per_page = $this->container->getParameter('max_commentaires_on_listepage');
      $previous_page = $page > 1 ? $page - 1 : 1;
        
      $repository = $manager->getRepository('VMBlogBundle:Commentaire');
      $total_commentaires = count($repository->findByStatut('modere'));
      $last_page = ceil($total_commentaires/$commentaires_per_page);
      $next_page = $page < $last_page ? $page + 1 : $last_page;
      $liste_commentaires = $repository->getCommentairesAcceptes($page,$commentaires_per_page);
      
      return $this->render('VMBlogBundle:Commentaire:comlist.html.twig', array(
         'form' => $form->createView(),
         'entities' => $liste_commentaires,
         'total_commentaires'=> $total_commentaires,
         'last_page' => $last_page,
         'previous_page' => $previous_page,
         'current_page' => $page,
         'next_page' => $next_page
       ));
      }
     
      /**
        * Show commentaire
        *
        * @param integer $id
        */
      public function showcommentaireAction(Commentaire $commentaire)
      {
        return $this->render('VMBlogBundle:Commentaire:comshow.html.twig', 
                array('commentaire' => $commentaire));  
      }
      
      /**
        * Ajout commentaire
        */
      /*public function ajoutcommentaireAction()
      {
       // analyse de la route
       $request = $this->get('request');
       
       // creation du formulaire
       $commentaire = new Commentaire();
       $manager =$this->getDoctrine()->getManager();
       $repository = $manager->getRepository('VMBlogBundle:Livre');
       
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
              $livre_principal = $repository->findOneByTitre('Le monstre du Médoc');
              $commentaire->setLivre($livre_principal);
              $manager->persist($commentaire);
              $manager->flush();   
              return $this->redirect($this->generateUrl('vm_blog_commentaire_list'));
             }
          }  
         else
            {
            return $this->render("VMBlogBundle:Commentaire:formulaire.html.twig");  
            }    
       }    
         
      }*/
      
      /**
        * Supprime commentaire
        *
        * @param integer $commentaire
        */
      public function supprimecommentaireAction(Commentaire $commentaire)
      {
          $manager =$this->getDoctrine()->getManager();
          $manager->remove($commentaire);
          $manager->flush();
          return $this->redirect($this->generateUrl('vm_blog_commentaire_list'));
       }
      
      /**
        * Edit commentaire
        *
        * @param integer $commentaire
        */ 
      public function editcommentaireAction(Commentaire $commentaire)
      {
       //$repository = $this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Commentaire');   
        //$commentaire = $repository->find($id);
        // analyse de la route
       $request = $this->get('request');
       
       // creation du formulaire
       //$repository =$this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Livre');
       //$livre_principal = $repository->findOneByTitre('Le monstre du Médoc');
       //$commentaire->setLivre($livre_principal);
       $form = $this->createForm(new CommentaireType, $commentaire);
      
       // traitement daffichage du formulaire après clic sur le bouton d'ajout de commentaire
       if($request->isXmlHttpRequest())
       {
         return $this->render("VMBlogBundle:Commentaire:formulaire.html.twig", array(
             'commentaire' => $commentaire, 
             'form' => $form->createView()
           ));
        } 
       else 
       {
         if ($request->getMethod() == 'POST')
         {
            $form->bind($request);
             if ($form->isValid() AND !$manager->contains($commentaire))
             {
              $manager = $this->getDoctrine()->getManager();
              $manager->persist($commentaire);
              $manager->flush();   
              
             }
            return $this->redirect($this->generateUrl('vm_blog_commentaire_list'));
               
          }  
         else
            {
            return $this->render("VMBlogBundle:Commentaire:formulaire.html.twig");  
            }    
       }    
       
         
      }
    
    
    
}
