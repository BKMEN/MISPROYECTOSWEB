
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="2;URL='listado.php'"/>
    <title>FORM procesado</title>
  </head>
  <body>
    <?php
   $fichero = 'datos.txt';
   $actual = file_get_contents($fichero);
   $actual .= $_POST['nombre']." ";
   $actual .= $_POST['apellido']." ";
   $actual .= $_POST['apodo']." ";
   $actual .= $_POST['fechanacimiento']." ";
   $actual .= $_POST['colorfavorito']." ";
   $actual .= $_POST['nota']." ";
   $actual .= $_POST['Zodiaco']." ";
   $actual .= $_POST['edad']."\n";


   file_put_contents($fichero, $actual);
   ?>
    <h1>Guardado</h1>
    <span style="background-color:<?php echo $_POST['colorfavorito']?>"><b>COLOR</b></span>
    <br><br>  <a href="listado.php">ir a listado</a>







  </body>
</html>
