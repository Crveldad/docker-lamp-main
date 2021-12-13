<?php

$conexion = null;

try {
    //$conexion = new PDO(DSN, USUARIO, PASSWORD);
    $conexion = new PDO('mysql:host=e09e2542aa70; dbname=lol', 'aandreo', '1234');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "select * from campeon";

    $sentencia = $conexion->prepare($sql);
    $sentencia->setFetchMode(PDO::FETCH_ASSOC);
    $sentencia->execute();

    while ($fila = $sentencia->fetch()) {
        echo "ID:" . $fila["id"] . "<br />";
        echo "Nombre:" . $fila["nombre"] . "<br />";
        echo "Rol:" . $fila["rol"] . "<br />";
        echo "Dificultad:" . $fila["dificultad"] . "<br />";
        echo "Descripción:" . $fila["descripcion"] . "<br />";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$conexion = null;
