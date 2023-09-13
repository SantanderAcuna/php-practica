<?php


require_once './classUsuario.php';

class Vendedor extends Usuario
{

    protected $estado = 'activo';


    public function __construct(string $nombre, string $apellido, string $email, string $password, string $estado)
    {
        parent::__construct($nombre, $apellido, $email, $password);
        $this->estado = $estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getEstado()
    {
        return $this->estado;
    }


    public function perfil()
    {

      

        $datos = [
            "
           <h2> Perfil vendedor </h2>
            <p> Nombre: {$this->nombre}</p>
            <p> Apellido: {$this->apellido}</p>
            <p> Email: {$this->email}</p>
            <p> Password: {$this->getPassword()}</p>
            <p> Estado: {$this->getEstado()}</p>
            "

        ];

        return $datos;
    
    }
}
