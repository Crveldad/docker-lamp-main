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

    $id = $_GET["id"];
    $nombre = $_GET["nombre"];
    $rol = $_GET["rol"];
    $dificultad = $_GET["dificultad"];
    $descripcion = $_GET["descripcion"];

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="605editar.php" method=POST>
            <label for="nombre">Nombre: </label>
            <input type="text" name=nombre value="<?= $nombre ?>"><br>
            <label for="rol">Rol: </label>
            <input type="text" name=rol value="<?= $rol ?>"><br>
            <label for="dificultad">Dificultad: </label>
            <input type="text" name=dificultad value="<?= $dificultad ?>"><br>
            <label for="descripcion">Descripción: </label>
            <input type="text" name="descripcion" value="<?= $descripcion ?>"><br>
            <label for="id">ID: </label>
            <input type="number" name=id value="<?= $id ?>"><br>
            <input type="submit" value="enviar">
        </form>
    </body>
    </html>