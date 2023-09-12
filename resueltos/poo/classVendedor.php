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

            <p> Nombre: {$this->nombre} <br></p>
            <p> Apellido: {$this->apellido} <br></p>
            <p> Email: {$this->email} <br></p>
            <p> Password: {$this->getPassword()} <br></p>
            <p> Estado: {$this->getEstado()} <br></p>
            "

        ];

        return $datos;
    
    }
}
