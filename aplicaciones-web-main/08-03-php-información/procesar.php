<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $fichero = 'datos.txt';
    // Abre el fichero para obtener el contenido existente
    $actual = file_get_contents($fichero);
    // Añade una nueva persona al fichero
    $actual .= $_POST['nombre']." ";
    $actual .= $_POST['favorito']."\n";
    // Escribe el contenido al fichero
    file_put_contents($fichero, $actual);
    ?>

    <h1>Guardado</h1>
    <a href="listado.php">Ir a listado</a>
  </body>
</html>
