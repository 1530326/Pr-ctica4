<?php
  if(isset($_POST['submit'])){
    $numEmpleado = $_POST['numEmpleado'];
    $nombre = $_POST['nombre'];
    $carrera = $_POST['carrera'];
    $telefono = $_POST['telefono'];

    
    if(file_exists("maestros.txt")){
      $file = fopen("maestros.txt", "a");
      fputs($file,"\n$numEmpleado, $nombre, $carrera, $telefono");
    }else{
      $file = fopen("maestros.txt", "a");
      fputs($file,"$numEmpleado, $nombre, $carrera, $telefono");
    }
    fclose($file);
  }
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Curso PHP |  Bienvenidos</title>
    <link rel="stylesheet" href="./css/foundation.css" />
    <script src="./js/vendor/modernizr.js"></script>
  </head>
  <body>
    <br>
    <?php require_once('header.php'); ?>

     
    <div class="row">
      <h3>Formulario de maestros</h3>
      <form action="" method="POST">
        <p><label>No. empleado: </label><input type="text" name="numEmpleado" placeholder="No. empleado"></p>
        <p><label>Nombre: </label><input type="text" name="nombre" placeholder="Nombre"></p>
        <p><label>Carrera: </label><input type="text" name="carrera" placeholder="Carrera"></p>
        <p><label>Teléfono: </label><input type="text" name="telefono" placeholder="Teléfono"></p>
        <input type="submit" name="submit" class="button">
      </form>
    </div>

    <?php require_once('footer.php'); ?>
  </body>
</html>