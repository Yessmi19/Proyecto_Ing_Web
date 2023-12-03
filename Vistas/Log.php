<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body class="login">
    <div class="deco"></div>
    <header class="text-center mt-5">
        <h1 id="logintit">Panamá Bites</h1>
    </header>
    <section class="d-flex justify-content-center mt-5">
        <div class="cuadrolo rounded-4 border p-4">
            <a href="index.php">
                <img src="flechaderecha.png" alt="Icono de derecha" id="flecha">
            </a>
            <span class="text-center">Inicio de Sesión</span>
           
           <?php
            // Mostrar el mensaje de error si existe
            if(isset($_GET['error'])) {
                echo '<p style="color:red;">Credenciales incorrectas. Inténtalo de nuevo.</p>';
            }
            ?>
            
            <form action="login.php" method="post">
                <div class="mb-3 sc">
                    <label for="username" class="form-label">Nombre de Usuario:</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="mb-3 sc">
                    <label for="password" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
             
                <a href=""><p class="sin-subrayado">¿Olvidaste tu contraseña?</p></a>
                <a href="Registro.html"><p class="sin-subrayado">¿No tienes cuenta? ¡Crea una ahora!</p></a>
    
                <button type="submit" class="btn btn-primary color">Acceder</button>
            </form>
        </div>
    </section>
    <footer>
    </footer>
</body>
</html>
