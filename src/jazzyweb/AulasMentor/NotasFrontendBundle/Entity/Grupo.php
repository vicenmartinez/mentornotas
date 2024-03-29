<?php

namespace jazzyweb\AulasMentor\NotasFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Grupo
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="jazzyweb\AulasMentor\NotasFrontendBundle\Entity\GrupoRepository")
 */
class Grupo
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string $rol
     *
     * @ORM\Column(name="rol", type="string", length=20)
     */
    private $rol;


    ////ASOCIACIONES////

     /**
      * @ORM\ManyToMany(targetEntity="Usuario", mappedBy="grupos")
      */
     private $usuarios;

     ////FIN ASOCIACIONES////

     public function __construct()
     {
         $this->usuarios = new ArrayCollection();
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
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * Set rol
     *
     * @param string $rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    }

    /**
     * Get rol
     *
     * @return string 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Add usuarios
     *
     * @param jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario $usuarios
     */
    public function addUsuario(\jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario $usuarios)
    {
        $this->usuarios[] = $usuarios;
    }

    /**
     * Get usuarios
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}