<?php
// Archivo reservacion.php
session_start();

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $usuario = isset($_SESSION["username"]) ? $_SESSION["username"] : "";
    $date = $_POST["date"];
    $time = $_POST["time"];
    $cantidadPersonas = $_POST["cantidadPersonas"];
    $facilidades = isset($_POST["facilidades"]) ? implode(", ", $_POST["facilidades"]) : "";
    $comentario = isset($_POST["comentario"]) ? $_POST["comentario"] : "";
    $id = $_POST["id"]; // Recupera el valor del ID

    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registro_pabi";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Consulta para obtener el nombre desde la tabla 'busqueda'
    $stmt = $conn->prepare("SELECT name FROM busqueda WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($restaurante);
    $stmt->fetch();
    $stmt->close();

    // Consulta para insertar los datos en la tabla 'reserva'
    $sql = "INSERT INTO reserva (date, time, cantidadPersonas, facilidades, comentarios, usuario, restaurante) 
            VALUES ('$date', '$time', '$cantidadPersonas', '$facilidades', '$comentario', '$usuario', ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $restaurante); // Vincula el parámetro
    $stmt->execute();
    $stmt->close();

    // Cierra la conexión
    $conn->close();

    header("Location: index.php");
    exit();
}
?>
