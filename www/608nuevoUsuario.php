<?php
include_once "conexion.php";

$conexion = null;

if (!isset($_POST["enviar"])) {
    $error = "Error de envío.";
    header("Location: 608registro.php?error=$error");
}

try {
    $nombre = $_POST['name'];
    $usuario = $_POST['user'];
    $password = $_POST['pass'];
    $email = $_POST['email'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("No es un email válido");
        header("Location: 608registro.php");
    } else {


        $conexion = new PDO(DSN, USUARIO, PASSWORD);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //$sql = "INSERT INTO `login` (`id`, `nombre`, `usuario`, `password`, `email`) VALUES ('1', 'Alejandro', 'aandreo', '1234', 'crveldad@hotmail.com'), ('2', 'Pepe', 'pepejava', '1234', 'pepe@java.es'), ('3', 'Patricia', 'patrient', '1234', 'patri@entornos.net')";
        $sql = "INSERT INTO `login` (null, `nombre`, `usuario`, `password`, `email`) VALUES (null, :nombre, :usuario, `:password`, :email)";

        $sentencia = $conexion->prepare($sql);
        $sentencia->bindParam(":nombre", $nombre);
        $sentencia->bindParam(":usuario", $usuario);
        $sentencia->bindParam(":password", $password);
        $sentencia->bindParam(":email", $email);

        $isOk = $sentencia->execute([
            //al ser null la id, no hace falta ponerla
            "nombre" => $nombre,
            "usuario" => $usuario,
            "password" => password_hash($password, PASSWORD_DEFAULT),
            "email" => $email
        ]);

        $idGenerado = $conexion->lastInsertId();

        echo "El usuario" . $usuario . " ha sido introducido en el sistema con la contraseña" . $password . "<br>" . $idGenerado;
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}

$conexion = null;
