<?php

require_once './classUsuario.php';
require_once './classVendedor.php';
require_once './classComprador.php';




$per1 = new Comprador('Santander', 'acuña', 'joseacuna@gmail.com', 'jiso58545','Colombia', 'Santa marta', 'calle 2', 'Ondas');
$per1->setPassword('85154239');
print_r('<pre>');
print_r($per1->perfil());
print_r('</pre>');

$vend = new Vendedor('Jose', 'acuña', 'jose@hotmail.com','585858', 'inactivo');
$vend->setPassword('85154239');
print_r('<pre>');
print_r($vend->perfil());
print_r('</pre>');




