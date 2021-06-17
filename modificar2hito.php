<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description"
	content="Mi web para el hito">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="csshito.css">
    <title>Formulario para el hito</title>
</head>

<!-- Formulario que aparece si el DNI metido por el usuario existe y es correcto,
apareciendo los datos del alumno existentes en la BBDD para así poder modificar
únicamente los necesarios -->

<body>
<form method="post" action="modificar2.php" name="form">
    <!-- Aquí recogemos el valor original del DNI para no perderlo en caso
         de que el usuario necesite modificarlo -->
    <input type="hidden" name="dni_original" value="<?php echo $dni; ?>">
<fieldset>
<p>Ahora reescribe los datos que quieras modificar</p>
<p>
<label for="dni">DNI: </label>
<input type="text" name="dni" value="<?php echo $dni; ?>">
</p>
<p>
<label for="nombre">Nombre: </label>
<input type="text" name="nombre" required value="<?php echo $nombre; ?>"
    placeholder="Escribe tu nombre">
</p>
<p>
<p>
<label for="apellidos">Apellidos: </label>
<input type="text" name="apellidos" value="<?php echo $apellidos; ?>" required 
    placeholder="Escribe tus apellidos">
</p>
<p>
<label for="fechaNac">Fecha de nacimiento: </label>
<input type="date" name="fechaNac" value="<?php echo $fechaNac; ?>">
</p>
<p>
<label for="correo">Correo electrónico: </label>
<input type="email" name="correo" required value="<?php echo $correo; ?>"
    placeholder="Escribe tu correo electrónico">
</p>
<p>
<label for="tlf">Teléfono: </label>
<input type="number" name="tlf" value="<?php echo $tlf; ?>" required 
    placeholder="Escribe tu número de tlf">
</p>
<p>
<label for="dirección">Dirección: </label>
<input type="text" name="dirección" value="<?php echo $dirección; ?>" required 
    placeholder="Escribe tu dirección"                                                                                                                                                                                                                                                         ción">
</p>
<label for="ciudad">Ciudad: </label>
<input type="text" name="ciudad" value="<?php echo $ciudad; ?>" required 
    placeholder="Escribe tu ciudad">
</p>
<label for="provincia">Provincia: </label>
<input type="text" name="provincia" value="<?php echo $provincia; ?>"required 
    placeholder="Escribe tu provincia">
</p>
<label for="codpost">Código postal: </label>
<input type="number" name="codpost" value="<?php echo $codpost; ?>" required 
    placeholder="Escribe tu CP">
</p>

<input type="submit" value="Enviar">
<input type="reset" value="Borrar">
</fieldset>
</form>
<img src="imagen2.png">
</body>
</html>