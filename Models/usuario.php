<?php

class Usuario{

    private ?int $idUsuario=null;
    private ?string $nombresUsuario=null;
    private ?string $apellidosUsuario=null;
    private ?string $correoUsuario=null;
    private ?string $contraseñaUsuario=null;
    private ?int $documentoUsuario=null;
    private ?int $idRol=null;

    private $connection;

    public function __CONSTRUCT(){
        $this->connection = Database::Connect();

    }
    
}