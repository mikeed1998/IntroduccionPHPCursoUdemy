<?php 
include 'includes/header.php';
require 'funciones.php';

// require - cuando tengamos funciones que sean criticas para la aplicacion, DB, etc..., si hay error truena toda la página
// include - cuando tengamos que incluir otros templates o plantillas, si hay error seguira funcionando el resto de la página
// require_once - igual que require pero si el archivo ya fue incluido simplemente lo ignora

iniciarApp();

echo "Despues del include" . "<br>";

include 'includes/footer.php';