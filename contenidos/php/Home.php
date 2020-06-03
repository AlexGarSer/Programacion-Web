<DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Edelex</title>
    <link rel="stylesheet" href="css/estilosSes.css">
    <script src="https://kit.fontawesome.com/74a0b75cb7.js" crossorigin="anonymous"></script>
</head>
<body>
     <?php require("sesion.php"); ?>
    <header class="Barra">
            <div class="Barra_seccion1">
                <a class="Barra_enlace" href="sesion.php">Inicio</a>
            </div>
            <div class="Barra_seccion2">
                <form action=""><input type="text" class="Barra_Buscador" id="Barra_Buscador" placeholder="Buscar"></form>
            </div>
            <div class="Barra_seccion3"><i class="fas fa-user-circle"></i>Mi Cuenta</div>

            <!--
            <nav class="Barra">
                <ul>
                    <li><a class="Inicio" id="Inicio" href="index.html">Inicio</a></li>
                    <li><form action=""><input type="text" class="Barra_Buscador" id="Barra_Buscador" placeholder="Buscar"></form></li>
                    <li><a class="Cuenta" id="Cuenta" href="#">Mi Cuenta</a>
                        <ul>
                            <li><a class="Iniciar Sesion" href="contenidos/Login.html">Iniciar Sesion</a></li>
                            <li><a class="Registrarse" href="contenidos/Login.html">Registrarse</a></li>
                        </ul>
                    </li>
                </ul>    
            </nav>
            -->
    </header>
    <section class="titulo"> 
            <div class="titulo_saludo">
                <h1>¡Bienvenidos a Edelex!</h1>
                <h2>Catalogo de Fortnite</h2>
            </div>
    </section>
    <main class="contenedor">
        <div class="Catalogo" id="Catalogo">
            <a href="#" class="Activo">Personajes</a>
            <a href="#">Mochila</a>
            <a href="#">Estela</a>
            <a href="#">Planeador</a>
            <a href="#">Camuflaje</a>
            <a href="#">Baile</a>
        </div>
        <div class="Galeria">
            <img src="contenidos/imagenes/Autobus_1.png" alt="" width="500px" height="500px">
            <h1>¡Proximamente!</h1>
        </div>
    </main>
    <script src="scripts/Inicio.js"></script>    
</body>
</html>