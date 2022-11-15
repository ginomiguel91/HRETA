<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblImpactoNc
 *
 * @ORM\Table(name="tbl_impacto_nc")
 * @ORM\Entity
 */
class ImpactoNc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idimpacto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tbl_impacto_nc_idimpacto_seq", allocationSize=1, initialValue=1)
     */
    private $idimpacto;

    /**
     * @var string
     *
     * @ORM\Column(name="denominacion", type="string", length=100, nullable=false)
     */
    private $denominacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="impacto", type="integer", nullable=false)
     */
    private $impacto;



    /**
     * Get idimpacto
     *
     * @return integer 
     */
    public function getIdimpacto()
    {
        return $this->idimpacto;
    }

    /**
     * Set denominacion
     *
     * @param string $denominacion
     * @return ImpactoNc
     */
    public function setDenominacion($denominacion)
    {
        $this->denominacion = $denominacion;
    
        return $this;
    }

    /**
     * Get denominacion
     *
     * @return string 
     */
    public function getDenominacion()
    {
        return $this->denominacion;
    }

    /**
     * Set impacto
     *
     * @param integer $impacto
     * @return ImpactoNc
     */
    public function setImpacto($impacto)
    {
        $this->impacto = $impacto;
    
        return $this;
    }

    /**
     * Get impacto
     *
     * @return integer 
     */
    public function getImpacto()
    {
        return $this->impacto;
    }
     public function __toString() {
        return $this->denominacion;
    }
}