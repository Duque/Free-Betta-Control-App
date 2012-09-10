<?php

namespace fbc\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * fbc\AppBundle\Entity\Puestas
 */
class Puestas
{
    /**
     * @var string $codPuesta
     */
    private $codPuesta;

    /**
     * @var integer $idPadre
     */
    private $idPadre;

    /**
     * @var integer $idMadre
     */
    private $idMadre;

    /**
     * @var integer $huevos
     */
    private $huevos;

    /**
     * @var integer $eclosiones
     */
    private $eclosiones;

    /**
     * @var integer $tasaSupervivencia
     */
    private $tasaSupervivencia;

    /**
     * @var integer $imagenesPuesta
     */
    private $imagenesPuesta;

    /**
     * @var date $fechaInicio
     */
    private $fechaInicio;

    /**
     * @var date $fechaCruce
     */
    private $fechaCruce;

    /**
     * @var date $fechaEclosion
     */
    private $fechaEclosion;

    /**
     * @var integer $sexRatio
     */
    private $sexRatio;

    /**
     * @var integer $idPuesta
     */
    private $idPuesta;


    /**
     * Set codPuesta
     *
     * @param string $codPuesta
     */
    public function setCodPuesta($codPuesta)
    {
        $this->codPuesta = $codPuesta;
    }

    /**
     * Get codPuesta
     *
     * @return string 
     */
    public function getCodPuesta()
    {
        return $this->codPuesta;
    }

    /**
     * Set idPadre
     *
     * @param integer $idPadre
     */
    public function setIdPadre($idPadre)
    {
        $this->idPadre = $idPadre;
    }

    /**
     * Get idPadre
     *
     * @return integer 
     */
    public function getIdPadre()
    {
        return $this->idPadre;
    }

    /**
     * Set idMadre
     *
     * @param integer $idMadre
     */
    public function setIdMadre($idMadre)
    {
        $this->idMadre = $idMadre;
    }

    /**
     * Get idMadre
     *
     * @return integer 
     */
    public function getIdMadre()
    {
        return $this->idMadre;
    }

    /**
     * Set huevos
     *
     * @param integer $huevos
     */
    public function setHuevos($huevos)
    {
        $this->huevos = $huevos;
    }

    /**
     * Get huevos
     *
     * @return integer 
     */
    public function getHuevos()
    {
        return $this->huevos;
    }

    /**
     * Set eclosiones
     *
     * @param integer $eclosiones
     */
    public function setEclosiones($eclosiones)
    {
        $this->eclosiones = $eclosiones;
    }

    /**
     * Get eclosiones
     *
     * @return integer 
     */
    public function getEclosiones()
    {
        return $this->eclosiones;
    }

    /**
     * Set tasaSupervivencia
     *
     * @param integer $tasaSupervivencia
     */
    public function setTasasupervivencia($tasaSupervivencia)
    {
        $this->tasaSupervivencia = $tasaSupervivencia;
    }

    /**
     * Get tasaSupervivencia
     *
     * @return integer 
     */
    public function getTasasupervivencia()
    {
        return $this->tasaSupervivencia;
    }

    /**
     * Set imagenesPuesta
     *
     * @param integer $imagenesPuesta
     */
    public function setImagenesPuesta($imagenesPuesta)
    {
        $this->imagenesPuesta = $imagenesPuesta;
    }

    /**
     * Get imagenesPuesta
     *
     * @return integer 
     */
    public function getImagenesPuesta()
    {
        return $this->imagenesPuesta;
    }

    /**
     * Set fechaInicio
     *
     * @param date $fechaInicio
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    }

    /**
     * Get fechaInicio
     *
     * @return date 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaCruce
     *
     * @param date $fechaCruce
     */
    public function setFechaCruce($fechaCruce)
    {
        $this->fechaCruce = $fechaCruce;
    }

    /**
     * Get fechaCruce
     *
     * @return date 
     */
    public function getFechaCruce()
    {
        return $this->fechaCruce;
    }

    /**
     * Set fechaEclosion
     *
     * @param date $fechaEclosion
     */
    public function setFechaEclosion($fechaEclosion)
    {
        $this->fechaEclosion = $fechaEclosion;
    }

    /**
     * Get fechaEclosion
     *
     * @return date 
     */
    public function getFechaEclosion()
    {
        return $this->fechaEclosion;
    }

    /**
     * Set sexRatio
     *
     * @param integer $sexRatio
     */
    public function setSexratio($sexRatio)
    {
        $this->sexRatio = $sexRatio;
    }

    /**
     * Get sexRatio
     *
     * @return integer 
     */
    public function getSexratio()
    {
        return $this->sexRatio;
    }

    /**
     * Get idPuesta
     *
     * @return integer 
     */
    public function getIdPuesta()
    {
        return $this->idPuesta;
    }
    
    /**
     * Set idPuesta
     *
     * @param integer $idPuesta
     */
    public function setidPuesta($idPuesta)
    {
        $this->idPuesta = $idPuesta;
    }
}