<?php

namespace VM\UserBundle\DataFixtures\ORM;
 
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use VM\UserBundle\Entity\User;
 
class LoadUser implements FixtureInterface   
{
  public function load(ObjectManager $manager)
  {
    $users=array();
    
    // Les noms d'utilisateurs à créer
    $noms = array('mauget');
 
    //$dossier_photo = opendir('web\bundles\vmuser\photo');
    //$fichier_photo = readfile("member_default.png",1);
    //closedir($dossier_photo);
    
    foreach ($noms as $i => $nom) {
      // On crée l'utilisateur
      $users[$i] = new User;
 
      // Le nom d'utilisateur et le mot de passe sont identiques
      $users[$i]->setUsername($nom);
      $users[$i]->setPassword($nom);
      $users[$i]->setPhoto("member_default.png");
      // Le sel et les rôles sont vides pour l'instant
      $users[$i]->setVille('bordeaux');
      $users[$i]->setAge(28);
      $users[$i]->setRealname('Vincent Mauget');
      $users[$i]->setSalt('');
      $users[$i]->setRoles(array('ROLE_ADMIN'));
 
      // On le persiste
      $manager->persist($users[$i]);
    }
 
    // On déclenche l'enregistrement
    $manager->flush();
  }  
    
    
}

?>
