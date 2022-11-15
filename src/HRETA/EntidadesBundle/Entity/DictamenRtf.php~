<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DictamenRtf
 *
 * @ORM\Table(name="tbl_dictamen_rtf")
 * @ORM\Entity
 */
class DictamenRtf
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iddictamen", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tbl_dictamen_rtf_iddictamen_seq", allocationSize=1, initialValue=1)
     */
    private $iddictamen;

    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="text", nullable=true)
     */
    private $resumen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \RtfArquitectura
     *
     * @ORM\ManyToOne(targetEntity="RtfArquitectura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idrev", referencedColumnName="id")
     * })
     */
    private $idrev;

    /**
     * @var \ResultadoDictamen
     *
     * @ORM\ManyToOne(targetEntity="ResultadoDictamen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idresultado", referencedColumnName="idresultado")
     * })
     */
    private $idresultado;



    /**
     * Get iddictamen
     *
     * @return integer 
     */
    public function getIddictamen()
    {
        return $this->iddictamen;
    }

    /**
     * Set resumen
     *
     * @param string $resumen
     * @return DictamenRtf
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;
    
        return $this;
    }

    /**
     * Get resumen
     *
     * @return string 
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return DictamenRtf
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
     * Set idrev
     *
     * @param \HRETA\EntidadesBundle\Entity\TblRtfArquitectura $idrev
     * @return DictamenRtf
     */
    public function setIdrev(\HRETA\EntidadesBundle\Entity\TblRtfArquitectura $idrev = null)
    {
        $this->idrev = $idrev;
    
        return $this;
    }

    /**
     * Get idrev
     *
     * @return \HRETA\EntidadesBundle\Entity\TblRtfArquitectura 
     */
    public function getIdrev()
    {
        return $this->idrev;
    }

    /**
     * Set idresultado
     *
     * @param \HRETA\EntidadesBundle\Entity\TblResultadoDictamen $idresultado
     * @return DictamenRtf
     */
    public function setIdresultado(\HRETA\EntidadesBundle\Entity\TblResultadoDictamen $idresultado = null)
    {
        $this->idresultado = $idresultado;
    
        return $this;
    }

    /**
     * Get idresultado
     *
     * @return \HRETA\EntidadesBundle\Entity\TblResultadoDictamen 
     */
    public function getIdresultado()
    {
        return $this->idresultado;
    }
}