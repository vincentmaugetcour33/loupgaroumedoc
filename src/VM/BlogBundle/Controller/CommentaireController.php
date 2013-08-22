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
      $manager =$this->getDoctrine()->getManager();
      
      $commentaires_per_page = $this->container->getParameter('max_commentaires_on_listepage');
      $previous_page = $page > 1 ? $page - 1 : 1;
        
      $repository = $manager->getRepository('VMBlogBundle:Commentaire');
      $total_commentaires = count($repository->findAll());
      $last_page = ceil($total_commentaires/$commentaires_per_page);
      $next_page = $page < $last_page ? $page + 1 : $last_page;
      $liste_commentaires = $repository->getCommentairesAcceptes($page,$commentaires_per_page);
      
      return $this->render('VMBlogBundle:Commentaire:comlist.html.twig', array(
         'entities' => $liste_commentaires,
         'total_commentaires'=> $total_commentaires,
         'last_page' => $last_page,
         'previous_page' => $previous_page,
         'current_page' => $page,
         'next_page' => $next_page
       ));
      }
     
      /**
       * Ajout commentaire
       */ 
      public function ajoutcommentaireAction()
      {
      $request = $this->get('request');
     
      $commentaire = new Commentaire();
      $form = $this->createForm(new CommentaireType, $commentaire);    
      
      $manager =$this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST')
         {
         
            $form->bind($request);
             if ($form->isValid())
             {
              $livre_principal = $manager->getRepository('VMBlogBundle:Livre')->findOneByTitre('Le monstre du Médoc');
              $commentaire->setLivre($livre_principal);
              $manager->persist($commentaire); 
              $manager->flush();   
              $this->get('session')->getFlashBag()->add('info', 'Commentaire ajouté');
             }
             return $this->redirect($this->generateUrl('vm_blog_commentaire_list'));
          } 
      return $this->render('VMBlogBundle:Commentaire:formulaire.html.twig', array(
                           'form' => $form->createView()));
          
      }
      
 
      /**
        * Supprime commentaire
        *
        * @param Commentaire $commentaire
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
        * @param Commentaire $commentaire
        */ 
      public function editcommentaireAction(Commentaire $commentaire)
      {
       $form = $this->createForm(new CommentaireType, $commentaire);
       $request = $this->getRequest();
       // traitement daffichage du formulaire après clic sur le bouton d'edition de commentaire
       if($request->isXmlHttpRequest())
       {
         return $this->render("VMBlogBundle:Commentaire:formulaire.html.twig", array(
                              'form' => $form->createView(),
                              'editer' => 1,
                              "id_commentaire" => $commentaire->getId()  
  
           ));
        }
          
        if ($request->getMethod() == 'POST')
         {
          
            $form->bind($request);
             if ($form->isValid())
             {
              $manager =$this->getDoctrine()->getManager();
              $livre_principal = $manager->getRepository('VMBlogBundle:Livre')->findOneByTitre('Le monstre du Médoc');
              $commentaire->setLivre($livre_principal);
              $manager->persist($commentaire); 
              $manager->flush();   
              $this->get('session')->getFlashBag()->add('info', 'Commentaire modifié');
             }
             return $this->redirect($this->generateUrl('vm_blog_commentaire_list'));
          } 
        
       }    
       
         
      
    
    
    
}
