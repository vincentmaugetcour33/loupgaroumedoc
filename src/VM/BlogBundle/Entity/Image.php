<?php

namespace VM\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Image
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VM\BlogBundle\Entity\ImageRepository")
 */
class Image
{
    /**
     * @ORM\ManyToOne(targetEntity="VM\BlogBundle\Entity\Livre")
     * @ORM\JoinColumn(nullable=false)
     */
    private $livre;
     
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

  /**
   * @var string $url
   *
   * @ORM\Column(name="url", type="string", length=255)
   */
    private $url;
  
  /**
   * @var string $alt
   *
   * @ORM\Column(name="alt", type="string", length=200)
   */
    private $alt;
    
   /**
   * @var string $alt
   *
   * @ORM\Column(name="description", type="text")
   */
    private $description;
    
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
   * @param string $url
   * @return Image
   */
  public function setUrl($url)
  {
    $this->url = $url;
    return $this;
  }
 
  /**
   * @return string
   */
  public function getUrl()
  {
    return $this->url;
  }
    
  /**
   * @param string $alt
   * @return Image
   */
  public function setAlt($alt)
  {
    $this->alt = $alt;
    return $this;
  }
 
  /**
   * @return string
   */
  public function getAlt()
  {
    return $this->alt;
  }
    
   /**
     * Set livre
     *
     * @param \VM\BlogBundle\Entity\Livre $livre
     * @return Image
     */
    public function setLivre(\VM\BlogBundle\Entity\Livre $livre)
    {
        $this->livre = $livre;
    
        return $this;
    }

    /**
     * Get livre
     *
     * @return \VM\BlogBundle\Entity\Livre 
     */
    public function getLivre()
    {
        return $this->livre;
    } 
    

    /**
     * Set description
     *
     * @param string $description
     * @return Image
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}