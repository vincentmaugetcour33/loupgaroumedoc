<?php
// src/VM/UserBundle/Controller/ProfileController.php;
 
namespace VM\UserBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use VM\UserBundle\Entity\User;
use VM\UserBundle\Form\UserType;
use VM\UserBundle\Form\UserEditType;
use VM\UserBundle\Form\EmailType;

class ProfileController extends Controller
{
   /**
    * Show profile
     */
    public function showprofileAction()
   {
      
        $liste_commentaires =$this->getDoctrine()->getManager()->getRepository('VMBlogBundle:Commentaire')->findByUser($this->getUser());
       
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
            //$this->get('session')->getFlashBag()->add('info', 'method valide'); 
            $form->bind($request);
             if ($form->isValid())
             {
              //$this->get('session')->getFlashBag()->add('info', 'formulaire valide');   
              //$post = $request->request->get('form');
              //$user->upload();
              //$user->setFile($form->getData()->getFile()->getClientOriginalName());
              $manager->persist($user); 
              $manager->flush();   
              //$this->get('session')->getFlashBag()->add('info', 'Vous êtes enregistré. Vous pouvez vous connecter.');
              // Paramétrage et envoi d'un email de rappel des identifiants       
              $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
                            ->setUsername('vincent.mauget@gmail.com')
                            ->setPassword('A12&Bbc1');
              
              $mailer= \Swift_Mailer::newInstance($transport);
              $message = \Swift_Message::newInstance()
                         ->setSubject('Site Loup-Garou, Le monstre du Médoc')
                         ->setFrom('noreply@gmail.com')
                         ->setReplyTo('reply@monstremedoc.com')  
                         ->setContentType('text/html')
                         ->setTo($user->getEmail())
                         ->setBody(
                               $this->renderView('VMUserBundle:Profile:email_ajout.txt.twig', array('user' => $user), 'text/html')
                                 );
               $mailer->send($message);
             
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
      
       $form = $this->createForm(new UserEditType, $user);
       $request = $this->get('request');
         
        if ($request->getMethod() == 'POST')
         {
            //$this->get('session')->getFlashBag()->add('info', 'methode valide');
            // on regarde si le mot de passe a changé
            $ancien_mdp = $user->getPassword();
            $requete_user = $request->request->get($form->getName());
            $is_nvmdp = ($requete_user['password'] == '')? false : true ;
            if(!$is_nvmdp)
            {
	        // réinjection de l'ancien mot de passe dans la requête
	        $requete_user['password'] = $ancien_mdp;
	        $request->request->set($form->getName(), $requete_user);
	    }
            //$requete_user =$request->request->get('vm_userbundle_useredittype');
            // on regarde si la photo a changé
            //$ancienne_photo = $user->getPhoto();
            //$requete_user = $request->request->get($form->getName());
            //$is_nvphoto = ( $requete_user['file'] == '') ? false : true ;
            //if(!$is_nvphoto)
            //{
               // réinjection de l'ancienne photo dans la requête
	      //  $requete_user['file'] = $ancienne_photo;
	       //$request->request->set($form->getName(), $requete_user); 
            //}
            
            $form->bind($request);
             if ($form->isValid())
             {
               //$user->preUpload();
                //$this->get('session')->getFlashBag()->add('info', 'formulaire valide');
                //$is_newpassword = ($form['password'] == '')? false : true ;
               //if($is_newpassword){
                //   $user->setPassword($password)
               //}  
              $manager =$this->getDoctrine()->getManager();
              //$user->setFile($form['file']);           
              $manager->persist($user); 
              //$user->upload();
              $manager->flush();   
              //$this->get('session')->getFlashBag()->add('info', 'Votre profil a été modifié');
            
              $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
                            ->setUsername('vincent.mauget@gmail.com')
                            ->setPassword('A12&Bbc1');
              
              $mailer= \Swift_Mailer::newInstance($transport);
              $message = \Swift_Message::newInstance()
                         ->setSubject('Site Loup-Garou, Le monstre du Médoc')
                         ->setFrom('noreply@gmail.com')
                         ->setContentType('text/html')
                         ->setTo($user->getEmail())
                         ->setBody(
                               $this->renderView('VMUserBundle:Profile:email_modif.txt.twig', array('user' => $user), 'text/html')
                                 );
               $mailer->send($message);
             
              $this->get('session')->getFlashBag()->add('info', 'Après modification, un email vous a été envoyé dans votre boîte.');
                       
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
    // $user=$this->getUser();
     
   
    
    $manager->remove($this->getUser());
    $manager->flush();  
    
    /*$transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
                            ->setUsername('vincent.mauget@gmail.com')
                            ->setPassword('A12&Bbc1');
              
              $mailer= \Swift_Mailer::newInstance($transport);
              $message = \Swift_Message::newInstance()
                         ->setSubject('Site Loup-Garou, Le monstre du Médoc')
                         ->setFrom('noreply@gmail.com')
                         ->setContentType('text/html')
                         ->setTo($user->getEmail())
                         ->setBody(
                               $this->renderView('VMUserBundle:Profile:email_spprime.txt.twig', array('user' => $user), 'text/html')
                                 );
               $mailer->send($message);*/
    
    $this->get('security.context')->setToken(null);
    $this->get('request')->getSession()->invalidate();
    $this->get('session')->getFlashBag()->add('info', 'Votre profil a été supprimé.');
    return $this->redirect($this->generateUrl('vm_blog_homepage'));

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
