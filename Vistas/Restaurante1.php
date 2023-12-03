<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion del restaurante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Style.css">
</head>


<body>
    
    <main class="conta text-center">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <div class="d-flex align-items-center">
                <a href="Resultados.php">
                    <img src="../Imagenes/flechaderecha.png" alt="Icono de derecha" class="fle"><!-- Ícono de flecha de regreso -->
                </a>
                <h1 class="h1">Cafe de La Plaza</h1>
            </div>

            <a href="FormsReserva.php" class="btn btn-color" id="reservarBtn">Reservar</a>
        </div>
        <h4 class="h4">5 platos estrellas</h4>
        <section class="row justify-content-center">
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="../Imagenes/caffe.jpg" alt="Affogato">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Affogato</strong>
                </div>
                <a href="../Menú.pdf" class="btn btn-custom btn-sm download-button">Descargar Menú</a>
            </div>
            
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="../Imagenes/cafecho.jpg" alt="CafeChoc">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Capuccino saborizado</strong>
                </div>
            </div>
            
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="../Imagenes/dulce.jpg" alt="Dulce1">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Tiramisú</strong>
                </div>
            </div>
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="../Imagenes/dulce2.jpg" alt="Dulce2">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Macarons</strong>
                </div>
            </div>
            
            <div class="col col-md-4 col-lg-2 mb-3" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                <img class="img-fluid img-circular" src="../Imagenes/pan.webp" alt="Pan">
                <div class="image-caption">
                    <strong style="margin-top: auto;">Tostadas francesas</strong>
                </div>
            </div>
        </section> 
        <section class="info">
            <h3 class="text-left">Información del restaurante</h3>
            <div class="row">
                <div class="row align-items-start"></div>
                    <div class=" col-md-6 colorcrem">
                        <p><strong>Dirección:</strong> Calle de la Plaza, 123, Ciudad Imaginaria, País de los Sueños</p>
                        <p><strong>Ubicación:</strong> Colón</p>
                        <p><strong>Teléfono:</strong> +123-456-7890</p>
                    </div>
                    <div class="col-md-6 colorcrem">
                        <p><strong>Email:</strong> info@cafedelaplaza.com</p>
                        <p><strong>Sitio Web:</strong> <a href="https://www.instagram.com/cafeterialaplaza/" target="_blank">www.cafedelaplaza.com</a></p>
                        <p><strong>Horario:</strong> Lunes a Viernes: 7:00 AM - 8:00 PM<br>
                            Sábados y Domingos: 8:00 AM - 6:00 PM</p>
                    </div>
                </div>
            </div>
            <div class="info">
                <div class="row">
                    <div class="col-md-6 p-3">
                        <p>Tipo de Comida: Internacional y Panameña</p>
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