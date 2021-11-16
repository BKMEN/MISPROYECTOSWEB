<?php
$numero_aleatiorio=2;
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
        <input type="text" name="numero" value="">
        <input type="submit" name="" value="ENVIAR">
        <?php
          if ( isset ($_POST ['numero'])) {
            echo "HAS ENVIADO ALGO: ". $_POST ['numero']. "</h3>";
            if ($numero_aleatiorio == $_POST['numero']){
              echo '<br><br><img src="you-win-8bit.gif">';
            }
          if ($numero_aleatiorio > $_POST['numero']){
            echo "<h1> TU NUMERO ES MAS PEQUEÑO </h1>";
          }
          if ($numero_aleatiorio < $_POST['numero']){
            echo "<h1> TU NUMERO ES MAS GRANDE </h1>";
          }

          } else {
            echo "BIENVENIDO AL JUEGO";
          }
        ?>
    </form>
    </div>
  </body>
</html>
