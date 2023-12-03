<?php
session_start();


// Verifica si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    // Redirige a la página de inicio de sesión si el usuario no está autenticado
    header("Location: Log.php");
    exit();
}

// ID del usuario actual
$usuario = $_SESSION['username'];

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

// Consulta para obtener las reservas del usuario actual
$sql = "SELECT * FROM reserva WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

// Cierra la conexión después de obtener los resultados
// Mueve esta línea aquí

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver reservas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
    <header class="topbar">
        <div class="user-container">
            <img class="imagen-usuario" src="Male_User.png" alt="">
            <h4 class="nombre-usuario unselectable-text"><?php echo $usuario; ?></h4>
        </div>
    </header>
    <main class="conta text-center">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <div class="d-flex align-items-center">
                <a href="index.php">
                    <img src="flechaderecha.png" alt="Icono de derecha" class="fle">
                </a>
                <h1 class="h1">Detalles de reservas realizadas</h1>
            </div>
        </div>
        <div class="row">
            <?php
            // Itera sobre las reservas obtenidas
            while ($row = $result->fetch_assoc()) {
                echo '<div class="col-md-6 col-sm-12 colocrem">';
                echo '<p><br>Nombre del Restaurante: ' . $row['restaurante'] . '</p>';
                echo '<p>Fecha: ' . $row['date'] . '</p>';
                echo '<p>Hora: ' . $row['time'] . '</p>';
                echo '<p>Cantidad de Personas: ' . $row['cantidadPersonas'] . '</p>';
                echo '<p>Facilidades Escogidas: ' . $row['facilidades'] . '</p>';
                echo '<p>Comentarios: ' . $row['comentarios'] . '</p>';
                // Puedes agregar más líneas según las columnas que tengas en tu tabla

                // Aquí también puedes agregar botones de "Modificar" y "Cancelar" para cada reserva
                echo '<button class="btn-color" onclick="modificarReserva(' . $row['id'] . ')">Modificar</button>';
                echo '<button class="btn-color" onclick="cancelarReserva(' . $row['id'] . ')">Cancelar</button>';

                echo '</div>';
            }
            ?>
        </div>
    </main>
    <footer class="footer">
        <div class="social">
            <h1 class="panama">Panama Bites</h1>
            <div>
                <img src="Facebook.png" alt="">
                <img src="Instagram.png" alt="">
                <img src="Gmail.png" alt="">
            </div>
        </div>
        <div class="etc">
            <h6>Política de privacidad</h6>
            <h6>Política de cookies</h6>
            <h6>Condiciones generales</h6>
        </div>
    </footer>
    <script>
        function modificarReserva(reservaId) {
            // Lógica para redirigir al formulario de modificación
            // Puedes usar window.location.href = "url_del_formulario_modificacion?id=" + reservaId;
        }

        function cancelarReserva(reservaId) {
            // Lógica para cancelar la reserva
            // Puedes usar una llamada AJAX para enviar la solicitud al servidor
            alert("Reserva cancelada");
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
// Cierra la conexión después de mostrar los resultados
$conn->close();
?>
