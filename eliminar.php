<?php
include('db.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $consulta = "DELETE FROM usuarios WHERE id='$id'";
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo "Usuario eliminado con éxito.";
    } else {
        echo "Error al eliminar el usuario: " . mysqli_error($conexion);
    }
}

mysqli_close($conexion);
header("Location: mostrar.php");
?>