<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblNoConforminan
 *
 * @ORM\Table(name="tbl_no_conformidad")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="HRETA\EntidadesBundle\Repository\NoConformidadRepository")
 */
class NoConformidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tbl_no_conforminan_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="asunto", type="string", length=255, nullable=false)
     */
    private $asunto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_solucion", type="date", nullable=true)
     */
    private $fechaSolucion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     */
    private $descripcion;

    /**
     * @var \InformeNc
     *
     * @ORM\ManyToOne(targetEntity="InformeNc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idinforme", referencedColumnName="id")
     * })
     */
    private $idinforme;

    /**
     * @var \TblEstadoSolucion
     *
     * @ORM\ManyToOne(targetEntity="EstadoSolucion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idestado", referencedColumnName="id")
     * })
     */
    private $idestado;

    /**
     * @var \ComplejidadNc
     *
     * @ORM\ManyToOne(targetEntity="ComplejidadNc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idcomplejidad", referencedColumnName="id")
     * })
     */
    private $idcomplejidad;

    /**
     * @var \ImpactoNc
     *
     * @ORM\ManyToOne(targetEntity="ImpactoNc")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idimpacto", referencedColumnName="idimpacto")
     * })
     */
    private $idimpacto;

    /**
     * @var \DocumentoArquitectura
     *
     * @ORM\ManyToOne(targetEntity="DocumentoArquitectura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iddocumentoarquitectura", referencedColumnName="id")
     * })
     */
    private $iddocumentoarquitectura;



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
     * Set tipo
     *
     * @param string $tipo
     * @return NoConformidad
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set asunto
     *
     * @param string $asunto
     * @return NoConformidad
     */
    public function setAsunto($asunto)
    {
        $this->asunto = $asunto;
    
        return $this;
    }

    /**
     * Get asunto
     *
     * @return string 
     */
    public function getAsunto()
    {
        return $this->asunto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return NoConformidad
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fechaSolucion
     *
     * @param \DateTime $fechaSolucion
     * @return NoConformidad
     */
    public function setFechaSolucion($fechaSolucion)
    {
        $this->fechaSolucion = $fechaSolucion;
    
        return $this;
    }

    /**
     * Get fechaSolucion
     *
     * @return \DateTime 
     */
    public function getFechaSolucion()
    {
        return $this->fechaSolucion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return NoConformidad
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set idinforme
     *
     * @param \HRETA\EntidadesBundle\Entity\InformeNc $idinforme
     * @return NoConformidad
     */
    public function setIdinforme(\HRETA\EntidadesBundle\Entity\InformeNc $idinforme = null)
    {
        $this->idinforme = $idinforme;
    
        return $this;
    }

    /**
     * Get idinforme
     *
     * @return \HRETA\EntidadesBundle\Entity\InformeNc 
     */
    public function getIdinforme()
    {
        return $this->idinforme;
    }

    /**
     * Set idestado
     *
     * @param \HRETA\EntidadesBundle\Entity\EstadoSolucion $idestado
     * @return NoConformidad
     */
    public function setIdestado(\HRETA\EntidadesBundle\Entity\EstadoSolucion $idestado = null)
    {
        $this->idestado = $idestado;
    
        return $this;
    }

    /**
     * Get idestado
     *
     * @return \HRETA\EntidadesBundle\Entity\TblEstadoSolucion 
     */
    public function getIdestado()
    {
        return $this->idestado;
    }

    /**
     * Set idcomplejidad
     *
     * @param \HRETA\EntidadesBundle\Entity\TblComplejidadNc $idcomplejidad
     * @return NoConformidad
     */
    public function setIdcomplejidad(\HRETA\EntidadesBundle\Entity\ComplejidadNc $idcomplejidad = null)
    {
        $this->idcomplejidad = $idcomplejidad;
    
        return $this;
    }

    /**
     * Get idcomplejidad
     *
     * @return \HRETA\EntidadesBundle\Entity\TblComplejidadNc 
     */
    public function getIdcomplejidad()
    {
        return $this->idcomplejidad;
    }

    /**
     * Set idimpacto
     *
     * @param \HRETA\EntidadesBundle\Entity\TblImpactoNc $idimpacto
     * @return NoConformidad
     */
    public function setIdimpacto(\HRETA\EntidadesBundle\Entity\ImpactoNc $idimpacto = null)
    {
        $this->idimpacto = $idimpacto;
    
        return $this;
    }

    /**
     * Get idimpacto
     *
     * @return \HRETA\EntidadesBundle\Entity\TblImpactoNc 
     */
    public function getIdimpacto()
    {
        return $this->idimpacto;
    }
   
    /**
     * Set iddocumentoarquitectura
     *
     * @param \HRETA\EntidadesBundle\Entity\DocumentoArquitectura $iddocumentoarquitectura
     * @return NoConformidad
     */
    public function setIddocumentoarquitectura(\HRETA\EntidadesBundle\Entity\DocumentoArquitectura $iddocumentoarquitectura = null)
    {
        $this->iddocumentoarquitectura = $iddocumentoarquitectura;
    
        return $this;
    }

    /**
     * Get iddocumentoarquitectura
     *
     * @return \HRETA\EntidadesBundle\Entity\DocumentoArquitectura 
     */
    public function getIddocumentoarquitectura()
    {
        return $this->iddocumentoarquitectura;
    }
}