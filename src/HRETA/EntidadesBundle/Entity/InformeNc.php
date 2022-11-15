<?php

namespace HRETA\EntidadesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InformeNc
 *
 * @ORM\Table(name="tbl_informe_nc")
 * @ORM\Entity
 */
class InformeNc
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tbl_informe_nc_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=10, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="acuerdos", type="text", nullable=true)
     */
    private $acuerdos;



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
     * Set numero
     *
     * @param string $numero
     * @return InformeNc
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set acuerdos
     *
     * @param string $acuerdos
     * @return InformeNc
     */
    public function setAcuerdos($acuerdos)
    {
        $this->acuerdos = $acuerdos;
    
        return $this;
    }

    /**
     * Get acuerdos
     *
     * @return string 
     */
    public function getAcuerdos()
    {
        return $this->acuerdos;
    }
    
    public function __toString() {
        return $this->numero;
    }
}