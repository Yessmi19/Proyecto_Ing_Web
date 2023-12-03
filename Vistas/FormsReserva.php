<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Reserva</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Style.css">
    

</head>
<?php
// Archivo forreservas.php

// Recupera el ID de la URL
$id = isset($_GET["id"]) ? $_GET["id"] : null;

// Ahora $id contiene el valor del ID que viene de restaurante1.php
?>

<body> 


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
    <div class="conta text-center">
        <div class="d-flex justify-content-between align-items-center mb-1">
            <div class="d-flex align-items-center">
                    <a href="javascript:history.back()">
                    <img src="flechaderecha.png" alt="Icono de derecha" class="fle"><!-- Ícono de flecha de regreso -->
                </a>
                <h1 class="h1">Reservar</h1>
            </div>
        </div>
        </div>
        <div class="Reser">
    <h1 class="text-center">Bienvenido a nuestra página de reservas</h1>
    <p class="par">
        Aquí podrás realizar reservas para una amplia gama de lugares. Estamos aquí para ayudarte a planificar tus experiencias culinarias de manera conveniente y sin complicaciones.
    </p>
</div>

    <form action="reservacion.php" method="post" class="var">
        <div class=" mt-5">
        <div class="form-groups justify-content-center">
        <div class="form-group col-md-6 custom-container">
        <label class="fecha">Fecha:</label>
            <input type="date" class="form-control small-input" id="date" name="date">

        <div class="form-group">
            <label style="padding-top: 20px" for="hora">Hora:</label>
            <input type="time" class="form-control small-input" id="time" name="time">

        <div class="form-group">
            <p style="padding-top: 20px; margin-bottom: 0px"> Cantidad de Personas:</p>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="cantidadPersonas" name="cantidadPersonas" value="1">
            <label class="form-check-label" for=cantidadPersona">1</label>
        </div>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="cantidadPersonas" name="cantidadPersonas" value="2">
            <label class="form-check-label" for="cantidadPersona">2</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" id="cantidadPersonas" name="cantidadPersonas" value="3">
            <label class="form-check-label" for="cantidadPersona">3</label>
        </div>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="cantidadPersonas" name="cantidadPersonas" value="4">
            <label class="form-check-label" for="cantidadPersona">4</label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="cantidadPersonas" name="cantidadPersonas" value="5">
            <label class="form-check-label" for="cantidadPersona">5</label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="cantidadPersonas" name="cantidadPersonas" value="6">
            <label class="form-check-label" for="cantidadPersona">6</label>
            </div>
            <div class="form-group">
            <p style="padding-top: 20px; margin-bottom: 0px">Facilidades:</p>

            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Sillas para niños" id="facilidades" name="facilidades[]">
            <label class="form-check-label" for="facilidades">
            Sillas para niños
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Reservar Parking" id="facilidades" name="facilidades[]">
            <label class="form-check-label" for="facilidades">
            Reservar Parking
            </label>
            </div>
            <div style="padding-right: 0px" class="form-check">
            <input class="form-check-input" type="checkbox" value="Asiento para Discapacitados" id="facilidades" name="facilidades[]">
            <label class="form-check-label" for="facilidades">
            Asiento para Discapacitados
            </label>

            </div>
            <div class="form-groups mb-3">
            <label style="padding-top: 20px; margin-bottom: 0px; margin-right: 50px;" for="exampleFormControlTextarea1" class="form-label">Comentarios Adicionales</label>
            <small class="form-text text-muted">(Opcional)</small>
            <textarea class="form-controls" id="comentario" name="comentario" rows="3"></textarea>
            </div>

            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
            </div>
            <div class="text-center">
            <input type="submit" class="btn btn-color" value="Enviar" name="submit">

            </div>
            </div>
            </div>
                        
        
        </div>
    </div>


            </form>
        </div>
        </div>




    </form>




<div class="footer">
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
       
    <script>
    // Función para mostrar la ventana modal
    function mostrarVentanaModal() {
        document.getElementById('window-notice').style.display = 'block';
    }

    // Agrega un manejador de eventos al botón "Enviar"
    document.getElementById('enviarBtn').addEventListener('click', function() {
        // Llama a la función para mostrar la ventana modal al hacer clic en el botón "Enviar"
        mostrarVentanaModal();
    });

    // Función para cerrar la ventana modal
    function cerrarVentanaModal() {
        document.getElementById('window-notice').style.display = 'none';
    }
</script>

        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/moment@2.29.1/min/moment.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4@5.39.0/build/js/tempusdominus-bootstrap-4.min.js"></script>
        

</body>
</html>