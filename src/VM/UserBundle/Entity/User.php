<?php
// src/VM/UserBundle/Entity/User.php
 
namespace VM\UserBundle\Entity;

#use FOS\UserBundle\Entity\User as BaseUser; 
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
 use Symfony\Component\Security\Core\User\UserInterface;
/**
 * @ORM\Table()
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
   * @ORM\Column(name="username", type="string", length=255, unique=true)
   */
  private $username;
  /**
   * @ORM\Column(name="ville", type="string", nullable=true)
   */
  private $ville;
    
    
  /**
     * @ORM\Column(name="sexe",type="string")
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
     //$this->setPhoto("member_default.png");
     }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
     public function image_profile()
     {
      if (is_null($this->photo))
      {
          if ($this->sexe == "homme") { $this->setPhoto("member_default.png"); }
          if ($this->sexe == "femme") { $this->setPhoto("member_default_femme.jpg"); }
      }
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
}