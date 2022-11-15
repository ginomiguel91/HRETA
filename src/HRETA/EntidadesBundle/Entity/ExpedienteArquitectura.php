<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TblExpedienteArquitectura
 *
 * @ORM\Table(name="tbl_expediente_arquitectura")
 * @ORM\Entity
 */
class ExpedienteArquitectura {

    /**
     * @var integer
     *
     * @ORM\Column(name="idexped", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tbl_expediente_arquitectura_idexped_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=10, nullable=true)
     * @Assert\Length(max=10)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="datos_del_expediente", type="text", nullable=true)
     */
    private $datosDelExpediente;

    /**
     * @var \Proyecto
     *
     * @ORM\OneToOne(targetEntity="Proyecto", inversedBy="idexped")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idproy", referencedColumnName="idproy")
     * })
     * @Assert\NotBlank()
     */
    private $idproy;

    /**
     * @var \Proyecto
     *
     * @ORM\OneToMany(targetEntity="DocumentoArquitectura", mappedBy="idexped", cascade={"remove"})
     */
    private $document;

    /**
     * @var \Proyecto
     *
     * @ORM\OneToMany(targetEntity="RtfArquitectura", mappedBy="idexped", cascade={"remove"})
     */
    private $revision;

    /**
     * Get idexped
     *
     * @return integer 
     */

    /**
     * Set version
     *
     * @param string $version
     * @return ExpedienteArquitectura
     */
    public function setVersion($version) {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion() {
        return $this->version;
    }

    /**
     * Set datosDelExpediente
     *
     * @param string $datosDelExpediente
     * @return ExpedienteArquitectura
     */
    public function setDatosDelExpediente($datosDelExpediente) {
        $this->datosDelExpediente = $datosDelExpediente;

        return $this;
    }

    /**
     * Get datosDelExpediente
     *
     * @return string 
     */
    public function getDatosDelExpediente() {
        return $this->datosDelExpediente;
    }

    /**
     * Set idproy
     *
     * @param \HRETA\EntidadesBundle\Entity\Proyecto $idproy
     * @return ExpedienteArquitectura
     */
    public function setIdproy(\HRETA\EntidadesBundle\Entity\Proyecto $idproy = null) {
        $this->idproy = $idproy;

        return $this;
    }

    /**
     * Get idproy
     *
     * @return \HRETA\EntidadesBundle\Entity\Proyecto 
     */
    public function getIdproy() {
        return $this->idproy;
    }

    public function getId() {
        return $this->id;
    }

    public function __toString() {
        return $this->idproy->getNombre();
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->document = new \Doctrine\Common\Collections\ArrayCollection();
        $this->revision = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add document
     *
     * @param \HRETA\EntidadesBundle\Entity\DocumentoArquitectura $document
     * @return ExpedienteArquitectura
     */
    public function addDocument(\HRETA\EntidadesBundle\Entity\DocumentoArquitectura $document) {
        $this->document[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \HRETA\EntidadesBundle\Entity\DocumentoArquitectura $document
     */
    public function removeDocument(\HRETA\EntidadesBundle\Entity\DocumentoArquitectura $document) {
        $this->document->removeElement($document);
    }

    /**
     * Get document
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocument() {
        return $this->document;
    }

    /**
     * Add revision
     *
     * @param \HRETA\EntidadesBundle\Entity\RtfArquitectura $revision
     * @return ExpedienteArquitectura
     */
    public function addRevision(\HRETA\EntidadesBundle\Entity\RtfArquitectura $revision) {
        $this->revision[] = $revision;

        return $this;
    }

    /**
     * Remove revision
     *
     * @param \HRETA\EntidadesBundle\Entity\RtfArquitectura $revision
     */
    public function removeRevision(\HRETA\EntidadesBundle\Entity\RtfArquitectura $revision) {
        $this->revision->removeElement($revision);
    }

    /**
     * Get revision
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRevision() {
        return $this->revision;
    }

}