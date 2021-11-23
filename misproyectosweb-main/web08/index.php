<?php
session_start();
if (! isset($_POST['numero']) ){ //si no envio nada
  $_SESSION['numero']=rand(1,10);
  $_SESSION['intentos']=0;
}
$numero_aleatorio = $_SESSION['numero'];
$intentos=$_SESSION['intentos'];
$_SESSION['intentos']=$_SESSION['intentos']+1;
echo "llevas"." ".$intentos." intentos";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Adivina el Número!</h1>
    <div>
      <?php if (isset($_POST['numero']) ) {
        if ( $numero_aleatorio == $_POST['numero'] ) {
          echo "<h1>Has ganado !!!</h1>".'<img src="confetti.gif" width="500" height="500" />';
        }
      } ?>
      <?php if ($intentos<4) {?>
    <form  action="index.php" method="post" id="content">
      <input type="text" name="numero" value="">
      <input type="submit" name="" value="Enviar">
    </form>
    <br>
    <?php
    if( isset($_POST['numero']) ){
      echo "<h3>Has enviado algo:" ." ". $_POST['numero']."</h3>";

      if ($numero_aleatorio < $_POST['numero'] ) {
        echo "<h1>Tu número es mayor !!!</h1>";
      }
      if ($numero_aleatorio > $_POST['numero'] ) {
        echo "<h1>Tu número es menor !!!</h1>";
      }
    } else {
      echo "Bienvenido al juego!";
    } ?>
  <?php } ?>

    <?php

    if ($intentos>3 && $numero_aleatorio!=$_POST['numero']) {
        echo "Has perdido!"."         ".'<img src=".jpeg" width="250" height="200" />';//calaverra y quitar formulario

    }
     ?>
     <p>  <a href="index.php">Reiniciar partida</a></p>
  </div>
  </body>
</html>
