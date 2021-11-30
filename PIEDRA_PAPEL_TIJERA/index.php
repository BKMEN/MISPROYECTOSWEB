<!--CUADRO AZUL-->
<?php
session_start();
if (! isset($_POST['seleccionar']) ){ //si no envio nada
  $_SESSION['seleccionar']=rand(0,2);
}
$maquina = $_SESSION['seleccionar'];
$jugador=$_POST['seleccionar'];
?>


<!--CUADRO AZUL-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PIEDRA PAPEL O TIJERA</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <!--CUADRO AZUL-->
  <div class="formulario centrado desaparecer">
    <form method="post">
<img class="imagenes-seleccionar" src="0.jpg" alt="">
<input class="seleccionar" type="radio" name="seleccionar" value="0">
<img class="imagenes-seleccionar" src="1.jpg" alt="">
<input type="radio" name="seleccionar" value="1">
<img class="imagenes-seleccionar" src="2.jpg" alt="">
<input type="radio" name="seleccionar" value="2">
<br>
<br>
<input type="submit" name="JUGAR" value="JUGAR">
  </form>
  </div>
  <div class="resultado centrado">
    <?php if (isset($_POST['seleccionar'])
  ) {
           if ( $maquina == $_POST['seleccionar'] ) {
             echo '<h1 class="tie">EMPATE</h1><br>';
           }


   if( isset($_POST['seleccionar']) ){


     if(($_POST['seleccionar']==0&&$maquina==2)||($_POST['seleccionar']==1&&$maquina==0)||($_POST['seleccionar']==2&&$maquina==1))
         echo '<h1 class="won">HAS GANADO</h1><br>';
     if(($_POST['seleccionar']==2&&$maquina==0)||($_POST['seleccionar']==0&&$maquina==1)||($_POST['seleccionar']==1&&$maquina==2))
         echo '<h1 class="lost">HAS PERDIDO</h1><br>';
       }

      ?>
  <?php

  echo "<h2>la maquina ha sacado</h2>";

  {?>
    <img src='<?=$maquina?>.jpg' WIDTH='70'HEIGHT='55'>
  <link rel="stylesheet" href="style2.css">
  <?php } ?>

  <?php

  echo "<h2>has sacado</h2>";

  {?>
    <img src='<?=$jugador?>.jpg' WIDTH='70'HEIGHT='55'>
  <?php } }  ?>
  <br>
  <p>  <a href="index.php">Reiniciar partida</a></p>
  </div>

  </body>
</html>
