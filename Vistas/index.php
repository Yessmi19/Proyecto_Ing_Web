<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>Inicio</title>
</head>

<body>
    <header class="topbar">
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
                <img class="dropdown-usuario" src="../Imagenes/Arrow_drop_down.png" alt="">
            </div>
    </header>
    
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

    <div class="content">
        <nav>
            <h1 class="titulo"><a href="index.php">Panama Bites</a></h1>
            <h2 class="frase">Encuéntralos aquí!</h2>
            <form action="resultados.php" method="post">
                <div class="search-bar">
                    <input style="padding-left: 1rem;" type="text" name="searchbar" id="searchbar">
                    <input type="image" class="lupa" src="Search.png" alt="Enviar formulario">
                </div>
                <div class="busqueda-avanzada all-unselectable-text">
                <ul>
                    <li class="menu-item">
                        <h3>Tipo de comida</h3>
                        <ul class="submenu">
                            <li><div class="input-container"><input type="checkbox" id="comida1" value="Panameña" name="comida[]"></div><label for="comida1"> Panameña</label></li>
                            <li><div class="input-container"><input type="checkbox" id="comida2" value="Italiana" name="comida[]"></div><label for="comida2"> Italiana</label></li>
                            <li><div class="input-container"><input type="checkbox" id="comida3" value="China" name="comida[]"></div><label for="comida3"> China</label></li>
                            <li><div class="input-container"><input type="checkbox" id="comida4" value="Mexicana" name="comida[]"></div><label for="comida4"> Mexicana</label></li>
                            <li><div class="input-container"><input type="checkbox" id="comida5" value="Peruana" name="comida[]"></div><label for="comida5"> Peruana</label></li>
                            <li><div class="input-container"><input type="checkbox" id="comida6" value="Española" name="comida[]"></div><label for="comida6"> Española</label></li>
                            <li><div class="input-container"><input type="checkbox" id="comida7" value="Internacional" name="comida[]"></div><label class="last" for="comida7"> Internacional</label></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <h3>Tipo de restaurante</h3>
                        <ul class="submenu">
                            <li><div class="input-container"><input type="checkbox" id="restaurante1" value="Cafetería" name="restaurante[]"></div><label for="restaurante1"> Cafetería</label></li>
                            <li><div class="input-container"><input type="checkbox" id="restaurante2" value="Fonda" name="restaurante[]"></div><label for="restaurante2"> Fonda</label></li>
                            <li><div class="input-container"><input type="checkbox" id="restaurante3" value="Restaurante" name="restaurante[]"></div><label for="restaurante3"> Restaurante</label></li>
                            <li><div class="input-container"><input type="checkbox" id="restaurante4" value="Comida Rápida" name="restaurante[]"></div><label for="restaurante4"> Comida Rápida</label></li>
                            <li><div class="input-container"><input type="checkbox" id="restaurante5" value="Familiar" name="restaurante[]"></div><label for="restaurante5"> Familiar</label></li>
                            <li><div class="input-container"><input type="checkbox" id="restaurante6" value="Buffet" name="restaurante[]"></div><label class="last" for="restaurante6"> Buffet</label></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <h3>Provincia</h3>
                        <ul class="submenu">
                            <li><div class="input-container"><input type="checkbox" id="provincia1" value="Coclé" name="provincia[]"></div><label for="provincia1"> Coclé</label></li>
                            <li><div class="input-container"><input type="checkbox" id="provincia2" value="Colón" name="provincia[]"></div><label for="provincia2"> Colón</label></li>
                            <li><div class="input-container"><input type="checkbox" id="provincia3" value="Panamá" name="provincia[]"></div><label for="provincia3"> Panamá</label></li>
                            <li><div class="input-container"><input type="checkbox" id="provincia4" value="Chiriquí" name="provincia[]"></div><label for="provincia4"> Chiriquí</label></li>
                            <li><div class="input-container"><input type="checkbox" id="provincia5" value="Los Santos" name="provincia[]"></div><label for="provincia5"> Los Santos</label></li>
                            <li><div class="input-container"><input type="checkbox" id="provincia6" value="Darién" name="provincia[]"></div><label for="provincia6"> Darién</label></li>
                            <li><div class="input-container"><input type="checkbox" id="provincia7" value="Herrera" name="provincia[]"></div><label for="provincia7"> Herrera</label></li>
                            <li><div class="input-container"><input type="checkbox" id="provincia8" value="Veraguas" name="provincia[]"></div><label class="last" for="provincia8"> Veraguas</label></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <h3>Costo</h3>
                        <ul class="submenu">
                            <li><div class="input-container"><input type="checkbox" id="costo1" value="Económico" name="costo[]"></div><label style="font-size: 14px;" for="costo1"> Económico</label></li>
                            <li><div class="input-container"><input type="checkbox" id="costo2" value="Regular" name="costo[]"></div><label for="costo2"> Regular</label></li>
                            <li><div class="input-container"><input type="checkbox" id="costo3" value="Costoso" name="costo[]"></div><label class="last" for="costo3"> Costoso</label></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <h3>Facilidades</h3>
                        <ul class="submenu">
                            <li><div class="input-container"><input type="checkbox" id="facilidad1" value="sillas_bebe" name="facilidades[]"></div><label for="facilidad1"> Sillas de Bebé</label></li>
                            <li><div class="input-container"><input type="checkbox" id="facilidad2" value="menu_infantil" name="facilidades[]"></div><label for="facilidad2"> Menú Infantil</label></li>
                            <li><div class="input-container"><input type="checkbox" id="facilidad3" value="discapacitados" name="facilidades[]"></div><label for="facilidad3"> Accesible para Discapacitados</label></li>
                            <li><div class="input-container"><input type="checkbox" id="facilidad4" value="parking" name="facilidades[]"></div><label class="last" for="facilidad4"> Parking</label></li>
                        </ul>
                    </li>
                </ul>
                    <div>
                        <h4 class="unselectable-text" id="toggle-submenus">Búsqueda avanzada</h4>
                        <img class="dropdown-busqueda-avanzada" src="Arrow_drop_down.png" alt=""
                            id="toggle-submenus">
                    </div>
                </div>
            </form>
        </nav>
    </div>

    <div class="sections">
        <div>
            <img src="Book_online.png" alt="">
            <h4>Encuentra tu restaurante perfecto en segundos</h4>
        </div>
        <div>
            <img src="Book_online.png" alt="">
            <h4>Reserva tu mesa en segundos y disfruta de la experiencia </h4>
        </div>
        <div>
            <img src="Menu_book.png" alt="">
            <h4>Explora los platos más destacados de tus restaurantes favoritos</h4>
        </div>
    </div>
    <div class="footer">
        <div class="social">
            <h2>Panama Bites</h2>
            <div>
                <img src="Facebook.png" alt="">
                <img src="Instagram.png" alt="">
                <img src="Gmail.png" alt="">
            </div>
        </div>
        <div class="etc">
            <h4>Política de privacidad</h4>
            <h4>Política de cookies</h4>
            <h4>Condiciones generales</h4>
        </div>
    </div>
    </div>
    <script src="script.js"></script>
</body>

</html>