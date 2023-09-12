<?php

class Operacion
{

    public $cantidadUno = 0;
    public $cantidadDos = 0;
    public $resultado = 0;


    public function __construct($cantidadUno, $cantidadDos)
    {
        $this->cantidadUno = $cantidadUno;
        $this->cantidadDos = $cantidadDos;
    }


    public function getResta()
    {

        $this->resultado = 'La resta es:  ' . $this->cantidadUno - $this->cantidadDos;

        return $this->resultado;
    }

    public function getSuma()
    {

        $this->resultado = 'La suma es:  ' . $this->cantidadUno + $this->cantidadDos;

        return $this->resultado;
    }

    public function getMultiplicacion()
    {

        $this->resultado = 'La multiplicacion es:  ' . $this->cantidadUno * $this->cantidadDos;

        return $this->resultado;
    }

    public function getDivison()
    {

        $this->resultado = 'La divison es:  ' . round($this->cantidadUno / $this->cantidadDos, 2);

        return $this->resultado;
    }

}
