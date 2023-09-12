<?php


include_once './poo/classUsuario.php';
include_once './poo/classComprador.php';
include_once './poo/classVendedor.php';


$per1 = new Comprador('Santander', 'acuña', 'joseacuna@gmail.com', 'jiso58545','Colombia', 'Santa marta', 'calle 2', 'Ondas');
$per1->setPassword('85154239');

print_r($per1->perfil()) . "<br><br>";

echo '<br><br><br><br><br><br>-------------------------------------------------------------------------------------------<br><br><br><br><br><br>';

$vend = new Vendedor('Jose', 'acuña', 'jose@hotmail.com','585858', 'inactivo');
$vend->setPassword('85154239');
print_r($vend->perfil());

echo '<br><br><br><br><br><br>-------------------------------------------------------------------------------------------<br><br><br><br><br><br>';

$user = new Usuario('Usuario', 'nuevo', 'user@gmail.com','52565852');
$user->setPassword('85154239');
print_r($user->perfil());
