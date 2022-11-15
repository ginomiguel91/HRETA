<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TblAspectos
 *
 * @ORM\Table(name="tbl_aspectos")
 * @ORM\Entity
 */
class Aspectos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="tbl_aspectos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="text")
     */
    private $nombre;

    /**
     * @var \TblTipoDoc
     *
     * @ORM\ManyToOne(targetEntity="TipoDoc", inversedBy="aspectos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tbl_tipo_docid", referencedColumnName="id")
     * })
     */
    private $tblTipoDocid;



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
     * Set nombre
     *
     * @param string $nombre
     * @return Aspectos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set tblTipoDocid
     *
     * @param \HRETA\EntidadesBundle\Entity\TipoDoc $tblTipoDocid
     * @return Aspectos
     */
    public function setTblTipoDocid(\HRETA\EntidadesBundle\Entity\TipoDoc $tblTipoDocid = null)
    {
        $this->tblTipoDocid = $tblTipoDocid;
    
        return $this;
    }

    /**
     * Get tblTipoDocid
     *
     * @return \HRETA\EntidadesBundle\Entity\TipoDoc 
     */
    public function getTblTipoDocid()
    {
        return $this->tblTipoDocid;
    }
    
    public function __toString() {
        return $this->nombre;
    }

}