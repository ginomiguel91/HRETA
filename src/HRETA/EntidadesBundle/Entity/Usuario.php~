<?php

namespace HRETA\EntidadesBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;


/**
 * Usuario
 * @ORM\Entity(repositoryClass="UsuarioRepository")
 * @ORM\Table(name="tbl_usuario")
 * 
 */
class Usuario extends BaseUser {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30, nullable=true)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=60, nullable=true)
     */
    protected $apellidos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Proyecto", mappedBy="idus")
     */
    protected $idproy;
    

    /**
     * Constructor
     */
    public function __construct() {
        parent::__construct();
        $this->idproy = new \Doctrine\Common\Collections\ArrayCollection();
        
    }

    /**
     * Get id
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
     * @return Usuario
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
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuario
     */
    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos() {
        return $this->apellidos;
    }
    
    public function addRole($rol){
        if ($rol==1){
      array_push($this->roles, 'ROLE_ADMIN');   
    }
    else if($rol==2){
       array_push($this->roles, 'ROLE_USER');
    }
    }
    /**
     * Add idproy
     *
     * @param \HRETA\EntidadesBundle\Entity\Proyecto $idproy
     * @return Usuario
     */
    public function addIdproy(\HRETA\EntidadesBundle\Entity\Proyecto $idproy) {
        $this->idproy[] = $idproy;

        return $this;
    }

    /**
     * Remove idproy
     *
     * @param \HRETA\EntidadesBundle\Entity\Proyecto $idproy
     */
    public function removeIdproy(\HRETA\EntidadesBundle\Entity\Proyecto $idproy) {
        $this->idproy->removeElement($idproy);
    }

    /**
     * Get idproy
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdproy() {
        return $this->idproy;
    }
    
   
}