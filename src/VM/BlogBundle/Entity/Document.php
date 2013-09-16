<?php

namespace VM\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="Document")
 * @ORM\Entity(repositoryClass="VM\BlogBundle\Entity\DocumentRepository")
 */
class Document
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
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=200)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=100)
     */
    private $url;
        
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
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
     * Set libelle
     *
     * @param string $libelle
     * @return Document
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Document
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set livre
     *
     * @param \VM\BlogBundle\Entity\Livre $livre
     * @return Document
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
     * Set date
     *
     * @param \DateTime $date
     * @return Document
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}