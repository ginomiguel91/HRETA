<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblEvaluacion
 *
 * @ORM\Table(name="tbl_evaluacion")
 * @ORM\Entity
 */
class Evaluacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tbl_evaluacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="satisfecho", type="boolean", nullable=true)
     */
    private $satisfecho;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @var \TblDocumentoArquitectura
     *
     * @ORM\ManyToOne(targetEntity="DocumentoArquitectura", inversedBy="evaluacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tbl_documento_arquitecturaid", referencedColumnName="id")
     * })
     */
    private $tblDocumentoArquitecturaid;

    /**
     * @var \TblAspectos
     *
     * @ORM\ManyToOne(targetEntity="Aspectos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tbl_aspectosid", referencedColumnName="id")
     * })
     */
    private $tblAspectosid;



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
     * Set satisfecho
     *
     * @param boolean $satisfecho
     * @return Evaluacion
     */
    public function setSatisfecho($satisfecho)
    {
        $this->satisfecho = $satisfecho;
    
        return $this;
    }

    /**
     * Get satisfecho
     *
     * @return boolean 
     */
    public function getSatisfecho()
    {
        return $this->satisfecho;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Evaluacion
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set tblDocumentoArquitecturaid
     *
     * @param \HRETA\EntidadesBundle\Entity\DocumentoArquitectura $tblDocumentoArquitecturaid
     * @return Evaluacion
     */
    public function setTblDocumentoArquitecturaid(\HRETA\EntidadesBundle\Entity\DocumentoArquitectura $tblDocumentoArquitecturaid = null)
    {
        $this->tblDocumentoArquitecturaid = $tblDocumentoArquitecturaid;
    
        return $this;
    }

    /**
     * Get tblDocumentoArquitecturaid
     *
     * @return \HRETA\EntidadesBundle\Entity\DocumentoArquitectura 
     */
    public function getTblDocumentoArquitecturaid()
    {
        return $this->tblDocumentoArquitecturaid;
    }

    /**
     * Set tblAspectosid
     *
     * @param \HRETA\EntidadesBundle\Entity\Aspectos $tblAspectosid
     * @return Evaluacion
     */
    public function setTblAspectosid(\HRETA\EntidadesBundle\Entity\Aspectos $tblAspectosid = null)
    {
        $this->tblAspectosid = $tblAspectosid;
    
        return $this;
    }

    /**
     * Get tblAspectosid
     *
     * @return \HRETA\EntidadesBundle\Entity\Aspectos 
     */
    public function getTblAspectosid()
    {
        return $this->tblAspectosid;
    }
}