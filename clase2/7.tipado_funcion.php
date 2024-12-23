<?php

declare(strict_types=1); // Tipado estricto

// int, string, float, bool, array, object, null
// function suma(int $a, int $b) {
//     return $a + $b;
// }

// echo suma(1, 3); // 3

function suma(int $a, int $b): int | float
{
    return ($a + $b) / 2; // 3.5
}

echo suma(4, 3); // 3