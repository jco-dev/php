<?php

define('PI', 3.1416);
define('USUARIO_ADMIN', 'Admin');

const NOMBRE = 'Juan';

define('LENGUAJES', ['PHP', 'JS', 'Python']);

if(defined('USUARIO_ADMINJJ'))
    echo 'La constante USUARIO_ADMIN ya está definida';

// CONSTANTES PREDEFINIDAS
echo PHP_VERSION;
echo "<br>";
echo PHP_OS;
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;

echo PHP_EXTENSION_DIR;


