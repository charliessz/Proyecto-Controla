<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="css/modulo.css">
    <script>
        function validarFormulario() {
            var id = document.forms["registroForm"]["id_reg"].value;
            var nombre = document.forms["registroForm"]["nom_reg"].value;
            var email = document.forms["registroForm"]["email_reg"].value;
            var contraseña = document.forms["registroForm"]["contraseña_reg"].value;

           
            if (!id || !nombre || !email || !contraseña) {
                alert("Por favor, complete todos los campos.");
                return false;
            }

            
            if (!/^\d+$/.test(contraseña)) {
                alert("La contraseña debe contener solo números.");
                return false;
            }

            
            if (!/^\d+$/.test(id)) {
                alert("El ID debe contener solo números.");
                return false;
            }

            
            if (!/^[^@\s]+@[^@\s]+\.[^@\s]+$/.test(email)) {
                alert("Por favor, ingrese un correo electrónico válido.");
                return false;
            }

            return true; 
        }
    </script>
    <a href="index.php"><img src="img/Controla_Short.jpeg" class="logo" alt="Logo" width="200"></a>
</head>
<body>
    <section id="cuadro_login">

        <h1 style="color: rgb(0, 0, 0);" class="entrada_texto">  Registrate</h1>
        <form name="registroForm" action="registro.php" method="post" onsubmit="return validarFormulario()">
        <p><input class="entrada_id_reg" type="text" placeholder="ingrese su identificacion" name="id_reg"></p>
        <p><input class="entrada_nom_reg" type="text" placeholder="ingrese su nombre" name="nom_reg"></p>
        <p><input class="entrada_email_reg" type="text" placeholder="ingrese su correo" name="email_reg"></p>
        <p><input class="entrada_con_reg" type="password" placeholder="ingrese su contraseña" name="contraseña_reg"></p>
        <input class="botonRegistro" type="submit" value="Aceptar">
        </form> 
    </section>
</body>
</html>