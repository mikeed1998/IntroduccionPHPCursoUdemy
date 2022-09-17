<?php include 'includes/header.php';

$nombreCliente = "    Michael Eduardo    ";
$nombreCliente2 = "Michael Eduardo";

// Conocer extension de un string
echo strlen($nombreCliente) . "<br>";
var_dump($nombreCliente);

// Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto) . "<br>";

// Convertirlo a mayusculas
echo strtoupper($nombreCliente);

// Convertirlo en minusculas
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1) === strtolower($mail2));
echo str_replace('Juan', 'J', $nombreCliente);

// Revisar si un string existe o no
echo strpos($nombreCliente2, "Michael") . "<br>";

$tipoCliente = "Premiun";

echo "El Cliente " . $nombreCliente2 . " es " . $tipoCliente . "<br>";

echo "El cliente {$nombreCliente2} es {$tipoCliente} <br>";

include 'includes/footer.php';


