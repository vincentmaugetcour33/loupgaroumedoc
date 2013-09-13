<?php

namespace VM\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VM\BlogBundle\Entity\Commentaire;



class LoadCommentaireData extends AbstractFixture implements OrderedFixtureInterface
{
 public function load(ObjectManager $manager) 
 {         
  $repository_livre = $manager->getRepository('VMBlogBundle:Livre');
  $livre_principal = $repository_livre->findOneByTitre('Loup-Garou, le monstre du Médoc'); 
  
  $repository_user = $manager->getRepository('VMUserBundle:User');
  $user_admin = $repository_user->findOneByUsername('loupmedoc');
  
  for($i=1;$i<=11;$i++)
  {
  $commentaire = new Commentaire();
 //$commentaire->setAuteur('Vincent Mauget');
  $commentaire->setContenu('Ceci est un test '.$i);
  $commentaire->setStatut('accepte');
  $commentaire->setLivre($livre_principal);
  $commentaire->setUser($user_admin);
  $manager->persist($commentaire);
  }
 
 $manager->flush();
 }   
 
 public function getOrder()
    {
        return 3; // l'ordre dans lequel les fichiers sont chargés
    }
    
 }

?>
