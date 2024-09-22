<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $consulta = "SELECT * FROM usuarios WHERE id='$id'";
    $resultado = mysqli_query($conexion, $consulta);
    $usuario = mysqli_fetch_assoc($resultado);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];

    $consulta = "UPDATE usuarios SET nombre='$nombre', email='$email', contraseña='$contraseña' WHERE id='$id'";
    mysqli_query($conexion, $consulta);
    mysqli_close($conexion);
    header("Location: mostrar.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" type="text/css" href="css/modulo.css">
</head>
<body>
    <section id="cuadro_login">
        <h1 style="color: rgb(0, 0, 0);" class="entrada_texto">Editar Usuario</h1>
        <form action="editar.php?id=<?php echo $id; ?>" method="post">
            <p><input class="entrada_nom_reg" type="text" name="nombre" placeholder="Nombre" value="<?php echo $usuario['nombre']; ?>"></p>
            <p><input class="entrada_email_reg" type="email" name="email" placeholder="Correo" value="<?php echo $usuario['email']; ?>"></p>
            <p>
                <input type="password" id="contraseña" class="entrada_con_reg" name="contraseña" placeholder="Contraseña" value="<?php echo $usuario['contraseña']; ?>">
                <button type="button" id="togglePassword">Mostrar</button>
            </p>
            <input class="botonRegistro" type="submit" value="Actualizar">
        </form> 
    </section>
    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const contraseñaInput = document.getElementById('contraseña');
            const tipoActual = contraseñaInput.getAttribute('type');
            contraseñaInput.setAttribute('type', tipoActual === 'password' ? 'text' : 'password');
            this.textContent = tipoActual === 'password' ? 'Ocultar' : 'Mostrar';
        });
    </script>
</body>
</html>