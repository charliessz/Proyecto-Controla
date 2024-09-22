<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head> 
  <link rel="stylesheet" type="text/css" href="css/home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controla</title>
</head>
<body>
    <header id="cabecera_inicio">
    <a href="index.php"><img src="img/Controla_Short.jpeg" class="logo" alt="Logo" width="240"></a>
        <div class="botones-container">
            <nav>
            <button class="boton-inicio" ><a href="home.php">Inicio</a></button>
            <button class="boton-perfil"><a href="mostrar.php">Registro</a></button>
            <button class="boton-perfil"><a href="index.php">Cerrar Sesion</a></button>
            
            
            
        </nav>
        </div>
    </header>
    <div class="contenido-inicio">
    <h1>Bienvenid@:</h1>
    
    <h1>
    <?php echo isset($_SESSION['nombre_usuario']) ? $_SESSION['nombre_usuario'] : 'Invitado'; ?></h1>
    </div>!
    <div class="reloj">
        <div class="tiempo" id="tiempo"></div>
        <div class="fecha" id="fecha"></div>
    </div>
    <script src="js/Inicio.js"></script>
    <button class="boton-comenzarjornada" onclick="comenzarJornada()">Comenzar Jornada</button>
    <button class="boton-finalizarjornada" onclick="finalizarJornada()">Finalizar Jornada</button>
    <h2 class="Novedades">Novedades</h2>
    <img src="img/comunicado.png" class="comunicado" width="450">
    <div class="carrusel">
        <h2>Actividades</h2>
        <div class="carrusel-contenedor">
            <button class="carrusel-boton izq" onclick="moverIzquierda()">&#9664;</button>
            <div class="carrusel-items">
                <div class="item">
                <img src="img/pausa_activa1.jpg" class="pausaActiva" width="350">
                </div>

                <div class="item">
                <img src="img/pausa_activa2.jpg" class="pausaActiva" width="350">
                </div>

                <div class="item">
                <img src="img/pausa_activa3.jpg" class="pausaActiva" width="350">
                </div>

                <div class="item">
                <img src="img/pausa_activa4.jpg" class="pausaActiva" width="350">
                </div>

                <div class="item">
                <img src="img/a_trabajar.jpeg" class="pausaActiva" width="400">
                </div>
            </div>
            <button class="carrusel-boton der" onclick="moverDerecha()">&#9654;</button>
        </div>
        <div class="indicadores">
            <span class="indicador activo"></span>
            <span class="indicador"></span>
            <span class="indicador"></span>
            <span class="indicador"></span>
            <span class="indicador"></span>
        </div>
    </div>
    <script src="js/carrusel.js"></script>
    <script>
        let jornadaActiva = false; 
        let tiempoInicio; 

        function mostrarMensaje(mensaje) {
            alert(mensaje); 
        }

        function comenzarJornada() {
            if (jornadaActiva) {
                mostrarMensaje("Ya hay una jornada activa.");
            } else {
                jornadaActiva = true; 
                tiempoInicio = new Date(); 
                mostrarMensaje("Conteo de horas iniciado.");
            }
        }

        function finalizarJornada() {
            if (!jornadaActiva) {
                mostrarMensaje("No hay ninguna jornada por finalizar.");
            } else {
                jornadaActiva = false; 
                let tiempoFin = new Date(); 
                let tiempoTranscurrido = (tiempoFin - tiempoInicio) / 1000; 
                mostrarMensaje("Tu jornada ha finalizado. Tiempo transcurrido: " + tiempoTranscurrido.toFixed(4) + " segundos.");
            }
        }
    </script>
    <form name="tiempoForm" action="guardar_tiempo.php" method="post">
        <input type="hidden" id="tiempoJornada" name="tiempoJornada" value="">
    </form>
</body>
</html>
