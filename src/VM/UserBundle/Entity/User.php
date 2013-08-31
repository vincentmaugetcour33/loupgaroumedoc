<?php
// src/VM/UserBundle/Entity/User.php
 
namespace VM\UserBundle\Entity;

#use FOS\UserBundle\Entity\User as BaseUser; 
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(uniqueConstraints={
 *     @ORM\UniqueConstraint(name="search_userx", columns={"username", "email"})})
 * @UniqueEntity(fields="email", message="Cet email existe déjà")
 * @UniqueEntity(fields="username", message="Ce username existe déjà")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="VM\UserBundle\Entity\UserRepository")
 */
class User implements UserInterface #extends BaseUser
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
   * @ORM\Column(name="username", type="string", length=255, unique=true)
   */
  private $username;
  
   /**
   * @ORM\Column(name="email", length=150, type="string", unique=true)
   * @Assert\Email(message="L'adresse email n'est pas valide.") 
   */
  private $email;
  
  /**
   * @ORM\Column(name="ville", type="string", nullable=true)
   */
  private $ville;
    
    
  /**
     * @ORM\Column(name="sexe",type="string", nullable=true)
   * @Assert\Choice(choices= {"homme", "femme"}, message="Vous ne pouvez choisir qu'une des deux valeurs.")
   */
    private $sexe;  
    
    /**
     * @ORM\Column(name="age",type="integer", nullable=true)
     */
    private $age;  
    
     /**
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo; 
    
 /**
   * @ORM\Column(name="realname", type="string", length=255, nullable=true)
   */
  private $realname;
 
  /**
   * @ORM\Column(name="password", type="string", length=255)
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
     $this->setPhoto("membre_default_homme.jpg");
     $this->commentaires = new ArrayCollection();
     //$this->setPhoto("member_default.png");
     }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
     public function image_profile()
     {
     
         if ($this->getSexe() == "femme") { $this->setPhoto("membre_default_femme.jpg"); }
          if ($this->getSexe() == "homme") { $this->setPhoto("membre_default_homme.jpg"); }
         
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