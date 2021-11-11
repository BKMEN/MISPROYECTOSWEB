<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi primer form procesado</title>
  </head>
  <body>
    <h1>Mi primer form procesado</h1>
    <?php
      echo "Hola mundo!";
    ?>
    <form class="" action="procesar.php" method="post">
      Selecciona tu color favorito:
      <input type="color" name="favorito" value="">
      <input type="text" name="nombre" value="" placeholder="Información">
      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>
