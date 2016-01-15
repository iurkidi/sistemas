<?php

namespace uni\bundle\sistemasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * hardware
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class hardware
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
     * @ORM\Column(name="nombre", type="string", length=150)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="ipreal", type="string", length=15)
     */
    private $ipreal;

    /**
     * @var string
     *
     * @ORM\Column(name="memoria", type="string", length=6)
     */
    private $memoria;

    /**
     * @var string
     *
     * @ORM\Column(name="disco", type="string", length=6)
     */
    private $disco;

    /**
     * @var string
     *
     * @ORM\Column(name="cpu", type="string", length=6)
     */
    private $cpu;
    
    /**
    * @ORM\OneToMany(targetEntity="maqvirtual", mappedBy="hardware", cascade={"remove"})
    */
    protected $maquinas;
    
    public function __construct() {
        $this->maquinas = new ArrayCollection();
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
     * @return hardware
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
     * Set ipreal
     *
     * @param string $ipreal
     * @return hardware
     */
    public function setIpreal($ipreal)
    {
        $this->ipreal = $ipreal;

        return $this;
    }

    /**
     * Get ipreal
     *
     * @return string 
     */
    public function getIpreal()
    {
        return $this->ipreal;
    }

    /**
     * Set memoria
     *
     * @param string $memoria
     * @return hardware
     */
    public function setMemoria($memoria)
    {
        $this->memoria = $memoria;

        return $this;
    }

    /**
     * Get memoria
     *
     * @return string 
     */
    public function getMemoria()
    {
        return $this->memoria;
    }

    /**
     * Set disco
     *
     * @param string $disco
     * @return hardware
     */
    public function setDisco($disco)
    {
        $this->disco = $disco;

        return $this;
    }

    /**
     * Get disco
     *
     * @return string 
     */
    public function getDisco()
    {
        return $this->disco;
    }

    /**
     * Set cpu
     *
     * @param string $cpu
     * @return hardware
     */
    public function setCpu($cpu)
    {
        $this->cpu = $cpu;

        return $this;
    }

    /**
     * Get cpu
     *
     * @return string 
     */
    public function getCpu()
    {
        return $this->cpu;
    }

    /**
     * Add maquinas
     *
     * @param \uni\bundle\sistemasBundle\Entity\maqvirtual $maquinas
     * @return hardware
     */
    public function addMaquina(\uni\bundle\sistemasBundle\Entity\maqvirtual $maquinas)
    {
        $this->maquinas[] = $maquinas;

        return $this;
    }

    /**
     * Remove maquinas
     *
     * @param \uni\bundle\sistemasBundle\Entity\maqvirtual $maquinas
     */
    public function removeMaquina(\uni\bundle\sistemasBundle\Entity\maqvirtual $maquinas)
    {
        $this->maquinas->removeElement($maquinas);
    }

    /**
     * Get maquinas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMaquinas()
    {
        return $this->maquinas;
    }
}
