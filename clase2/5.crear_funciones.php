<?php

// 9! = 9*8*7*6*5*4*3*2*1 = 362880
// 8! = 8*7*6*5*4*3*2*1 = 40320
// 7! = 7*6*5*4*3*2*1 = 5040

// function factorial($numero){
//     $factorial = 1;
//     for ($i = $numero; $i > 0; $i--) {
//         $factorial *= $i; // $factorial = $factorial * $i;
//     }
    
//     echo "El factorial de $numero es $factorial <br>";
// }

function factorial($numero){
    $factorial = 1;
    for ($i = $numero; $i > 0; $i--) {
        $factorial *= $i; // $factorial = $factorial * $i;
    }
    
    return $factorial;
}

// $resultado = factorial(9);

echo factorial(4);