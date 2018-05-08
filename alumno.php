<?php
  if(isset($_POST['submit'])){
    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $carrera = $_POST['carrera'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    
    if(file_exists("alumnos.txt")){
      $file = fopen("alumnos.txt", "a");
      fputs($file,"\n$matricula, $nombre, $carrera, $email, $telefono");
    }else{
      $file = fopen("alumnos.txt", "a");
      fputs($file,"$matricula, $nombre, $carrera, $email, $telefono");
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
      <h3>Formulario de alumnos</h3>
      <form action="" method="POST">
        <p><label>Matrícula: </label><input type="text" name="matricula" placeholder="Matrícula"></p>
        <p><label>Nombre: </label><input type="text" name="nombre" placeholder="Nombre"></p>
        <p><label>Carrera: </label><input type="text" name="carrera" placeholder="Carrera"></p>
        <p><label>Email: </label><input type="text" name="email" placeholder="Email"></p>
        <p><label>Teléfono: </label><input type="text" name="telefono" placeholder="Teléfono"></p>
        <input type="submit" name="submit" class="button">
      </form>
    </div>

    <?php require_once('footer.php'); ?>
  </body>
</html>