<?php

namespace VM\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VM\BlogBundle\Entity\Extrait;

class LoadExtraitData implements FixtureInterface 
{
 public function load(ObjectManager $manager) 
 {         
  $repository = $manager->getRepository('VMBlogBundle:Livre');
  $livre_principal = $repository->findOneByTitre('Le monstre du Médoc'); 
     
  for($i=1;$i<4;$i++)
  {
    $extrait = new Extrait();
    $extrait->setSection('Chapitre '.$i);
    $extrait->setContenu($i.' : Extrait qui devrait defiler si cest assez long evidemment
            qui peut le savoir nous le déterminerons bien assez tôt avec le test
            effectue sur cette page.');
    $extrait->setLivre($livre_principal);
    $manager->persist($extrait);    
  }   
  
  $manager->flush();
   
 }   
     
}


