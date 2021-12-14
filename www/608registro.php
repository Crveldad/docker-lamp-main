<?php

if(!isset($_GET['error'])) $error = "";
else $error = $_GET['error'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <form action="608nuevoUsuario.php" method="POST">
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="user">Usuario:</label><br>
        <input type="text" id="user" name="user" required><br>

        <label for="pass">Contraseña:</label><br>
        <input type="password" id="pass" name="pass" required><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>

</html>