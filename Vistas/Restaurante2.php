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
            <img class="imagen-usuario" src="../Imagenes/Male_User" alt="">
            <?php
                session_start(); // Inicia la sesión si no se ha iniciado
                if (isset($_SESSION['username'])) {
                    echo '<h4 class="nombre-usuario unselectable-text">' . $_SESSION['username'] . '</h4>';
                } else {
                    echo '<h4 class="nombre-usuario unselectable-text">Nombre usuario</h4>';
                }
                ?>
            <img class="dropdown-usuario" src="../Imagenes/Arrow_drop_down.png" alt="">
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
                <a href="Resultados.php">
                    <img src="../Imagenes/flechaderecha" alt="Icono de derecha" class="fle"><!-- Ícono de flecha de regreso -->
                </a>
                <h1 class="h1">El Rancho</h1>
            </div>
        </div>
        <h4 class="h4">5 platos estrellas</h4>
        <section class="row justify-content-center">
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="../Imagenes/sopadelenteja.jpg" alt="Sopa de lentejas">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Sopa de Lenteja</strong>
                </div>
                <a href="../Menú.pdf" class="btn btn-custom btn-sm download-button">Descargar Menú</a>
            </div>
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="../Imagenes/sancocho.jpg" alt="Sancocho de pollo">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Sancocho</strong>
                </div>
            </div>
            
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="../Imagenes/desayunotradicional.jpg" alt="Desayuno Tradi">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Desayuno tradicional</strong>
                </div>
            </div>
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="../Imagenes/Tocinete.jpg" alt="Tocinete">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Tocinete</strong>
                </div>
            </div>
            
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="../Imagenes/cafeconleche.jpg" alt="Cafe con leche">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Cafe con leche</strong>
                </div>
            </div>
        </section> 
        <section class="info">
            <h3 class="text-left">Información del restaurante</h3>
            <div class="row">
                <div class="row align-items-start"></div>
                    <div class=" col-md-6 colorcrem ">
                        <p><strong>Dirección:</strong>Calle Frasci #123, Herrera, Panamá </p>
                        <p><strong>Ubicación:</strong> Coclé</p>
                        <p><strong>Teléfono:</strong> +134 8782 432</p>
                    </div>
                    <div class="col-md-6 colorcrem">
                        <p><strong>Email:</strong> info@cafedelaplaza.com</p>
                        <p><strong>Sitio Web:</strong> <a href="https://www.instagram.com/cafeterialaplaza/" target="_blank">www.fondaelrancho</a></p>
                        <p><strong>Horario:</strong> Lunes a Viernes: 7:00 AM -4:00 PM<br>
                            Sábados y Domingos: 8:00 AM - 3:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="info">
                <div class="row">
                    <div class="col-md-6 p-3">
                        <p>Tipo de Comida: Panameña</p>
                        <p>Tipo de Restaurante: Fonda</p>
                        <p>Categoría de Costo: $$ (Regular)</p>
                    </div>
                    <div class="col-md-6 p-3">
                        <ul>
                            <p>Facilidades:</p><li>Amplio estacionamiento en las cercanías.</li>
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
                    <img src="../Imagenes/Instagram.png" alt="">
                    <img src="../Imagenes/Gmail.png" alt="">
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