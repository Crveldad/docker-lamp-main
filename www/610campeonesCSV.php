<?php

$heroes = "610campeones.csv";
$leer = fopen($heroes, "r");

$contenido = fread($leer, filesize($heroes));

//cerramos la conexión con el archivo
fclose($leer);

//su tamaño en Kilobytes , la fecha de su última modificación y el ID de usuario que creó el archivo.
echo $contenido;