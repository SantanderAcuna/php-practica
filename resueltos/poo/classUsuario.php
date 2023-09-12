<?php


class Usuario
{

    public $nombre = '';
    protected $apellido = '';
    protected $email = '';
    private $password = '';
    private static $estado = 'activo';



    public function __construct(string $nombre, string $apellido, string $email, string $password)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->email = $email;
        $this->password = rand();
    }

    public function setNombre($nombre)
    {

        $this->nombre = $nombre;
    }

    public function getNombre()
    {

        return $this->nombre . '<br>';
    }

    public function setApellido($apellido)
    {

        $this->apellido = $apellido;
    }

    public function getApellido()
    {

        return $this->apellido . '<br>';
    }

    public function setEmail($email)
    {

        $this->email = $email;
    }

    public function getEmail()
    {

        return $this->email . '<br>';
    }


    public function setPassword($password)
    {

        $this->password = $password;
    }

    public function getPassword()
    {

        return $this->password . '<br>';
    }


    public function perfil()
    {

        $datos = [
            "
            <h2> Perfil usuario </h2>
            <p> Nombre: {$this->nombre}</p>
            <p> Apellido: {$this->apellido}</p>
            <p> Email: {$this->email}</p>
            <p> Password: {$this->password}</p>
            "

        ];

        return $datos;
    }

    


    
}
