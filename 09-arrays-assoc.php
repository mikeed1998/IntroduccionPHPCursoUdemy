<?php include 'includes/header.php';

// Son el equivalente a los objetos en JavaScript

$cliente = [
    'nombre' => 'Michael',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premiun',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente['nombre']);
echo "</pre>";

echo $cliente['nombre'] . "<br>";
echo $cliente['saldo'] . "<br>";
echo $cliente['informacion']['tipo'] . "<br>";
echo $cliente['informacion']['disponible'] . "<br>";

// Agrega nueva propiedad, en caso de existir una con el mismo nombre la sobrescribe!!!
$cliente['codigo'] = 1234567890;

echo "<pre>";
var_dump($cliente);
echo "</pre>";



include 'includes/footer.php';