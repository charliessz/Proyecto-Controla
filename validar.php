<?php
include('db.php');
$id=$_POST['id'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['id']=$id;


$conexion=mysqli_connect("localhost","root","","login");

$consulta="SELECT * FROM usuarios WHERE id='$id' AND contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    
    $row = mysqli_fetch_assoc($resultado);
    $_SESSION['nombre_usuario'] = $row['nombre']; 

    header("location:home.php");
}else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad"></h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);