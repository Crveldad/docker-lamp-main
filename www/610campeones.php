<?php

$conexion = mysqli_connect("39524b286e90", "aandreo", "1234", "lol");

// COMPROBAMOS LA CONEXIÓN
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// CONSULTA A LA BASE DE DATOS
$consulta = "SELECT * FROM `campeon`";
$listaCampeones = mysqli_query($conexion, $consulta);

// COMPROBAMOS SI EL SERVIDOR NOS HA DEVUELTO RESULTADOS
if ($listaCampeones) {


    $heroes = "610campeones.csv";
    $escribir = fopen($heroes, "w");


    // RECORREMOS CADA RESULTADO QUE NOS DEVUELVE EL SERVIDOR
    foreach ($listaCampeones as $campeon) {
        fwrite(
            $heroes,
                "$campeon[id]<br>
                $campeon[nombre]<br>
                $campeon[rol]<br>
                $campeon[dificultad]<br>
                $campeon[descripcion]<br>"
        );
    }

    fclose($escribir);
}
