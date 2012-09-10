<?php

namespace fbc\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * fbc\AppBundle\Entity\Bettas
 */
class Bettas
{
    /**
     * @var string $codBetta
     */
    private $codBetta;

    /**
     * @var integer $idPuesta
     */
    private $idPuesta;

    /**
     * @var integer $fenotipoAletas
     */
    private $fenotipoAletas;

    /**
     * @var integer $genotipoAletas
     */
    private $genotipoAletas;

    /**
     * @var integer $fenotipoColor
     */
    private $fenotipoColor;

    /**
     * @var integer $genotipoColor
     */
    private $genotipoColor;

    /**
     * @var string $sexo
     */
    private $sexo;

    /**
     * @var text $imagenesBetta
     */
    private $imagenesBetta;

    /**
     * @var date $fechaRegistro
     */
    private $fechaRegistro;

    /**
     * @var integer $idBetta
     */
    private $idBetta;


    /**
     * Set codBetta
     *
     * @param string $codBetta
     */
    public function setCodBetta($codBetta)
    {
        $this->codBetta = $codBetta;
    }

    /**
     * Get codBetta
     *
     * @return string 
     */
    public function getCodBetta()
    {
        return $this->codBetta;
    }

    /**
     * Set idPuesta
     *
     * @param integer $idPuesta
     */
    public function setIdPuesta($idPuesta)
    {
        $this->idPuesta = $idPuesta;
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
     * Set fenotipoAletas
     *
     * @param string $fenotipoAletas
     */
    public function setFenotipoAletas($fenotipoAletas)
    {
        $this->fenotipoAletas = $fenotipoAletas;
    }

    /**
     * Get fenotipoAletas
     *
     * @return string 
     */
    public function getFenotipoAletas()
    {
        return $this->fenotipoAletas;
    }

    /**
     * Set genotipoAletas
     *
     * @param string $genotipoAletas
     */
    public function setGenotipoAletas($genotipoAletas)
    {
        $this->genotipoAletas = $genotipoAletas;
    }

    /**
     * Get genotipoAletas
     *
     * @return string 
     */
    public function getGenotipoAletas()
    {
        return $this->genotipoAletas;
    }

    /**
     * Set fenotipoColor
     *
     * @param string $fenotipoColor
     */
    public function setFenotipoColor($fenotipoColor)
    {
        $this->fenotipoColor = $fenotipoColor;
    }

    /**
     * Get fenotipoColor
     *
     * @return string 
     */
    public function getFenotipoColor()
    {
        return $this->fenotipoColor;
    }

    /**
     * Set genotipoColor
     *
     * @param string $genotipoColor
     */
    public function setGenotipoColor($genotipoColor)
    {
        $this->genotipoColor = $genotipoColor;
    }

    /**
     * Get genotipoColor
     *
     * @return string 
     */
    public function getGenotipoColor()
    {
        return $this->genotipoColor;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set imagenesBetta
     *
     * @param string $imagenesBetta
     */
    public function setImagenesBetta($imagenesBetta)
    {
        $this->imagenesBetta = $imagenesBetta;
    }

    /**
     * Get imagenesBetta
     *
     * @return string 
     */
    public function getImagenesBetta()
    {
        return $this->imagenesBetta;
    }

    /**
     * Set fechaRegistro
     *
     * @param date $fechaRegistro
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;
    }

    /**
     * Get fechaRegistro
     *
     * @return date 
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * Get idBetta
     *
     * @return integer 
     */
    public function getIdBetta()
    {
        return $this->idBetta;
    }
}