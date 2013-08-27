<?php

namespace VM\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Commentaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="VM\BlogBundle\Entity\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\ManyToOne(targetEntity="VM\UserBundle\Entity\User")
     
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     * @ORM\Column(name="statut", type="string")
     * 
     * @Assert\Choice(choices= {"accepte", "modere", "refuse"}, message="Vous ne pouvez choisir qu'une des trois valeurs.")
     */
    private $statut;
    
   public function __construct()
  {
    $this->date = new \Datetime(); // Par défaut, la date du commentaire est la date d'aujourd'hui
    $this->statut= "modere"; // par défaut, le commentaire est en état de modération avant d'être validé par l'administrateur.
   
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
     * Set user
     *
     * @param string $user
     * @return User
     */
    public function setUser(\VM\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return Commentaire
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
     * Set date
     *
     * @param \DateTime $date
     * @return Commentaire
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

    /**
     * Set statut
     *
     * @param string $statut
     * @return Commentaire
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set livre
     *
     * @param \VM\BlogBundle\Entity\Livre $livre
     * @return Commentaire
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