<?php include 'includes/header.php';

// While
$i = 0;
while($i < 10) {
    echo $i . "<br>";
    $i++;
}

while($i < 10):
    echo $i . "<br>";
    $i++;
endwhile;

echo "<br>";

// Do While
$i = 0;
do {
    echo $i . "<br>";
    $i++;
}while($i < 10);

do {
    echo $i . "<br>";
    $i++;
}while($i < 10);

// For 
for($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

for($i = 0; $i < 10; $i++):
    echo $i . "<br>";
endfor;

// Ejercicio: FizzBuzz
/* 
    3 imprimir Fizz
    5 imprimir Buzz
    3 y 5 imprimir FIZZBUZZ
*/

/*
for($i = 0; $i < 1000; $i++) {
    if($i % 3 === 0 && $i % 5 === 0) { // $i % 15 === 0
        echo $i . " - FIZZBUZZ <br>";
    } else if($i % 3 === 0) {
        echo $i . " - Fizz <br>";
    } else if($i % 5 === 0) {
        echo $i . " - Buzz <br>";
    }
}
*/

// For Each
$clientes = array('Pedro', 'Juan', 'Karen');

foreach($clientes as $cliente) {
    echo $cliente . "<br>";
}

foreach($clientes as $cliente):
    echo $cliente . "<br>";
endforeach;

$cliente = [
    'nombre' => 'Michael',
    'saldo' => 200,
    'tipo' => 'premiun'
];

foreach($clientes as $key => $valor):
    echo $key . " - " . $valor . "<br>";
endforeach;




include 'includes/footer.php';