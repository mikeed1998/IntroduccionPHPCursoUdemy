<?php 
declare(strict_types=1);

include 'includes/header.php';

function usuarioAutenticado(bool $autenticado) :string {
    if($autenticado) {
        return "El usuario esta autenticado";
    } else {
        return "No autenticado";
    }
}

function usuarioAutenticado2(bool $autenticado) : string|int {
    if($autenticado) {
        return "El usuario esta autenticado";
    } else {
        return 20;
    }
}

function usuarioAutenticado3(bool $autenticado) : ?string {
    if($autenticado) {
        return "El usuario esta autenticado";
    } else {
        return 20;
    }
}


$usuario = usuarioAutenticado(true);
echo $usuario;

$usuario2 = usuarioAutenticado2(false);
echo $usuario2;

$usuario3 = usuarioAutenticado2(true);
echo $usuario3;

include 'includes/footer.php';