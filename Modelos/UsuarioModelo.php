<?php

include "Conexion.php";

function insertarDatosUsuarios() {
    global $connection;

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        if ($password != $cpassword && $password != "") {
            return "Las contraseñas no coinciden";
        } else {
            $query = "INSERT INTO registro(id, username, email, password) VALUES (NULL, '$username', '$email', '$password')";
            $result = mysqli_query($connection, $query);

            if ($result) {
                return "Registro exitoso";
            } else {
                return "Error al insertar en la base de datos: " . mysqli_error($connection);
            }
        }

    } 

    
}

// Llamamos a la función e imprimimos el resultado
$mensaje = insertarDatosUsuarios();
echo $mensaje;

// Redireccionamos después de realizar las operaciones necesarias
header("Location: Log.php");
exit();



?>


