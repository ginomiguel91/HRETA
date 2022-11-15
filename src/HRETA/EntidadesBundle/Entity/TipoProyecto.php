<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblTipoProyecto
 *
 * @ORM\Table(name="tbl_tipo_proyecto")
 * @ORM\Entity
 */
class TipoProyecto {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tbl_tipo_proyecto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="denominacion", type="string", length=255, nullable=true)
     */
    private $denominacion;

    /**
     * @var \Proyectos
     *
     * @ORM\OneToMany(targetEntity="Proyecto", mappedBy="idtipo", cascade={"remove"})
     */
    private $proyectos;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set denominacion
     *
     * @param string $denominacion
     * @return TipoProyecto
     */
    public function setDenominacion($denominacion) {
        $this->denominacion = $denominacion;

        return $this;
    }

    /**
     * Get denominacion
     *
     * @return string 
     */
    public function getDenominacion() {
        return $this->denominacion;
    }

    public function __toString() {
        return $this->denominacion;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proyectos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add proyectos
     *
     * @param \HRETA\EntidadesBundle\Entity\Proyecto $proyectos
     * @return TipoProyecto
     */
    public function addProyecto(\HRETA\EntidadesBundle\Entity\Proyecto $proyectos)
    {
        $this->proyectos[] = $proyectos;
    
        return $this;
    }

    /**
     * Remove proyectos
     *
     * @param \HRETA\EntidadesBundle\Entity\Proyecto $proyectos
     */
    public function removeProyecto(\HRETA\EntidadesBundle\Entity\Proyecto $proyectos)
    {
        $this->proyectos->removeElement($proyectos);
    }

    /**
     * Get proyectos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProyectos()
    {
        return $this->proyectos;
    }
}