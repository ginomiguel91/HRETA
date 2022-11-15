<?php

namespace Proxies\__CG__\HRETA\EntidadesBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class ExpedienteArquitectura extends \HRETA\EntidadesBundle\Entity\ExpedienteArquitectura implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function setVersion($version)
    {
        $this->__load();
        return parent::setVersion($version);
    }

    public function getVersion()
    {
        $this->__load();
        return parent::getVersion();
    }

    public function setDatosDelExpediente($datosDelExpediente)
    {
        $this->__load();
        return parent::setDatosDelExpediente($datosDelExpediente);
    }

    public function getDatosDelExpediente()
    {
        $this->__load();
        return parent::getDatosDelExpediente();
    }

    public function setIdproy(\HRETA\EntidadesBundle\Entity\Proyecto $idproy = NULL)
    {
        $this->__load();
        return parent::setIdproy($idproy);
    }

    public function getIdproy()
    {
        $this->__load();
        return parent::getIdproy();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function addDocument(\HRETA\EntidadesBundle\Entity\DocumentoArquitectura $document)
    {
        $this->__load();
        return parent::addDocument($document);
    }

    public function removeDocument(\HRETA\EntidadesBundle\Entity\DocumentoArquitectura $document)
    {
        $this->__load();
        return parent::removeDocument($document);
    }

    public function getDocument()
    {
        $this->__load();
        return parent::getDocument();
    }

    public function addRevision(\HRETA\EntidadesBundle\Entity\RtfArquitectura $revision)
    {
        $this->__load();
        return parent::addRevision($revision);
    }

    public function removeRevision(\HRETA\EntidadesBundle\Entity\RtfArquitectura $revision)
    {
        $this->__load();
        return parent::removeRevision($revision);
    }

    public function getRevision()
    {
        $this->__load();
        return parent::getRevision();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'version', 'datosDelExpediente', 'idproy', 'document', 'revision');
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