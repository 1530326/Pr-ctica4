<?php
$nombreArchivo=("alumnos.txt");
  if (file_exists($nombreArchivo)) {
    $file = fopen("alumnos.txt", "r");
    $total_users=0;

    while (!feof($file)) {
      $total_users=$total_users+1;
      $cadena = fgets($file);
      $valores = explode(",",$cadena);
      $user_access[] = [
                        'matricula' => "$valores[0]",
                        'nombre' => "$valores[1]",
                        'carrera' => "$valores[2]",
                        'email' => "$valores[3]",
                        'telefono' => "$valores[4]"
                      ];
    }
  }
$id = isset( $_GET['id'] ) ? $_GET['id'] : '';
if( !array_key_exists($id, $user_access) )
{
  die('No existe dicho usuario');
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
    
    <?php require_once('header.php'); ?>

    <div class="row">
 
      <div class="large-9 columns">
        <h3>Manejo de arreglos</h3>
          <p>Elemento de un arreglo</p>
        <div class="section-container tabs" data-section>
          <section class="section">
            <div class="content" data-slug="panel1">
              <div class="row">
              </div>
              <ul class="pricing-table">
                <li class="title">Detalle de indice</li>
                <li class="description"><?php echo $user_access[$id]['matricula'] ?></li>
                <li class="description"><?php echo $user_access[$id]['nombre'] ?></li>
                <li class="description"><?php echo $user_access[$id]['carrera'] ?></li>
                <li class="description"><?php echo $user_access[$id]['email'] ?></li>
                <li class="description"><?php echo $user_access[$id]['telefono'] ?></li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    </div>
     
    <?php require_once('footer.php'); ?>