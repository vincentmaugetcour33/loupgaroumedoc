<?php
// src/VM/UserBundle/Controller/ProfileController.php;
 
namespace VM\UserBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use VM\UserBundle\Entity\User;
use VM\UserBundle\Form\UserType;

class ProfileController extends Controller
{
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
              $this->get('session')->setFlash()->add('info', 'Vous êtes enregistré. Vous pouvez vous connecter.');
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
   
    public function supprimeprofileAction()
   {
     $manager =$this->getDoctrine()->getManager();
     $manager->remove($this->getUser());
     
     return $this->redirect($this->generateUrl('logout'));
   }

   

}

?>
