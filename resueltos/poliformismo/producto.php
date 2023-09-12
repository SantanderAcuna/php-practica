<?php

class Producto
{

    protected $descripcion = '';
    protected $precio = '';
    private $stock_minimo = 10;
    private $status = 'activo';


    public function __construct(string $descripcion, float $precio)
    {
        $this->descripcion = $descripcion;
        $this->precio = $precio;
    }

    public function setStockMinimmo($stock_minimo)
    {

        $this->stock_minimo = $stock_minimo;
    }



    public function getStockMinimmo()
    {

        return $this->stock_minimo;
    }




    public function setStatus($status)
    {

        $this->status = $status;
    }



    public function getStatus()
    {

        return $this->status;
    }



    public function setDescripcion($descripcion)
    {

        $this->descripcion = $descripcion;
    }



    public function getDescripcion()
    {

        return $this->descripcion;
    }



    public function setPrecio($precio)
    {

        $this->precio = $precio;
    }



    public function getPrecio()
    {

        return $this->precio;
    }


    public function getProducto(){

       echo  "<h2> Descripcion del producto </h2>";

        $datos = array(
            "         

            <p> Descripcion: {$this->descripcion} <br></p>
            <p> Precio: {$this->precio} <br></p>
            <p> Stock minimo: {$this->getStockMinimmo()} <br></p>
            <p> Status: {$this->getStatus()} <br></p>
            "

        );

        return $datos;
    }
}
