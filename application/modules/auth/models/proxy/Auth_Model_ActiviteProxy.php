<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Auth_Model_ActiviteProxy extends \Auth_Model_Activite implements \Doctrine\ORM\Proxy\Proxy
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
            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }
    
    
    public function addArtisan(\Auth_Model_Artisan $artisan)
    {
        $this->__load();
        return parent::addArtisan($artisan);
    }

    public function __set($attr, $val)
    {
        $this->__load();
        return parent::__set($attr, $val);
    }

    public function __get($attr)
    {
        $this->__load();
        return parent::__get($attr);
    }

    public function toArray()
    {
        $this->__load();
        return parent::toArray();
    }

    public function getId_activite()
    {
        $this->__load();
        return parent::getId_activite();
    }

    public function getLibelle()
    {
        $this->__load();
        return parent::getLibelle();
    }

    public function getGroup()
    {
        $this->__load();
        return parent::getGroup();
    }

    public function setId_activite($id_activite)
    {
        $this->__load();
        return parent::setId_activite($id_activite);
    }

    public function setLibelle($libelle)
    {
        $this->__load();
        return parent::setLibelle($libelle);
    }

    public function setGroup($group)
    {
        $this->__load();
        return parent::setGroup($group);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id_activite', 'libelle', 'group', 'artisans');
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
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}