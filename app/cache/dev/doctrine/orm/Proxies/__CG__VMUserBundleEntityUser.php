<?php

namespace Proxies\__CG__\VM\UserBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class User extends \VM\UserBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function image_profile()
    {
        $this->__load();
        return parent::image_profile();
    }

    public function setUsername($username)
    {
        $this->__load();
        return parent::setUsername($username);
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setRealname($realname)
    {
        $this->__load();
        return parent::setRealname($realname);
    }

    public function getRealname()
    {
        $this->__load();
        return parent::getRealname();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setVille($ville)
    {
        $this->__load();
        return parent::setVille($ville);
    }

    public function getVille()
    {
        $this->__load();
        return parent::getVille();
    }

    public function setSexe($sexe)
    {
        $this->__load();
        return parent::setSexe($sexe);
    }

    public function getSexe()
    {
        $this->__load();
        return parent::getSexe();
    }

    public function setAge($age)
    {
        $this->__load();
        return parent::setAge($age);
    }

    public function getAge()
    {
        $this->__load();
        return parent::getAge();
    }

    public function setPhoto($photo)
    {
        $this->__load();
        return parent::setPhoto($photo);
    }

    public function getPhoto()
    {
        $this->__load();
        return parent::getPhoto();
    }

    public function setRoles(array $roles)
    {
        $this->__load();
        return parent::setRoles($roles);
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function setSalt($salt)
    {
        $this->__load();
        return parent::setSalt($salt);
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'username', 'ville', 'sexe', 'age', 'photo', 'realname', 'password', 'salt', 'roles');
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