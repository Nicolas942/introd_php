<?php
    //Dado un rango de números enteros obtener la cantidad de números pares que contiene.

    $inicio = 1;
    $fin = 20;

    $contador = 0;

    for ($i = $inicio; $i <= $fin; $i++) {
        if ($i % 2 == 0) {
            $contador++;
        }
    }

    echo "Cantidad de números pares: " . $contador;
?>


