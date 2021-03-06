<?php

namespace Proxies\__CG__\VM\BlogBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Livre extends \VM\BlogBundle\Entity\Livre implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setTitre($titre)
    {
        $this->__load();
        return parent::setTitre($titre);
    }

    public function getTitre()
    {
        $this->__load();
        return parent::getTitre();
    }

    public function setAuteur($auteur)
    {
        $this->__load();
        return parent::setAuteur($auteur);
    }

    public function getAuteur()
    {
        $this->__load();
        return parent::getAuteur();
    }

    public function setResume($resume)
    {
        $this->__load();
        return parent::setResume($resume);
    }

    public function getResume()
    {
        $this->__load();
        return parent::getResume();
    }

    public function setCouverture($couverture)
    {
        $this->__load();
        return parent::setCouverture($couverture);
    }

    public function getCouverture()
    {
        $this->__load();
        return parent::getCouverture();
    }

    public function setEdition($edition)
    {
        $this->__load();
        return parent::setEdition($edition);
    }

    public function getEdition()
    {
        $this->__load();
        return parent::getEdition();
    }

    public function setUrl($url)
    {
        $this->__load();
        return parent::setUrl($url);
    }

    public function getUrl()
    {
        $this->__load();
        return parent::getUrl();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'titre', 'couverture', 'auteur', 'url', 'resume', 'edition');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}