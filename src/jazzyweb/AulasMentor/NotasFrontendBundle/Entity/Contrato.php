<?php

namespace jazzyweb\AulasMentor\NotasFrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Contrato
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="jazzyweb\AulasMentor\NotasFrontendBundle\Entity\ContratoRepository")
 */
class Contrato
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
     * @var date $fecha
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string $referencia
     *
     * @ORM\Column(name="referencia", type="string", length=255)
     */
    private $referencia;
    
    ////ASOCIACIONES////

     /**
      * @ORM\ManyToOne(targetEntity="Tarifa")
      */
     private $tarifa;

     /**
      * @ORM\ManyToOne(targetEntity="Usuario")
      */
     private $usuario;

     ////FIN ASOCIACIONES////    


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
     * Set fecha
     *
     * @param date $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Get fecha
     *
     * @return date 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set tarifa
     *
     * @param jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Tarifa $tarifa
     */
    public function setTarifa(\jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Tarifa $tarifa)
    {
        $this->tarifa = $tarifa;
    }

    /**
     * Get tarifa
     *
     * @return jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Tarifa 
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * Set usuario
     *
     * @param jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario $usuario
     */
    public function setUsuario(\jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario $usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get usuario
     *
     * @return jazzyweb\AulasMentor\NotasFrontendBundle\Entity\Usuario 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}