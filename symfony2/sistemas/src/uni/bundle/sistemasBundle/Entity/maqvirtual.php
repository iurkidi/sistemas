<?php

namespace uni\bundle\sistemasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * maqvirtual
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class maqvirtual
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ipvirtual", type="string", length=15)
     */
    private $ipvirtual;

    /**
     * @var string
     *
     * @ORM\Column(name="tareas", type="text")
     */
    private $tareas;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text")
     */
    private $descripcion;
    
    /**
    * @ORM\ManyToOne(targetEntity="hardware", inversedBy="maquinas", cascade={"remove"})    
    */
    protected $hardware;  
    
    /**
    * @ORM\ManyToMany(targetEntity="software", mappedBy="maquinas")
    */

    private $programas;

    public function __construct() {
        $this->programas = new ArrayCollection();        
    }    
    
    public function __toString() {
        return $this->nombre;
    }


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
     * @return maqvirtual
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
     * Set ipvirtual
     *
     * @param string $ipvirtual
     * @return maqvirtual
     */
    public function setIpvirtual($ipvirtual)
    {
        $this->ipvirtual = $ipvirtual;

        return $this;
    }

    /**
     * Get ipvirtual
     *
     * @return string 
     */
    public function getIpvirtual()
    {
        return $this->ipvirtual;
    }

    /**
     * Set tareas
     *
     * @param string $tareas
     * @return maqvirtual
     */
    public function setTareas($tareas)
    {
        $this->tareas = $tareas;

        return $this;
    }

    /**
     * Get tareas
     *
     * @return string 
     */
    public function getTareas()
    {
        return $this->tareas;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return maqvirtual
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
     * Set hardware
     *
     * @param \uni\bundle\sistemasBundle\Entity\hardware $hardware
     * @return maqvirtual
     */
    public function setHardware(\uni\bundle\sistemasBundle\Entity\hardware $hardware = null)
    {
        $this->hardware = $hardware;

        return $this;
    }

    /**
     * Get hardware
     *
     * @return \uni\bundle\sistemasBundle\Entity\hardware 
     */
    public function getHardware()
    {
        return $this->hardware;
    }

    /**
     * Add programas
     *
     * @param \uni\bundle\sistemasBundle\Entity\software $programas
     * @return maqvirtual
     */
    public function addPrograma(\uni\bundle\sistemasBundle\Entity\software $programas)
    {
        $this->programas[] = $programas;

        return $this;
    }

    /**
     * Remove programas
     *
     * @param \uni\bundle\sistemasBundle\Entity\software $programas
     */
    public function removePrograma(\uni\bundle\sistemasBundle\Entity\software $programas)
    {
        $this->programas->removeElement($programas);
    }

    /**
     * Get programas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProgramas()
    {
        return $this->programas;
    }
}
