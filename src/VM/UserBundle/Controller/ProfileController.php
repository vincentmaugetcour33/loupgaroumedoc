<?php
// src/VM/UserBundle/Controller/ProfileController.php;
 
namespace VM\UserBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use VM\UserBundle\Entity\User;
use VM\UserBundle\Form\UserType;
use VM\UserBundle\Form\EmailType;

class ProfileController extends Controller
{
   /**
    * Show profile
     */
    public function showprofileAction()
   {
      //$user=new User();
      //$user=$this->getUser();
      //$liste_commentaires =serialize($user->getCommentaires());
        $liste_commentaires =$this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Commentaire')->findByUser($this->getUser());
       //$liste_commentaires = $user->getCommentaires();
     return $this->render('VMUserBundle:Profile:profileshow.html.twig', array('commentaires' => $liste_commentaires ));
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
              $post = $request->request->get('form');
                 
              //if ($user->getSexe()== "femme") { }
              $manager->persist($user); 
              $manager->flush();   
              $this->get('session')->getFlashBag()->add('info', 'Vous êtes enregistré. Vous pouvez vous connecter.');
                  // Paramétrage et envoi d'un email de rappel des identifiants       
                //$message = new \Swift_Message::newInstance()
              $message = new \Swift_Message();              
              $message//->setContentType("text/html")
                  ->setSubject('Site Loup-Garou, Le monstre du Médoc')
                  ->setFrom('vincent.mauget@hotmail.fr')
                  ->setTo('vincent.mauget@hotmail.fr') //array($post['email']))
                  ->setBody('text is going here'); 
                      //$this->renderView('VMUserBundle:Profile:email.txt.twig', array('user' => $user), 'text/html'));
              $this->get('mailer')->send($message);
              $this->get('session')->getFlashBag()->add('info', 'Un email vous a été envoyé dans votre boîte.');
              
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
    $commentaires = $manager->getRepository('VMBlogBundle:Commentaire')->findByUser($this->getUser());
    
    $manager->remove($this->getUser());
    $manager->flush();
    //$this->get('request')->get('session')->invalidate();
    //$this->get('session')->getFlashBag()->add('info', 'Votre profil a été supprimé.');
    return $this->redirect($this->generateUrl('vm_blog_homepage'));
     //$this->getUser()->logOut(); 
      //return $this->redirect($this->generateUrl('logout'));
   }

   /**
        * Trouve profile
        */
    public function trouveprofileAction()
    {
      $request = $this->get('request');
      $user = new User();
      $form = $this->createForm(new EmailType, $user);
      
      if ($request->getMethod() == 'POST')
         {
          $form->bind($request);
          if ($form->isValid())
            {
          $manager = $this->getDoctrine()->getManager();
          $destinataire = $manager->getRepository('VMUserBundle:User')->findByEmail($user->getEmail());
           if ($destinataire != null)
           {    
          // Paramétrage et envoi d'un email de rappel des identifiants       
          //$message = \Swift_Message::newInstance()
           //       ->setContentType("text/html")
            //      ->setSubject('Site Loup-Garou, Le monstre du Médoc')
             //    ->setFrom('vincent.mauget@example.com')
              //   ->setTo($destinataire->getEmail())
              //    ->setBody($this->renderView('VMUserBundle:Profile:email.txt.twig', array('user' => $destinataire), 'text/html'));
          //$this->get('mailer')->send($message);
          $this->get('session')->getFlashBag()->add('info', 'Vos identifiants ont été envoyés à votre adresse email.');
           }
           else
           {
           $this->get('session')->getFlashBag()->add('info', $destinataire." : Cette adresse n'existe pas dans nos données.");    
           }    
          }
          else
          {
          
          $this->get('session')->getFlashBag()->add('info', $destinataire." : Problème de transfert du paramètre.");    
          }
         
          return $this->redirect($this->generateUrl('vm_blog_homepage'));
         } 
                               
         return $this->render("VMUserBundle:Profile:formulaire_email.html.twig",
                 array(  'form' => $form->createView()));  
       }
}

?>
