<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Listado de Información</h1>
    <button onclick="location.href='form.php'">Agregar Nuevo Usuario</button>
    <br><br>
    <?php
    $fichero = fopen("datos.txt", "r");
    while($data = fgetcsv($fichero, 1000, " ")) {?>
      <span style="background-color:<?=$data[4]?>"><b>Color</b></span> &nbsp;
     <img src='<?=$data[6]?>.jpeg' WIDTH='70'HEIGHT='55'>&nbsp;<?=$data[6]?>&nbsp;
     <?php echo $data[0]. " " . $data[1] . " ";
     echo $data[2] . " " . $data[3] . " ";
     echo $data[5] . " ";
     echo $data[7] . " años" . "<br>"; ?>
    <?php }
    fclose($fichero);
    ?>
  </body>
  <style media="screen">

  </style>
</html>
