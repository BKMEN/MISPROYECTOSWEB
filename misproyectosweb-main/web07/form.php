
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mi primer form procesado</title>
    <style>
      select.Zodiaco option[value="leo"]   { background-image:url(leo.jpg); }
    </style>
  </head>
  <body style="margin-left:40px;">
    <h1>Mi primer form procesado</h1>
    <?php
      echo "Hola mundo!";
    ?>
    <br><br>
    <form  action="procesar.php" method="post">

      <label for="nombre">NOMBRE:</label>&nbsp;&nbsp;
      <input type="text" name="nombre" value=""required>
      <br><br>
      <label for="apodo">APODO</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text" name="apodo" value=""required>
      <br><br>
      <label for="">APELLIDO</label>&nbsp;
      <input type="text" name="apellido" value=""required>
      <br><br>
      <label for="fechanacimiento">FECHA DE NACIMIENTO</label>&nbsp;
      <input type="date" name="fechanacimiento" value=""required>
      <br><br>
      <label for="color">COLOR</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="color" name="colorfavorito" value=""required>
      <br><br>
      <label for="nota">¿Qué nota cree que sacá en Aplicaciones Web?</label>&nbsp;
      <input type="range" name="nota" value=""required>
      <br><br>
      <label for="zodiaco">Signo del zodiaco</label>&nbsp;&nbsp;
      <select name="Zodiaco" required>
        <option value="cancer">Cáncer</option>
        <option value="acuario">Acuario</option>
        <option value="piscis">Piscis</option>
        <option value="sagitario" selected>Sagitario</option>
        <option value="capricornio">Capricornio</option>
        <option value="libra">Libra</option>
        <option value="leo">Leo</option>
        <option value="tauro" selected>Tauro</option>
      </select> <br><br>
      <label for="edad">Edad:</label>&nbsp;
      <input type="number" name="edad" value="" min="1" max="90"required><br><br>

      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>
