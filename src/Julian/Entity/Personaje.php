<?php

namespace Julian\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personaje
 */
class Personaje
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var integer
     */
    private $fuerza;

    /**
     * @var integer
     */
    private $inteligencia;

    /**
     * @var integer
     */
    private $riqueza;

    /**
     * @var boolean
     */
    private $eshumano;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Personaje
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Personaje
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Personaje
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;
    
        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fuerza
     *
     * @param integer $fuerza
     * @return Personaje
     */
    public function setFuerza($fuerza)
    {
        $this->fuerza = $fuerza;
    
        return $this;
    }

    /**
     * Get fuerza
     *
     * @return integer 
     */
    public function getFuerza()
    {
        return $this->fuerza;
    }

    /**
     * Set inteligencia
     *
     * @param integer $inteligencia
     * @return Personaje
     */
    public function setInteligencia($inteligencia)
    {
        $this->inteligencia = $inteligencia;
    
        return $this;
    }

    /**
     * Get inteligencia
     *
     * @return integer 
     */
    public function getInteligencia()
    {
        return $this->inteligencia;
    }

    /**
     * Set riqueza
     *
     * @param integer $riqueza
     * @return Personaje
     */
    public function setRiqueza($riqueza)
    {
        $this->riqueza = $riqueza;
    
        return $this;
    }

    /**
     * Get riqueza
     *
     * @return integer 
     */
    public function getRiqueza()
    {
        return $this->riqueza;
    }

    /**
     * Set eshumano
     *
     * @param boolean $eshumano
     * @return Personaje
     */
    public function setEshumano($eshumano)
    {
        $this->eshumano = $eshumano;
    
        return $this;
    }

    /**
     * Get eshumano
     *
     * @return boolean 
     */
    public function getEshumano()
    {
        return $this->eshumano;
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
    
    public function getJson()
    {
        return array(
            "nombre" => $this->nombre,
            "descripcion" => $this->descripcion,
            "fechaCracion" => $this->fechaCreacion,
            "fuerza" => $this->fuerza,
            "inteligencia" => $this->inteligencia,
            "riqueza" => $this->riqueza,
            "eshumano" => $this->eshumano,
        );
    }
            
}
