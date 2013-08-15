<?php

namespace VM\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VM\BlogBundle\Entity\Commentaire;



class LoadCommentaireData implements FixtureInterface 
{
 public function load(ObjectManager $manager) 
 {         
  $repository = $manager->getRepository('VMBlogBundle:Livre');
  $livre_principal = $repository->findOneByTitre('Le monstre du Médoc');   
  
  for($i=1;$i<=11;$i++)
  {
  $commentaire = new Commentaire();
  $commentaire->setAuteur('Vincent Mauget');
  $commentaire->setContenu('Ceci est un test '.$i);
  $commentaire->setStatut('modere');
  $commentaire->setLivre($livre_principal);
  $manager->persist($commentaire);
  }
 
 $manager->flush();
 }   
     
}

?>
