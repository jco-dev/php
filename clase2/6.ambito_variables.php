<?php

$nombre = "Juan";

// function test()
// {
//     $nombre = "Maria";
//     echo $nombre;
// }
// test();

// echo $nombre;

// function saludo()
// {
//     global $nombre;
//     echo "Hola $nombre";
// }

// saludo();

// $a = 2;
// $b = 3;

// function test($numero) // &$numero
// {
//     $numero = $numero * 10;
// }

// test($a);
// echo $a;

// echo "<br>";
// test($b);
// echo $b;

//argumentos fijo
// function valoracion($nombre, $nota = 50)
// {
//     echo "La nota de $nombre es $nota";
// }

// valoracion("Curso PHP");

// valoracion("Curso JAVASCRIPT", 100); // ARGUMENTO FIJOS

// NO SE SABE CUANTOS ARGUMENTOS SE VAN A PASAR
function concatenar(...$palabras) 
{
    // var_dump($palabras);
    $frase = "";
    foreach ($palabras as $palabra) {
        $frase .= $palabra . " ";
    }
    echo $frase;
}

// concatenar("Hola", "como", "estas", "tu" , "yo", "bien");
concatenar("Hola", "como", "estas", "tu" , "yo", "bien", "y", "tu");



