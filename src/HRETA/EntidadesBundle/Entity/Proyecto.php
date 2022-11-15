<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table(name="tbl_proyecto")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="HRETA\EntidadesBundle\Repository\ProyectoRepository")
 */
class Proyecto {

    /**
     * @var integer
     *
     * @ORM\Column(name="idproy", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tbl_proyecto_idproy_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=10, nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Usuario", inversedBy="idproy")
     * @ORM\JoinTable(name="tbl_proyecto_usuario",
     *   joinColumns={
     *     @ORM\JoinColumn(name="idproy", referencedColumnName="idproy")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="idus", referencedColumnName="id")
     *   }
     * )
     */
    private $idus;

    /**
     * @var \TipoProyecto
     *
     * @ORM\ManyToOne(targetEntity="TipoProyecto", inversedBy="proyectos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idtipo", referencedColumnName="id")
     * })
     */
    private $idtipo;

    /**
     * @var ExpedienteArquitectura
     *
     * @ORM\OneToOne(targetEntity="ExpedienteArquitectura", mappedBy="idproy", cascade={"remove"})   
     */
    private $idexped;

    /**
     * Constructor
     */
    public function __construct() {
        $this->idus = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idproy
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Proyecto
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return Proyecto
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Proyecto
     */
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion() {
        return $this->descripcion;
    }

    /**
     * Add idus
     *
     * @param \HRETA\EntidadesBundle\Entity\Usuario $idus
     * @return Proyecto
     */
    public function addIdu(\HRETA\EntidadesBundle\Entity\Usuario $idus) {
        $this->idus[] = $idus;

        return $this;
    }

    /**
     * Remove idus
     *
     * @param \HRETA\EntidadesBundle\Entity\Usuario $idus
     */
    public function removeIdu(\HRETA\EntidadesBundle\Entity\Usuario $idus) {
        $this->idus->removeElement($idus);
    }

    /**
     * Get idus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdus() {
        return $this->idus;
    }

    /**
     * Set idtipo
     *
     * @param \HRETA\EntidadesBundle\Entity\TipoProyecto $idtipo
     * @return Proyecto
     */
    public function setIdtipo(\HRETA\EntidadesBundle\Entity\TipoProyecto $idtipo = null) {
        $this->idtipo = $idtipo;

        return $this;
    }

    /**
     * Get idtipo
     *
     * @return \HRETA\EntidadesBundle\Entity\TipoProyecto 
     */
    public function getIdtipo() {
        return $this->idtipo;
    }

    public function __toString() {
        return $this->nombre;
    }

    public function getIdexped() {
        return $this->idexped;
    }

    public function setIdexped(\HRETA\EntidadesBundle\Entity\ExpedienteArquitectura $idexped = null) {
        $this->idexped = $idexped;

        return $this;
    }

}