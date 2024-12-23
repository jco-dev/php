<?php

// var_dump(PHP_EOL);

// Break
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . PHP_EOL;
}

// echo "Fin";

// Continue
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . "<br>";
}

// die; exit;
// var_dump(range(1, 10));
foreach (range(1, 10) as $i) {
    if ($i == 5) {
        exit; // die;
    }
    echo $i . "<br>";
}

echo "Fin";