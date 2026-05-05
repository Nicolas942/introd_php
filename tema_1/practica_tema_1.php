<?php
    // Esto es un comentario de una linea
    # Esto también es un comentario

    /*
        Este es un bloque 
        de múlltiples líneas
    */

    // Variables    
    $nombre = "Juan";
    $edad = 20;

    echo $nombre; // Imprime: Juan

    //Constantes
    define("PI", 3.1416);
    const SALUDO = "Hola";
    echo "<br>" . PI; // Imprime: 3.1416

    // Arrays
    $frutas = ["Manzana", "Banano", "Uva"];

    echo "<br>" . $frutas[0]; // Imprime: Manzana
    echo "<br>" . $frutas[2]; // Imprime: Uva

    // Arrays asociatvos
    $persona = [
        "nombre" => "Ana",
        "edad" => 25,
        "ciudad" => "Bogotá"
    ];

    echo "<br>" . $persona["nombre"]; // Imrime: Ana
?>