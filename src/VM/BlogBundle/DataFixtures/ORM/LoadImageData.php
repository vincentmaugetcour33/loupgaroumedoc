<?php

namespace VM\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VM\BlogBundle\Entity\Image;

class LoadImageData implements FixtureInterface 
{
 public function load(ObjectManager $manager) 
 {         
     
  $repository = $manager->getRepository('VMBlogBundle:Livre');
  $livre_principal = $repository->findOneByTitre('Le monstre du Médoc'); 
     
   // lecture des images dans le dossier web
   if ( $liste_images = opendir('web/bundles/vmblog/images') )
   {
       while(false !== ($fichier_image = readdir($liste_images)))
       {       
            if (preg_match('/^image/', $fichier_image))
            {
            $image = new Image();
            $image->setUrl($fichier_image);
            $image->setAlt('Legende Image '.substr($fichier_image,5));
            $image->setDescription('Description test edefdfdfsdfdsfsdfsdfsdf');
            $image->setLivre($livre_principal);
            $manager->persist($image);   
            }
        
       }
       $manager->flush();
       closedir($liste_images);
   }
  
 }   
     
}

?>
