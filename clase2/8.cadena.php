<?php

$cadena ="abcdé";
echo $cadena[0]; // a
echo $cadena[4]; // b

echo strlen($cadena);

echo mb_strlen($cadena); // 5

echo strpos($cadena, "c");

 // https://www.php.net/manual/es/ref.strings.php

 $cadena = "hola mundo";

 echo ucwords($cadena); // Hola Mundo

