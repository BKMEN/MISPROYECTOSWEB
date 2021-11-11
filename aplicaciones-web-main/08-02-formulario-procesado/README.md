# Objetivos

Procesar formularios. ¡Comienzo!

## Referencia

Arrancar el servidor PHP

NOTA: Sitúa la terminal en el directorio donde se encuentran los ficheros form.php y procesa.php

Luego arranca el servidor:

```bash
php -S localhost:8000
```

NOTA: Debe instalar php Por ejemplo: ```php7.4-cli```

Visitar tu servidor

[http://localhost:8000](http://localhost:8000)

## Tarea

Modifica esta práctica para que le pregunte al usuario:

- Nombre
- Apodo
- Apellido
- Fecha nacimiento
- Color favorito
- ¿Qué nota cree que sacá en Aplicaciones Web? (Utiliza un rango)
- Su signo de zodiaco (Utiliza radio button o select)

Luego modifica la página de procesa para que saque la información que ha enviado el usuario.

RETO EXTRA!!! Cuando muestres el color pinta un ```span``` del color elegido. Usa la propiedad style para incrustar css

```
<span style="background-color: #FF00FF"><b>COLOR</b></span>
```
