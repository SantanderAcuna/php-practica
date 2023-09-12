<?php

include_once '../php-practica/resueltos/poliformismo/producto.php';

class Mueble extends Producto
{


    protected $color;
    protected $material;
    protected $marca;
    private $status = 'agotado';


    public function __construct(string $descripcion, float $precio, string $marca, string $color, string $material)
    {
        parent::__construct($descripcion, $precio);

        $this->color = $color;
        $this->material = $material;
        $this->marca = $marca;
    }


    public function setColor($color)
    {

        $this->color = $color;
    }

    
    public function getColor($color)
    {

        return  $this->color;
    }

    
    public function setMaterial($material)
    {

        $this->material = $material;
    }


    public function getMaterial($material)
    {

        return  $this->material;
    }


   

    public function getProducto()
    {

        echo  "<h2> Descripcion del mueble </h2>";

        $datos = array(
            "         
 
             <p> Descripcion: {$this->descripcion} <br></p>
             <p> Marca: {$this->marca} <br></p>
             <p> Precio: {$this->precio} <br></p>
             <p> Stock minimo: {$this->getStockMinimmo()} <br></p>
             <p> Status: {$this->status} <br></p>
             <p> Material: {$this->material} <br></p>
             <p> Color: {$this->color} <br></p>
         
             "

        );

        return $datos;
    }
}
