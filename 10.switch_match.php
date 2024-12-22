<?php

$dia = 1;

// if($dia == 1){
//     echo "Lunes";
// }elseif($dia == 2){
//     echo "Martes";
// }elseif($dia == 3){
//     echo "Miercoles";
// }else{
//     echo "No es un día de la semana";
// }

//switch
echo "<br>";
switch($dia){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    default:
        echo "No es un día de la semana";
        break;
}

// match
echo "<br>";
echo match($dia){
    1 => "Lunes",
    2 => "Martes",
    3 => "Miercoles",
    default => "No es un día de la semana"
};