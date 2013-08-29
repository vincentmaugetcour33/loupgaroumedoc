<?php

namespace VM\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VM\BlogBundle\Entity\Commentaire;



class LoadCommentaireData implements FixtureInterface 
{
 public function load(ObjectManager $manager) 
 {         
  $repository_livre = $manager->getRepository('VMBlogBundle:Livre');
  $livre_principal = $repository_livre->findOneByTitre('Le monstre du Médoc'); 
  
  $repository_user = $manager->getRepository('VMUserBundle:User');
  $user_admin = $repository_user->findOneByUsername('mauget');
  
  for($i=1;$i<=11;$i++)
  {
  $commentaire = new Commentaire();
 //$commentaire->setAuteur('Vincent Mauget');
  $commentaire->setContenu('Ceci est un test '.$i);
  $commentaire->setStatut('modere');
  $commentaire->setLivre($livre_principal);
  $commentaire->setUser($user_admin);
  $manager->persist($commentaire);
  }
 
 $manager->flush();
 }   
     
}

?>
