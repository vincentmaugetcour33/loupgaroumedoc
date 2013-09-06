<?php
// src/VM/UserBundle/Entity/User.php
 
namespace VM\UserBundle\Entity;

#use FOS\UserBundle\Entity\User as BaseUser; 
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Security\Core\User\UserInterface;

// nécéssaire pour l'upload du fichier photo
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Table(uniqueConstraints={
 *     @ORM\UniqueConstraint(name="search_userx", columns={"username", "email"})})
 * @UniqueEntity(fields="email", message="Cet email existe déjà")
 * @UniqueEntity(fields="username", message="Ce username existe déjà")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="VM\UserBundle\Entity\UserRepository")
 */
class User implements UserInterface #, \Serializable #extends BaseUser
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;
 //protected $id;
  
  /**
     * @var ArrayCollection $commentaires
     *
     * @ORM\OneToMany(targetEntity="VM\BlogBundle\Entity\Commentaire", mappedBy="user", cascade={"all"}   )
     */
  private $commentaires;
  
  
  /**
   * @ORM\Column(name="username", type="string", unique=true)
   * @Assert\Length(
   *      min = "4",
   *      max = "10",
   *      minMessage = "Votre pseudo doit faire au moins {{ limit }} caractères",
   *      maxMessage = "Votre pseudo ne peut pas être plus long que {{ limit }} caractères"
   * )
   */
  private $username;
  
   /**
   * @ORM\Column(name="email", length=150, type="string", unique=true)
   * @Assert\Email(message="L'adresse email n'est pas valide.") 
   */
  private $email;
  
  /**
   * @ORM\Column(name="ville", type="string", nullable=true)
   * @Assert\Regex(
   *     pattern="/\d/",
   *     match=false,
   *     message="Le nom de la ville contient des caractères erronés !"
   *     )
   */
  private $ville;
    
    
  /**
   * @ORM\Column(name="sexe",type="string", nullable=true)
   * @Assert\Choice(choices= {"homme", "femme"}, message="Vous ne pouvez choisir qu'une des deux valeurs.")
   */
    private $sexe;  
    
    /**
     * @ORM\Column(name="age",type="integer", nullable=true)
     * @Assert\Range(
     *      min = 8,
     *      max = 125,
     *      minMessage = "Seuil minimum : 8 ans",
     *      maxMessage = "Seuil maximum : 125 ans"
     * )
     */
    private $age;  
    
     /**
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo; 
    
   
    private $file;
    private $tempfile;
 /**
   * @ORM\Column(name="realname", type="string", length=255, nullable=true)
   */
  private $realname;
 
  /**
   * @ORM\Column(name="password", type="string", length=5)
   * @Assert\Regex(
   *     pattern="/[a-zA-Z0-9]/",
   *     match=true,
   *     message="Votre mot de passe contient des caractères erronés !"
   *     )
   */
  private $password;
 
  /**
   * @ORM\Column(name="salt", type="string", length=255,nullable=true)
   */
  private $salt;
 
  /**
   * @ORM\Column(name="roles", type="array")
   */
  private $roles;
 
  /**
   * 
   */
    public function __construct()
    {
     $this->roles=array('ROLE_USER');
     $this->sexe="homme";
     //$this->setPhoto("membre_default_homme.jpg");
     $this->commentaires = new ArrayCollection();
     //$this->setPhoto("member_default.png");
     }
    
//     public function serialize()
//         {
//                return serialize($this->username);
//         }
//
//         public function unserialize($data)
//         {
//                $this->username = unserialize($data);
//         }
         
     public function setFile(UploadedFile $file)
        {
          $this->file = $file;

          // On vérifie si on avait déjà un fichier pour cette entité
          if (null !== $this->photo) {
            // On sauvegarde l'extension du fichier pour le supprimer plus tard
            $this->setTempfile($this->photo);

            // On réinitialise les valeurs des attributs url et alt
            //$this->url = null;
            //$this->alt = null;
          }
        }
        
      public function getFile()
      {
         return $this->file; 
      }
      
      public function getTempfile()
      {
         return $this->tempfile; 
      }
      
      public function setTempfile($tempfile)
      {
        $this->tempfile = $tempfile;
        return $this;   
      }   
      
  
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
      // Si jamais il n'y a pas de fichier (champ facultatif)
      if (null === $this->file) {
         $this->image_profile();
        return;
      }

      // Le nom du fichier est son id, on doit juste stocker également son extension
      // Pour faire propre, on devrait renommer cet attribut en « extension », plutôt que « url »
      //$this->url = $this->file->guessExtension();

      // Et on génère l'attribut alt de la balise <img>, à la valeur du nom du fichier sur le PC de l'internaute
      $this->photo = $this->file->getClientOriginalName();
    }
    
       
   
     private function image_profile()
     {
         /* si aucune photo n'a été ajouté par l'utilisateur lors de son inscription (ou de la mise à jour
            de son profil) */ 
         if ($this->getPhoto() == "") {
          if ($this->getSexe() == "femme") { $this->setPhoto("membre_default_femme.jpg"); }
          if ($this->getSexe() == "homme") { $this->setPhoto("membre_default_homme.jpg"); }
         }
     }
    
          /**
          * @ORM\PostPersist()
          * @ORM\PostUpdate()
          */
         public function upload()
         {
           // Si jamais il n'y a pas de fichier (champ facultatif)
           if (null === $this->file) {
             return;
           }

           // Si on avait un ancien fichier, on le supprime
           if (null !== $this->tempfile) {
             $oldFile = $this->getUploadRootDir().'/'.$this->id.'-'.$this->tempfile;
             if (file_exists($oldFile)) {
               unlink($oldFile);
             }
           }

           // On déplace le fichier envoyé dans le répertoire de notre choix
           $this->file->move(
             $this->getUploadRootDir(), // Le répertoire de destination
             $this->getId().'-'.$this->photo   // Le nom du fichier à créer, ici « id.extension »
           );
           //unset($this->file);
         }     
   
          /**
           * @ORM\PreRemove()
           */
          public function preRemoveUpload()
          {
            // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
            $this->tempfile = $this->getUploadRootDir().'/'.$this->getId().'-'.$this->photo;
          }    
     
          /**
           * @ORM\PostRemove()
           */
           public function postRemoveUpload()
           {
             // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
             if (file_exists($this->tempfile)) {
               // On supprime le fichier
               unlink($this->tempfile);
             }
           }
 
           public function getUploadDir()
            {
              // On retourne le chemin relatif vers l'image pour un navigateur
              return 'bundles/vmuser/photo';
            }
 
            protected function getUploadRootDir()
            {
              // On retourne le chemin relatif vers l'image pour notre code PHP
              return __DIR__.'/../../../../web/'.$this->getUploadDir();
            }  

            /* retourne le chemin relatif dans les vues suivant si l'utilisateur
               a ajouté une photo (fichier) ou non */
            public function getPhotoPath()
            {
              return $this->getUploadDir().'/'.$this->getId().'-'.$this->getPhoto();
            }

           
           
    /**
     * @param Commentaire $commentaire
     */
    public function addCommentaire(\VM\BlogBundle\Entity\Commentaire $commentaire) {
        //$commentaire->setUser($this);
 
        // Si l'objet fait déjà partie de la collection on ne l'ajoute pas
        //if (!$this->commentaires->contains($commentaire)) {
            $this->commentaires[]=$commentaire;
        //}
        return $this;
    }
 
    /**
   * @param VM\USerBundle\Entity\Commentaire $commentaire
   */
  public function removeCommentaire(\VM\BlogBundle\Entity\Commentaire $commentaire)
  {
    $this->commentaires->removeElement($commentaire);
    return $this;
  }
  
    /**
     * @return ArrayCollection $commentaires
     */
    public function getCommentaires() {
        return $this->commentaires;
    }
 
     
     
     
    public function setUsername($username)
  {
    $this->username = $username;
    return $this;
  }
 
  public function getUsername()
  {
    return $this->username;
  }
 
  public function setPassword($password)
  {
    $this->password = $password;
    return $this;
  }
 
  public function getPassword()
  {
    return $this->password;
  }    
  
  public function setRealname($realname)
  {
    $this->realname = $realname;
    return $this;
  }
 
  public function getRealname()
  {
    return $this->realname;
  }
 
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return User
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    
        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return User
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    
     public function setRoles(array $roles)
  {
    $this->roles = $roles;
    return $this;
  }
 
  public function getRoles()
  {
    return $this->roles;
  }

   public function setSalt($salt)
  {
    $this->salt = $salt;
    return $this;
  }
 
  public function getSalt()
  {
    return $this->salt;
  }
  
   public function eraseCredentials()
  {
  }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}