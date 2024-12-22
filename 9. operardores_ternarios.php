<?php

// Operador ternário
$edad = 20;
echo ($edad >= 18) ? 'Mayor de edad' : 'Menor de edad';

if($b > $a){
    echo "Ejemplo 2: <br>";
}else{

}

// ternario
echo  ($b > $a)?"Ejemplo 2: <br>":"";

$a = 5;
$b = 3;

$valor = ($a > $b) ? "mayor": ($a < $b ? "menor" : "igual");

if ($a > $b){
    $valor = "mayor";
}elseif($a < $b){
    $valor = "menor";
}else{
    $valor = "igual";
}