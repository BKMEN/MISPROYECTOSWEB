<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FORM procesado</title>
  </head>
  <body>
    <?php
      print_r($_POST);
    ?>
    <h1>Bienvenido <?php echo $_POST['prueba'] ?> </h1>
  </body>
</html>
