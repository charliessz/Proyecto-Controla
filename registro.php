<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');

$id_regis = $_POST['id_reg'];
$correo_regis = $_POST['email_reg'];
$password_regis = $_POST['contraseña_reg'];
$nombre_regis = $_POST['nom_reg'];

$consulta = "INSERT INTO usuarios (`id`, `nombre`, `email`, `contraseña`) 
VALUES ('$id_regis', '$nombre_regis', '$correo_regis', '$password_regis');";

$resultado = mysqli_query($conexion, $consulta) or die("error de registro");

echo "registro exitoso";

mysqli_close($conexion);

sleep(2);

header("Location: index.php");
exit();
?>

