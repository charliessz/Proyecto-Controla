<?php
include('db.php');


$sql = "SELECT * FROM usuarios";
$result = mysqli_query($conexion, $sql);
?>

<!DOCTYPE html>
<html lang="es">
<head> 
  <link rel="stylesheet" href="css/header.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Generico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header id="cabecera_inicio">

    <a href="index.php"><img src="img/Controla_Short.jpeg" class="logo" alt="Logo" width="240"></a>
        <div class="botones-container">
        <button class="boton-inicio"><a href="home.php">Inicio</a></button>
        <button class="boton-perfil"><a href="index.php">Cerrar Sesion</a></button>
            
            
        </div>
    </header>

    <div class= "espacio-tabla">
    <table class="table table-dark table-striped-columns">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">Renombrar</th>
      <th scope="col">Eliminar Usuarios</th>
      
      
    </tr>
  </thead>
  <tbody>


  <?php while ($mostrar = mysqli_fetch_array($result)): ?>
    <tr>
      <th><?php echo $mostrar['id']?></th>
      <th><?php echo $mostrar['nombre']?></th>
      <th><?php echo $mostrar['email']?></th>
      <th><?php echo $mostrar['contraseña']?></th>
     <td>
        <form action="editar.php" method="get">
            <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
            <button class="btn btn-success" type="submit">Editar</button>
        </form>
        </td>
      </td>
      <td>
        <form action="eliminar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $mostrar['id']; ?>">
            <button class="btn btn-danger" type="submit">Eliminar</button>
        </form>
      </td>
      

    </tr>
    
<?php endwhile; ?>


  </tbody>
</table>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>