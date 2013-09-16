<?php

namespace VM\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use VM\BlogBundle\Entity\Document;


class LoadDocumentData extends AbstractFixture implements OrderedFixtureInterface
{
 public function load(ObjectManager $manager) 
 {         
  $repository_livre = $manager->getRepository('VMBlogBundle:Livre');
  $livre_principal = $repository_livre->findOneByTitre('Loup-Garou, le monstre du Médoc'); 
 
  $document = new Document();
  $document->setLibelle('Chapitre Test');
  $document->setUrl('Chapitre test.pdf');
  $document->setLivre($livre_principal);
  $manager->persist($document);
  $manager->flush();
 }   
 
 public function getOrder()
    {
        return 6; // l'ordre dans lequel les fichiers sont chargés
    }
    
 }

?>
