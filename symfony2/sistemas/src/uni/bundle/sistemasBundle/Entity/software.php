<?php

namespace uni\bundle\sistemasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * software
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class software
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
     * @ORM\Column(name="tamanyo", type="string", length=6)
     */
    private $tamanyo;
    
    /**
    * @ORM\ManyToMany(targetEntity="maqvirtual", inversedBy="programas")
    */

    private $maquinas;

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
     * @return software
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
     * Set tamaño
     *
     * @param string $tamanyo
     * @return software
     */
    public function setTamanyo($tamanyo)
    {
        $this->tamaño = $tamanyo;

        return $this;
    }

    /**
     * Get tamanyo
     *
     * @return string 
     */
    public function getTamanyo()
    {
        return $this->tamanyo;
    }

    /**
     * Add maquinas
     *
     * @param \uni\bundle\sistemasBundle\Entity\maqvirtual $maquinas
     * @return software
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
