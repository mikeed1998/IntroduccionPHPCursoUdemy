<?php include 'includes/header.php';

// in_array - buscar elementos en un arreglo
$carrito = ['Tablet', 'Television', 'Computadora'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));

// Ordenar elementos de un arreglo
$numeros = array(1, 3, 4, 5, 1, 2);
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'premiun',
    'nombre' => 'Michael'
);

asort($cliente); // Ordena arreglo asociativo por los valores, primero números, despues de la a a la z
arsort($cliente); // Ordena arreglo asociativo por los valores, primero de la a z a la a y al final los números
ksort($cliente); // Ordena arreglo asociativo por llaves
krsort($cliente); // Ordena arreglo asociativo por llaves de la z a la a

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';

