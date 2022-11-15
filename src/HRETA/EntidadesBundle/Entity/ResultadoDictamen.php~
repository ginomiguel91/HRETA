<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblResultadoDictamen
 *
 * @ORM\Table(name="tbl_resultado_dictamen")
 * @ORM\Entity
 */
class ResultadoDictamen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idresultado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tbl_resultado_dictamen_idresultado_seq", allocationSize=1, initialValue=1)
     */
    private $idresultado;

    /**
     * @var string
     *
     * @ORM\Column(name="denominacion", type="string", length=255, nullable=true)
     */
    private $denominacion;



    /**
     * Get idresultado
     *
     * @return integer 
     */
    public function getIdresultado()
    {
        return $this->idresultado;
    }

    /**
     * Set denominacion
     *
     * @param string $denominacion
     * @return ResultadoDictamen
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
    
    public function __toString() {
        return $this->denominacion;
    }
}