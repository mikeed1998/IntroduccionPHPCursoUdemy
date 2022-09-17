<?php include 'includes/header.php';

// No existe diferencia entre las declaraciones, son solo estilos para usarlos
$carrito = ['Tablet', 'Television', 'Computadora']; // Se usa mas en Laravel
// $carrito = array();

// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo  $carrito[1] . "<br>";

// Añade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto...';

// Añadir un elemento al final del arreglo
array_push($carrito, 'Audifonos');

// Añadir un elemento al inicio del arreglo
array_unshift($carrito, 'Smartwatch');

echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente 1', 'Cliente 2', 'Cliente 3'); // Se usa mas en WordPress
echo "<pre>";
var_dump($carrito);
echo "</pre>";

echo  $carrito[1] . "<br>";


include 'includes/footer.php';