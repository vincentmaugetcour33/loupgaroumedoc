<?php

namespace VM\UserBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VM\UserBundle\Entity\User;
 
class LoadUser extends AbstractFixture implements OrderedFixtureInterface  
{
  public function load(ObjectManager $manager)
  {
    //$users=array();
    
    // Les noms d'utilisateurs à créer
    //$noms = array('mauget');
 
    //$dossier_photo = opendir('web\bundles\vmuser\photo');
    //$fichier_photo = readfile("member_default.png",1);
    //closedir($dossier_photo);
    
    //foreach ($noms as $i => $nom) {
      // On crée l'utilisateur
      $user = new User();
 
      // Le nom d'utilisateur et le mot de passe sont identiques
      $user->setUsername('loupmedoc');
      $user->setPassword('slc33');
      $user->setPhoto("patricemauget.jpg");
      // Le sel et les rôles sont vides pour l'instant
      $user->setEmail("pathrv1@free.fr");
      $user->setVille('bordeaux');
      $user->setAge('54');
      $user->setRealname('Patrice Mauget');
      $user->setSalt('');
      $user->setRoles(array('ROLE_ADMIN'));
 
      // On le persiste
      $manager->persist($user);
    //}
 
    // On déclenche l'enregistrement
    $manager->flush();
  }  
  
   public function getOrder()
    {
        return 1; // l'ordre dans lequel les fichiers sont chargés
    }
 
    
}

?>
