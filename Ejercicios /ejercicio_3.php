<?php

// Mostrar las dos primeras letras de los dias de la semana, usando for y un array asociativo.

$dias = [
    "lu" => "Lunes",
    "ma" => "Martes",
    "mi" => "Miercoles",
    "ju" => "Jueves",
    "vi" => "Viernes",
    "sa" => "Sabado",
    "do" => "Domingo"
];

$claves = array_keys($dias);

for ($i = 0; $i < count($claves); $i++) {
    echo $claves[$i] . "<br>";
}
?>