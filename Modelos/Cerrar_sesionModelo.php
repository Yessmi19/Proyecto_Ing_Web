<?php
session_start(); // Inicia la sesión

// Elimina todas las variables de sesión
$_SESSION = array();

// Destruye la sesión
session_destroy();

// Redirige al usuario a la página de inicio de sesión o a la página principal
header("Location: Log.php");
exit();
?>
