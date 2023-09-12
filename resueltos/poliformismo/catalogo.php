<?php


include_once '../php-practica/resueltos/poliformismo/producto.php';
include_once '../php-practica/resueltos/poliformismo/mesa.php';
include_once '../php-practica/resueltos/poliformismo/mueble.php';



$producto = new Producto('Lo mejor de lo mejor', 5000);
$producto->getProducto();
print_r('<pre>');
print_r($producto);
print_r('</pre>');



$mueble = new Mueble('Mesa de melanina caoba',5000,'top50','caoba','melanina');
$mueble->getProducto();
print_r('<pre>');
print_r($mueble);
print_r('</pre>');



$mesa = new Mesa('Mesa new',1200,'new','verde','melaaanina','120cm');
$mesa->setForma('triangular');
$mesa->getProducto();
print_r('<pre>');
print_r($mesa);
print_r('</pre>');