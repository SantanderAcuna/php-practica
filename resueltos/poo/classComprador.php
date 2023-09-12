<?php

include_once './classUsuario.php';

class Comprador extends Usuario
{

    protected $pais = '';
    protected $ciudad = '';
    protected $direccion = '';
    protected $barrio = '';


    public function __construct(string $nombre, string $apellido, string $email, string $password, string $pais, string $ciudad, string $direccion, string $barrio)
    {
        parent::__construct($nombre,  $apellido, $email,  $password);
        $this->pais = $pais;
        $this->ciudad = $ciudad;
        $this->direccion = $direccion;
        $this->barrio = $barrio;
    }


    public function setPais($pais)
    {

        $this->pais = $pais;
    }

    public function getPais()
    {

        return $this->pais . '<br>';
    }


    public function setCiudad($ciudad)
    {

        $this->ciudad = $ciudad;
    }

    public function getCiudad()
    {

        return $this->ciudad . '<br>';
    }



    public function setDireccion($direccion)
    {

        $this->direccion = $direccion;
    }

    public function getDireccion()
    {

        return $this->direccion . '<br>';
    }



    public function setBarrio($barrio)
    {

        $this->barrio = $barrio;
    }

    public function getBarrio()
    {

        return $this->barrio . '<br>';
    }

    public function perfil()
    {

        $datos = [
            "
            <h2> Perfil comprador </h2>
            <p> Nombre: {$this->nombre} <br></p>
            <p> Apellido: {$this->apellido} <br></p>
            <p> Email: {$this->email} <br></p>
            <p> Password: {$this->getPassword()} <br></p>
            <p> Pais: {$this->getPais()}</p>
            <p> Ciudad: {$this->getCiudad()}</p>
            <p> Barrio: {$this->getBarrio()}</p>
            <p> Direccion: {$this->getDireccion()}</p>
            "
        ];

        return $datos;
    }
}
