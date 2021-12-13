<?php

    $conexion = mysqli_connect("39524b286e90", "aandreo", "1234", "lol");

    // COMPROBAMOS LA CONEXIÓN
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $rol = $_POST["rol"];
    $dificultad = $_POST["dificultad"];
    $descripcion = $_POST["descripcion"];
    
    // CONSULTA A LA BASE DE DATOS
    $consulta = "UPDATE CAMPEON SET nombre = '$nombre', rol = '$rol', dificultad = '$dificultad', descripcion = '$descripcion' WHERE id = $id";
    mysqli_query($conexion, $consulta);
    
    header("Location: 606campeones.php");
    ?>