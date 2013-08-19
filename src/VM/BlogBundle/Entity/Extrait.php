<?php

namespace VM\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Extrait
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VM\BlogBundle\Entity\ExtraitRepository")
 */
class Extrait
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
     * @var integer
     *
     * @ORM\Column(name="section", type="string", length=255)
     */
    private $section;
    
     /**
     * @var integer
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;
    
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
     * Set section
     *
     * @param string $section
     * @return Extrait
     */
    public function setSection($section)
    {
        $this->section = $section;
    
        return $this;
    }

    /**
     * Get section
     *
     * @return string 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Extrait
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set livre
     *
     * @param \VM\BlogBundle\Entity\Livre $livre
     * @return Extrait
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
}