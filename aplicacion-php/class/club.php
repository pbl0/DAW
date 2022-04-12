<?php

class Club {
    private $id;
    private $nombreCorto;
    private $nombre;
    private $ciudad;
    private $fecFundacion;
    private $numSocios;

    public function __construct (
        $id = null,
        $nombreCorto = null,
        $nombre = null,
        $ciudad = null,
        $fecFundacion = null,
        $numSocios = null
        ){
            $this->id = $id;
            $this->nombreCorto = $nombreCorto;
            $this->nombre = $nombre;
            $this->ciudad = $ciudad;
            $this->fecFundacion = $fecFundacion;
            $this->numSocios = $numSocios;
            
        }

    public static function cabeceraTabla() {
        $cabecera = [
            "#",
            "Nombre Corto",
            "Nombre",
            "Ciudad",
            "Fecha de Fundacion",
            "Nº de Socios",
            "Acciones"
        ];
        
        return $cabecera;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombreCorto
     */ 
    public function getNombreCorto()
    {
        return $this->nombreCorto;
    }

    /**
     * Set the value of nombreCorto
     *
     * @return  self
     */ 
    public function setNombreCorto($nombreCorto)
    {
        $this->nombreCorto = $nombreCorto;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of ciudad
     */ 
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of ciudad
     *
     * @return  self
     */ 
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of fecFundacion
     */ 
    public function getFecFundacion()
    {
        return $this->fecFundacion;
    }

    /**
     * Set the value of fecFundacion
     *
     * @return  self
     */ 
    public function setFecFundacion($fecFundacion)
    {
        $this->fecFundacion = $fecFundacion;

        return $this;
    }

    /**
     * Get the value of numSocios
     */ 
    public function getNumSocios()
    {
        return $this->numSocios;
    }

    /**
     * Set the value of numSocios
     *
     * @return  self
     */ 
    public function setNumSocios($numSocios)
    {
        $this->numSocios = $numSocios;

        return $this;
    }
}

?>