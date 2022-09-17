<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

if($autenticado && $admin) {
    echo "Usuario autenticado correctamente <br>";
} else {
    echo "Usuario no autenticado, inicia sesión <br>";
}

if($autenticado && $admin):
    echo "Usuario autenticado correctamente <br>";
    // elseif:
else:
    echo "Usuario no autenticado, inicia sesión <br>";
endif;

// If anidados...
$cliente = [
    'nombre' => 'Michael',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premiun'
    ]
];

if(!empty($cliente)) {
    echo "El arreglo de cliente no esta vacio. <br>";

    if($cliente['saldo'] > 0) {
        echo "El saldo del cliente esta disponible <br>";
    } else {
        echo "No hay saldo <br>";
    }
}

// else if
if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo. <br>";
} else if($cliente['informacion']['tipo'] === 'Premiun') {
    echo "El cliente es Premiun <br>";
} else {
    echo "No hay cliente definido o no tiene saldo o no es Premiun";
}

// Switch
echo "<br>";
$tecnologia = 'PHP';

switch($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje<br>";
        break;
    case 'JavaScript':
        echo "JavaScript, un excelente lenguaje<br>";
        break;
    case 'HTML':
        echo "HTML...<br>";
        break;
    default:
        echo "Algún lenguaje que no se cual es<br>";
        break;
}

include 'includes/footer.php';