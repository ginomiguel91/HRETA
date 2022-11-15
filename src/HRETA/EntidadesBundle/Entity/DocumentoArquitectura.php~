<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblDocumentoArquitectura
 *
 * @ORM\Table(name="tbl_documento_arquitectura")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="HRETA\EntidadesBundle\Repository\DocumentoArquitecturaRepository")
 */
class DocumentoArquitectura {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tbl_documento_arquitectura_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=10, nullable=false)
     */
    private $version;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aplica_al_proyecto", type="boolean", nullable=true)
     */
    private $aplicaAlProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="causa_no_aplicar", type="text", nullable=true)
     */
    private $causaNoAplicar;

    /**
     * @var \TblExpedienteArquitectura
     *
     * @ORM\ManyToOne(targetEntity="ExpedienteArquitectura", inversedBy="document")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idexped", referencedColumnName="idexped")
     * })
     */
    private $idexped;

    /**
     * @var \TblTipoDoc
     *
     * @ORM\ManyToOne(targetEntity="TipoDoc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tbl_tipo_docid", referencedColumnName="id")
     * })
     */
    private $tblTipoDocid;

    /**
     * @var \Proyecto
     *
     * @ORM\OneToMany(targetEntity="Evaluacion", mappedBy="tblDocumentoArquitecturaid", cascade={"remove"})
     */
    private $evaluacion;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return DocumentoArquitectura
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
     * Set aplicaAlProyecto
     *
     * @param boolean $aplicaAlProyecto
     * @return DocumentoArquitectura
     */
    public function setAplicaAlProyecto($aplicaAlProyecto) {
        $this->aplicaAlProyecto = $aplicaAlProyecto;

        return $this;
    }

    /**
     * Get aplicaAlProyecto
     *
     * @return boolean 
     */
    public function getAplicaAlProyecto() {
        return $this->aplicaAlProyecto;
    }

    /**
     * Set causaNoAplicar
     *
     * @param string $causaNoAplicar
     * @return DocumentoArquitectura
     */
    public function setCausaNoAplicar($causaNoAplicar) {
        $this->causaNoAplicar = $causaNoAplicar;

        return $this;
    }

    /**
     * Get causaNoAplicar
     *
     * @return string 
     */
    public function getCausaNoAplicar() {
        return $this->causaNoAplicar;
    }

    /**
     * Set idexped
     *
     * @param \HRETA\EntidadesBundle\Entity\ExpedienteArquitectura $idexped
     * @return DocumentoArquitectura
     */
    public function setIdexped(\HRETA\EntidadesBundle\Entity\ExpedienteArquitectura $idexped = null) {
        $this->idexped = $idexped;

        return $this;
    }

    /**
     * Get idexped
     *
     * @return \HRETA\EntidadesBundle\Entity\ExpedienteArquitectura 
     */
    public function getIdexped() {
        return $this->idexped;
    }

    /**
     * Set tblTipoDocid
     *
     * @param \HRETA\EntidadesBundle\Entity\TipoDoc $tblTipoDocid
     * @return DocumentoArquitectura
     */
    public function setTblTipoDocid(\HRETA\EntidadesBundle\Entity\TipoDoc $tblTipoDocid = null) {
        $this->tblTipoDocid = $tblTipoDocid;

        return $this;
    }

    /**
     * Get tblTipoDocid
     *
     * @return \HRETA\EntidadesBundle\Entity\TipoDoc 
     */
    public function getTblTipoDocid() {
        return $this->tblTipoDocid;
    }

    public function __toString() {
        return $this->idexped->getIdProy() . '-' . $this->tblTipoDocid;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->evaluacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add evaluacion
     *
     * @param \HRETA\EntidadesBundle\Entity\Evaluacion $evaluacion
     * @return DocumentoArquitectura
     */
    public function addEvaluacion(\HRETA\EntidadesBundle\Entity\Evaluacion $evaluacion) {
        $this->evaluacion[] = $evaluacion;

        return $this;
    }

    /**
     * Remove evaluacion
     *
     * @param \HRETA\EntidadesBundle\Entity\Evaluacion $evaluacion
     */
    public function removeEvaluacion(\HRETA\EntidadesBundle\Entity\Evaluacion $evaluacion) {
        $this->evaluacion->removeElement($evaluacion);
    }

    /**
     * Get evaluacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvaluacion() {
        return $this->evaluacion;
    }

}