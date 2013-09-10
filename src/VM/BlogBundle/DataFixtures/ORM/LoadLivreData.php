<?php

namespace VM\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VM\BlogBundle\Entity\Livre;



class LoadLivreData extends AbstractFixture implements OrderedFixtureInterface
{
 public function load(ObjectManager $manager) 
 {         
  $repository_user = $manager->getRepository('VMUserBundle:User');
  $user_admin = $repository_user->findOneByUsername('loupmedoct');
  
 
  $livre1 = new Livre();
  $livre1->setTitre('Loup-Garou, le monstre du Médoc');
  $livre1->setCouverture('modere');
  $livre1->setAuteur('Patrice Mauget');
  $livre1->setUrl('aucune');
  $livre1->setEdition('EdiLivre');
  $livre1->setResume('Les nuits de pleine lune un monstre tue sur les dunes de la Pointe de Grave,
        dans les rues du Verdon et de Soulac-sur-Mer. C\'est un Loup-garou...');
  
  $livre2 = new Livre();
  $livre2->setTitre('La Genèse interdite');
  $livre2->setCouverture('livre-la-genese-interdite.jpg');
  $livre2->setAuteur('Patrice Mauget');
  $livre2->setEdition('Amazon');
  $livre2->setUrl('http://www.priceminister.com/offer/buy/188922655/la-genese-interdite-de-patrice-mauget.html');
  $livre2->setResume('Parcours d\'un adolescent rebelle en quête de l\'absolu.');
  
  $livre3 = new Livre();
  $livre3->setTitre('Pluie de vers');
  $livre3->setCouverture('livre-pluie-de-vers.jpg');
  $livre3->setAuteur('Patrice Mauget');
  $livre3->setEdition('Panthéon');
  $livre3->setUrl('http://www.editions-pantheon.fr/patrice-mauget/poemes/pluie-de-vers.html');
  $livre3->setResume('La vie est ainsi. Elle nous bouscule, elle nous ravit, 
      elle nous apprend, mais nous ne parvenons jamais à décrypter la totalité de ce que
      chaque instant comprend d’informations. Seule l’impression générale du tableau nous demeure.
      Ce livre en est le témoignage. Brut, décousu, c’est ainsi qu’apparaît le schéma directeur 
      de Pluie de Vers.  Les poèmes d’inspiration variée se succèdent au gré des impressions d’une vie, 
      fruits de voyages, de souvenirs et d’êtres aimés. Ils ne se succèdent pas dans un ordre chronologique
      mais selon un rythme aléatoire où des tendances fortes suivent le flux et le reflux des
      marées de l’inspiration. La Nature y est omniprésente par la pluie, par les fleurs, par la chair. 
      Elle est sans doute le personnage essentiel de l’œuvre, celui avec lequel dialogue sans fin l’ego 
      de l’auteur.');
  
  $manager->persist($livre1);
  $manager->persist($livre2);
  $manager->persist($livre3);
   
 $manager->flush();
 }   
 
  public function getOrder()
    {
        return 2; // l'ordre dans lequel les fichiers sont chargés
    }
}

?>

