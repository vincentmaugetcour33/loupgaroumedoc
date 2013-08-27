<?php
// src/VM/UserBundle/Entity/User.php
 
namespace VM\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser; 
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;
 
/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VM\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  //private $id;
 protected $id;
  
  
  /**
   * @ORM\Column(name="ville", type="string")
   */
  protected $ville;
    
    
  /**
     * @ORM\Column(name="sexe",type="text")
   * @Assert\Choice(choices= {"homme", "femme"}, message="Vous ne pouvez choisir qu'une des deux valeurs.")
   */
    protected $sexe;  
    
    /**
     * @ORM\Column(name="age",type="integer")
     */
    protected $age;  
    
     /**
     * @ORM\Column(name="photo", type="string", length=255)
     */
    protected $photo; 
    
 /**
   * @ORM\Column(name="realname", type="string", length=255)
   */
  protected $realname;
 
  /**
   * @ORM\Column(name="password", type="string", length=255)
   */
  //private $password;
 
  /**
   * @ORM\Column(name="salt", type="string", length=255)
   */
  //private $salt;
 
  /**
   * @ORM\Column(name="roles", type="array")
   */
  //private $roles;
 
  /**
   * 
   */
    public function __construct()
    {
     parent::__construct();
     $this->addRole('ROLE_USER');
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
}