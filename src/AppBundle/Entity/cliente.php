<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\clienteRepository")
 */
class cliente
{
    /**
     * @var int
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
     * @ORM\Column(name="apellido", type="string", length=100)
     */
     
    private $apellido;

     
    /**
     * @ORM\Column(type="integer")
     */ 
    private $telefono;

    
    
    /**
     * Get id
     *
     * @return int
     */  
    public function getId()
    {
        return $this->id;
    }
    
    
     /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Post
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Post
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
 
        return $this;
    }
 
    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }
    
    
    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Post
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
 
        return $this;
    }
 
    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
}

