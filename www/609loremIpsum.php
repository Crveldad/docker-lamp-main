<?php

$lorem = "609loremIpsum.txt";
$leer = fopen($lorem, "r");

$contenido = fread($leer, filesize($lorem));
$datos = stat($lorem);

//cerramos la conexión con el archivo
fclose($leer);

//su tamaño en Kilobytes , la fecha de su última modificación y el ID de usuario que creó el archivo.
echo "$contenido<br>";
echo "Su tamaño en Kilobytes: " . ($datos[7] * 0.001) . "<br>";
echo "Su última modificiación: " . (date('c', $datos[9])) . "<br>";
echo "ID del creador: " . $datos[4] . "<br>";
