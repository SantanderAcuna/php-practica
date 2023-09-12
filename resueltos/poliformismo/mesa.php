<?php

include_once '../php-practica/resueltos/poliformismo/mueble.php';

final class Mesa extends Mueble
{


    protected $tamaño;
    private $forma;



    public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material, string $tamaño)
    {
        parent::__construct($descripcion, $precio, $marca, $color, $material);

        $this->tamaño = $tamaño;
    }


    public function setTamaño($tamaño)
    {

        $this->tamaño = $tamaño;
    }


    public function getTamaño($tamaño)
    {

        return  $this->tamaño;
    }


    public function setForma($forma)
    {

        $this->forma = $forma;
    }


    public function getForma()
    {

        return  $this->forma;
    }




    public function getProducto()
    {

        echo  "<h2> Descripcion de la mesa </h2>";

        $datos = array(
            "         
 
             <p> Descripcion: {$this->descripcion} <br></p>
             <p> Precio: {$this->precio} <br></p>
             <p> Stock minimo: {$this->getStockMinimmo()} <br></p>
             <p> Status: {$this->getStatus()} <br></p>
             <p> Material: {$this->material} <br></p>
             <p> Color: {$this->color} <br></p>
             <p> Tamaño: {$this->tamaño} <br></p>
             <p> Forma: {$this->getForma()} <br></p>
         
             "

        );

        return $datos;
    }
}
