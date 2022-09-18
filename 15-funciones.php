<?php 
declare(strict_types=1);

include 'includes/header.php';

function sumar(int $numero1 = 0, int $numero2 = 0) {
    echo $numero1 . "<br>";
    echo $numero2 . "<br>";
    echo $numero1 + $numero2 . "<br>";
}

sumar(10, 20);
echo "<br>";

sumar(numero2: 10, numero1: 20); // Named Parameters
echo "<br>";

include 'includes/footer.php';