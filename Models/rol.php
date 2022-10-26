<?php

class Rol
{
    private ?int $idRol=null;
    private ?string $nombreRol=null;

    private $connection;

    public function __CONSTRUCT(){
        $this->connection = Database::Connect();

    }
   

    


//getters y setters

    /**
     * Get the value of idRol
     */ 
    public function getIdRol()
    {
        return $this->idRol;
    }

    /**
     * Set the value of idRol
     *
     * @return  self
     */ 
    public function setIdRol($idRol)
    {
        $this->idRol = $idRol;

        return $this;
    }

    

    /**
     * Get the value of nombreRol
     */ 
    public function getNombreRol()
    {
        return $this->nombreRol;
    }

    /**
     * Set the value of nombreRol
     *
     * @return  self
     */ 
    public function setNombreRol($nombreRol)
    {
        $this->nombreRol = $nombreRol;

        return $this;
    }
}