<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RtfArquitectura
 *
 * @ORM\Table(name="tbl_rtf_arquitectura")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="HRETA\EntidadesBundle\Repository\RtfArquitecturaRepository")
 */
class RtfArquitectura {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tbl_rtf_arquitectura_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=15, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=10, nullable=true)
     */
    private $version;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechai", type="datetime", nullable=true)
     */
    private $fechai;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaf", type="datetime", nullable=true)
     */
    private $fechaf;

    /**
     * @var string
     *
     * @ORM\Column(name="objetivos", type="text", nullable=true)
     */
    private $objetivos;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrevisor", referencedColumnName="id")
     * })
     */
    private $idrevisor;

    /**
     * @var \ExpedienteArquitectura
     *
     * @ORM\ManyToOne(targetEntity="ExpedienteArquitectura", inversedBy="revision")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idexped", referencedColumnName="idexped")
     * })
     */
    private $idexped;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return RtfArquitectura
     */
    public function setNumero($numero) {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return RtfArquitectura
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
     * Set fechai
     *
     * @param \DateTime $fechai
     * @return RtfArquitectura
     */
    public function setFechai($fechai) {
        $this->fechai = $fechai;

        return $this;
    }

    /**
     * Get fechai
     *
     * @return \DateTime 
     */
    public function getFechai() {
        return $this->fechai;
    }

    /**
     * Set fechaf
     *
     * @param \DateTime $fechaf
     * @return RtfArquitectura
     */
    public function setFechaf($fechaf) {
        $this->fechaf = $fechaf;

        return $this;
    }

    /**
     * Get fechaf
     *
     * @return \DateTime 
     */
    public function getFechaf() {
        return $this->fechaf;
    }

    /**
     * Set objetivos
     *
     * @param string $objetivos
     * @return RtfArquitectura
     */
    public function setObjetivos($objetivos) {
        $this->objetivos = $objetivos;

        return $this;
    }

    /**
     * Get objetivos
     *
     * @return string 
     */
    public function getObjetivos() {
        return $this->objetivos;
    }

    /**
     * Set idrevisor
     *
     * @param \HRETA\EntidadesBundle\Entity\Usuario $idrevisor
     * @return RtfArquitectura
     */
    public function setIdrevisor(\HRETA\EntidadesBundle\Entity\Usuario $idrevisor = null) {
        $this->idrevisor = $idrevisor;

        return $this;
    }

    /**
     * Get idrevisor
     *
     * @return \HRETA\EntidadesBundle\Entity\Usuario 
     */
    public function getIdrevisor() {
        return $this->idrevisor;
    }

    /**
     * Set idexped
     *
     * @param \HRETA\EntidadesBundle\Entity\ExpedienteArquitectura $idexped
     * @return RtfArquitectura
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

}