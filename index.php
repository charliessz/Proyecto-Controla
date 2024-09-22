<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <section id="titulo_login">
        
        <h1 style="color: white;" class="titulo_empresa" position="center">Controla</h1>
        <h3 style="color: white;" class="eslogan_empresa">Tu equipo en una APP</h3>
    </section>
    <section id="cuadro_login">
    <a href="index.php"><img src="img/Controla_Short.jpeg" class="logo" alt="Logo" width="200"></a>
        <h1 style="color: rgb(0, 0, 0);" class="entrada_texto">Inicia Sesion</h1>
        <form action="validar.php" method="post">
        <p><input class="entrada_identificacion" type="text" placeholder="ingrese su identificacion" name="id"></p>
        <p><input class="entrada_contraseña" type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
        <input class="botonInicio" type="submit" value="Ingresar">
        <a class="botonRegistro" href="modulo_registro.php">Registrate</a>

        </form> 
    </section>
</body>
</html>