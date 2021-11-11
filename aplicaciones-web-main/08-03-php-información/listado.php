<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Listado</h1>
    <?php
    $fichero = fopen("datos.txt", "r");
    while($data = fgetcsv($fichero, 1000, " ")) {
        echo $data[0] . " " . $data[1] . "<br>";
    }
    fclose($fichero);
    ?>
  </body>
</html>
