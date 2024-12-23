<?php

$personas = [
    [
        'nombre' => 'Juan',
        'edad' => 20,
    ],
    [
        'nombre' => 'Pedro',
        'edad' => 30,
    ],
    [
        'nombre' => 'Carlos',
        'edad' => 40,
    ],
];

// $personas[0]['direccion'] = [
//     'pais' => 'Argentina',
//     'ciudad' => 'Buenos Aires',
// ];

// echo "<pre>";
// var_dump($personas[0]['direccion']['ciudad']);

// foreach ($personas as $persona) {
//     echo $persona['nombre'] . ' - ' . $persona['edad'] . ' años' . PHP_EOL;
//     // echo $persona['direccion']['ciudad'] . ', ' . $persona['direccion']['pais'] . PHP_EOL;
//     echo "<br>";
// }

// eliminar un elemento de un array
unset($personas);
echo "<pre>";
var_dump($personas);

// in_array
// array_search
// array_keys
// array_values