<?php
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'registro_pabi');

if (!$connection) {
    die("Error de conexión: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM registro WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) == 1) {
        // El usuario ha iniciado sesión correctamente
        // Puedes redirigirlo a otra página o realizar otras acciones
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit();
    } else {
        // Las credenciales son incorrectas, redirige de nuevo al formulario con un mensaje de error
        header("Location: Log.php?error=1");
        exit();
    }
}

mysqli_close($connection);
?>
