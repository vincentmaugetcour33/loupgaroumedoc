<?php
// src/VM/UserBundle/Controller/ProfileController.php;
 
namespace VM\UserBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use VM\UserBundle\Entity\User;
use VM\UserBundle\Form\UserType;

class ProfileController extends Controller
{
   /**
    * Show profile
     */
    public function showprofileAction()
   {
     return $this->render('VMUserBundle:Profile:profileshow.html.twig');
   }

    /**
       * Ajout profile
       */ 
    
      public function ajoutprofileAction()
      {
       $request = $this->get('request');
       $user = new User();
      
       $form = $this->createForm(new UserType, $user);    
      
       $manager =$this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST')
         {
         
            $form->bind($request);
             if ($form->isValid())
             {
              $manager->persist($user); 
              $manager->flush();   
              $this->get('session')->getFlashBag()->add('info', 'Vous êtes enregistré. Vous pouvez vous connecter.');
             }
             return $this->redirect($this->generateUrl('vm_blog_homepage'));
          } 
          return $this->render('VMUserBundle:Profile:formulaire.html.twig', array(
                           'form' => $form->createView()));
          
        }
   
        /**
        * Edit profile
        * 
        */ 
      public function editprofileAction()
      {
       $user = new User();
       $user = $this->getUser();
       
       $form = $this->createForm(new UserType, $user);
       $request = $this->getRequest();
              
        if ($request->getMethod() == 'POST')
         {
          
            $form->bind($request);
             if ($form->isValid())
             {
              $manager =$this->getDoctrine()->getManager();
                         
              $manager->persist($user); 
              $manager->flush();   
              $this->get('session')->getFlashBag()->add('info', 'Votre profil a été modifié');
             }
             return $this->redirect($this->generateUrl('vm_blog_homepage'));
          } 
        
               return $this->render("VMUserBundle:Profile:formulaire.html.twig", array(
                              'form' => $form->createView(),
                              'editer' => 1));  
          
       }    
   
    /**
        * Supprime profile
        */
    public function supprimeprofileAction()
   {
     $manager =$this->getDoctrine()->getManager();
     $manager->remove($this->getUser());
     $manager->flush();
     
     //$this->getUser()->logOut(); 
      return $this->redirect($this->generateUrl('logout'));
   }

   /**
        * Trouve profile
        */
    public function trouveprofileAction()
    {
      $request = $this->getRequest();
      $user = new User();
      
      if ($request->getMethod() == 'POST')
         {
          $email = $request->request->get('email');
          $manager = $this->getDoctrine()->getManager();
          $user = $manager->getRepository('VMUserBundle:User')->findByEmail($email);
          
          if ($user)
          {   
          // Paramétrage et envoi d'un email de rappel des identifiants       
          $message = \Swift_Message::newInstance()
                  ->setContentType("text/html")
                  ->setSubject('Site Loup-Garou, Le monstre du Médoc')
                  ->setFrom('vincent.mauget@example.com')
                  ->setTo($user->getEmail())
                  ->setBody($this->renderView('VMUserBundle:Profile:email.txt.twig', array('user' => $user), 'text/html'));
          $this->get('mailer')->send($message);
          
           $this->get('session')->getFlashBag()->add('info', 'Vos identifiants ont été envoyés à votre adresse email.');
           return $this->redirect($this->generateUrl('vm_blog_homepage'));
           
          }
          else
          {
           $this->get('session')->getFlashBag()->add('info', "Cette adresse n'est pas renseignée dans notre base, vérifier bien votre saisie.");  
           return $this->redirect($this->generateUrl('vm_user_trouve'));
           
          }   
           
           
          }
      
         return $this->render("VMUserBundle:Profile:formulaire_email.html.twig");  
      //$manager = $this->getDoctrine()->getManager();
      //$repository = $manager->getRepository('VMUserBundle:User')->;
    }
}

?>
