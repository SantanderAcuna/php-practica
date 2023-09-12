<?php

include_once './ClassOperacion.php';


$ope = new Operacion(10, 2);
$ope1 = new Operacion(5, 5);

$suma = $ope->getSuma();
echo $suma;
echo '<br>';
$resta = $ope->getResta();
echo $resta;
echo '<br>';
$multiplicacion = $ope->getMultiplicacion();
echo $multiplicacion;
echo '<br>';
$division = $ope->getDivison();
echo $division;

echo '<br>';
echo '<br>';

$suma = $ope1->getSuma();
echo $suma;
echo '<br>';
$resta = $ope1->getResta();
echo $resta;
echo '<br>';
$multiplicacion = $ope1->getMultiplicacion();
echo $multiplicacion;
echo '<br>';
$division = $ope1->getDivison();
echo $division;


