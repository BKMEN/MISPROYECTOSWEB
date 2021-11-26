<?php
session_start();
$Session_numero= rand(1,10);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> ADIVINA CUALQUIER COSA </h1>
    <div class="">
    <form class="" action="index.php" method="post">
        <input type="text" name="enviado" value="">
        <input type="submit" name="" value="ENVIAR">
        <?php
          if ( isset ($_POST ['enviado'])) {
            echo "HAS ENVIADO ALGO: ". $_POST ['enviado']. "</h3>";
            if ($Session_numero == $_POST['enviado']){
              echo '<br><br><img src="you-win-8bit.gif">';
            }
          if ($Session_numero > $_POST['enviado']){
            echo "<h1> TU NUMERO ES MAS PEQUEÑO </h1>";
          }
          if ($Session_numero < $_POST['enviado']){
            echo "<h1> TU NUMERO ES MAS GRANDE </h1>";
          }

          } else {
            echo "BIENVENIDO AL JUEGO";
          }

        ?>
        <?php echo "$Session_numero"; ?>
    </form>
    </div>
  </body>
</html>
