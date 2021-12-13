<?php

$conexion = mysqli_connect("39524b286e90", "aandreo", "1234", "lol");

// COMPROBAMOS LA CONEXIÓN
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
$id = $_GET["id"];

// CONSULTA A LA BASE DE DATOS
$consulta = "DELETE FROM campeon WHERE id = $id";
$borrarCampeones = mysqli_query($conexion, $consulta);

header("Location: 606campeones.php");
