<?php
    // ▒▒▒▒▒▒▒▒ Campeones ▒▒▒▒▒▒▒▒

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
    if($listaCampeones) {

        // RECORREMOS CADA RESULTADO QUE NOS DEVUELVE EL SERVIDOR
        foreach ($listaCampeones as $campeon) {
            echo "
                $campeon[id]<br>
                <a href='605editando.php?id=$campeon[id]&nombre=$campeon[nombre]&rol=$campeon[rol]&dificultad=$campeon[dificultad]&descripcion=$campeon[descripcion]'>Editar campeón</a><span>   |   </span><a onclick='return confirm(¿Estás seguro de eliminar el campeón?);' href='605borrando.php?id=$campeon[id]'>Borrar campeón</a><br>
                $campeon[nombre]<br>
                $campeon[rol]<br>
                $campeon[dificultad]<br>
                $campeon[descripcion]<br>
                <br><br>
            ";
        }
    }
?>