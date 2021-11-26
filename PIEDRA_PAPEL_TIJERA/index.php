<!DOCTYPE HTML>
<html>
    <head>
        <title>Piedra, papel o tijera</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $jugada_del_usuario = intval ($_POST['jugada_del_usuario']);
    $jugada_del_ordenador=1+rand()%3;
    if($jugada_del_ordenador==1)
        echo 'La jugada del ordenador es Piedra<br>';
    if($jugada_del_ordenador==2)
        echo 'La jugada del ordenador es Papel<br>';
    if($jugada_del_ordenador==3)
        echo 'La jugada del ordenador es Tijera<br>';
    if($jugada_del_usuario==$jugada_del_ordenador)
        echo 'Empate<br>';
    if(($jugada_del_usuario==1&&$jugada_del_ordenador==3)||($jugada_del_usuario==2&&$jugada_del_ordenador==1)||($jugada_del_usuario==3&&$jugada_del_ordenador==2))
        echo 'Gana usuario<br>';
    if(($jugada_del_usuario==3&&$jugada_del_ordenador==1)||($jugada_del_usuario==1&&$jugada_del_ordenador==2)||($jugada_del_usuario==2&&$jugada_del_ordenador==3))
        echo 'Gana ordenador<br>';
    echo 'Valor de jugada del ordenador: ' . $jugada_del_ordenador . "<br/>\n";
}

?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="jugada_del_usuario">Selecciona el valor de jugada del usuario:</label>
                        </td>
                        <td>
                            <select name="jugada_del_usuario" required="required">
                                <option value="1">Piedra</option>
                                <option value="2">Papel</option>
                                <option value="3">Tijera</option>
                            </select>
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </body>
</html>


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
