<?php

// while
$numero = 1;
while($numero <= 10){
    echo $numero . "<br>";
    $numero++;
}

// DOWHILE

$numero = 1;
do{
    echo $numero . "<br>";
    $numero++;
}while($numero <= 10);

//  BASE 8 exponente 2
echo 8**2;

$base = 8;
$exponente = 2;

$resultado = 1;

while($exponente > 0){
    $resultado *= $base;  // $resultado = $resultado * $base
    $exponente--;
}

echo "<br>Resultado: " . $resultado;