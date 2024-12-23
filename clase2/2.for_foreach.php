<?php

// for($i = 1; $i <= 10; $i++) {
//     echo $i . "<br>";
// }

// *
// **
// ***
// ****

// $filas = 10;
// for($i = 1; $i <= $filas; $i++) {
//     for($j = 1; $j <= $i; $j++) {
//         echo "*";
//     }
//     echo "<br>";
// }

// foreach

$nombres = array("Juan", "Pedro", "Luis", "Carlos");
foreach($nombres as $indice => $nombre) { // =>  ===
    echo $nombre . " - " . $indice . "<br>";
}

for($i = 0; $i < count($nombres); $i++) {
    echo $nombres[$i] . "<br>";
}
