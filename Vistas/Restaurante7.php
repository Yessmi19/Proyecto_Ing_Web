<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Informacion del restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css">
    

</head>
<body class="info"> 
    <div class="topbar">
        <div class="user-container">
            <img class="imagen-usuario" src="Male_User.png" alt="">
            <?php
                session_start(); // Inicia la sesión si no se ha iniciado
                if (isset($_SESSION['username'])) {
                    echo '<h4 class="nombre-usuario unselectable-text">' . $_SESSION['username'] . '</h4>';
                } else {
                    echo '<h4 class="nombre-usuario unselectable-text">Nombre usuario</h4>';
                }
                ?>
            <img class="dropdown-usuario" src="Arrow_drop_down.png" alt="">
        </div>
    </div>
     <div class="dropdown-menu">
    <ul>
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start(); // Inicia la sesión solo si no está activa
        }
        

        // Verifica si el usuario ha iniciado sesión
        if (isset($_SESSION['username'])) {
            // Usuario ha iniciado sesión
            echo '<li><a class="usuario-font" href="ver_reservas.php">Ver reservas</a></li>';
            echo '<li><a class="usuario-font" href="cerrar_sesion.php">Cerrar sesión</a></li>';
        } else {
            // Usuario no ha iniciado sesión
            echo '<li><a class="usuario-font" href="Log.php">Iniciar sesión</a></li>';
            echo '<li><a class="usuario-font" href="Registro.html">Registrarse</a></li>';
        }
        ?>
    </ul>
</div>
    <main class="conta text-center">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <div class="d-flex align-items-center">
                <a href="resultados.php">
                    <img src="flechaderecha.png" alt="Icono de derecha" class="fle"><!-- Ícono de flecha de regreso -->
                </a>
                <h1 class="h1">Delicious Bistro</h1>
            </div>
            <a href="forreserva.php?id=7" class="btn btn-color" id="reservarBtn">Reservar</a>
        </div>
        <h4 class="h4">5 platos estrellas</h4>
        <dsection class="row justify-content-center">
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="Gourmet Burger.jpg" alt="Affogato">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Gourmet Burger</strong>
                </div>
                <a href="Menú.pdf" class="btn btn-custom btn-sm download-button">Descargar Menú</a>
            </div>
            
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="Seafood Paella.jpg" alt="Paella">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Seafood Paella</strong>
                </div>
            </div>
            
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="dulce.jpg" alt="Imagen 3">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Tiramisú</strong>
                </div>
            </div>
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="Sushi Platter.jpg" alt="Sushi">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Sushi Platter</strong>
                </div>
            </div>
            
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="Chocolate Fondue.jpg" alt="Imagen 5">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Chocolate Fondue</strong>
                </div>
            </div>
        </section> 
        <section class="info">
            <h3 class="text-left">Información del restaurante</h3>
            <div class="row">
                <div class="row align-items-start"></div>
                    <div class=" col-md-6 colorcrem ">
                        <p><strong>Dirección:</strong> C123 Main Street, Foodville, Culinary Country</p>
                        <p><strong>Ubicación:</strong> Herrera</p>
                        <p><strong>Teléfono:</strong> +123-467 2788</p>
                    </div>
                    <div class="col-md-6 colorcrem">
                        <p><strong>Email:</strong> info@deliciousbistro.com</p>
                        <p><strong>Website:</strong> <a href="https://www.deliciousbistro.com" target="_blank">www.deliciousbistro.com</a></p>
                        <p><strong>Horario:</strong> Monday to Friday: 11:00 AM - 9:00 PM<br>
                         Saturdays and Sundays: 10:00 AM - 7:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="info">
                <div class="row">
                    <div class="col-md-6 p-3">
                        <p>Tipo de Comida: Internacional</p>
                        <p>Tipo de Restaurante: Cafetería</p>
                        <p>Categoría de Costo: $$ (Regular)</p>
                    </div>
                    <div class="col-md-6 p-3">
                        <ul>
                            <p>Facilidades:</p><li>Sillas de bebé disponibles para familias con niños pequeños.</li>
                            <li>Accesible para personas con discapacidad móvil con rampas de acceso.</li>
                            <li>Amplio estacionamiento en las cercanías.</li>
                        </ul>
                    </div>
                </div>
        </div>
    </section>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>