<?php

require 'conexion.php'; // Incluimos el php donde nos conectamos a la BBDD

// Declaramos una variable select que realice el select en la BBDD
// para seleccionar a los alumnos no aceptados ordenados por apellido ascendente

$select="SELECT * FROM hito1.alumnos WHERE ACEPTADO=0 ORDER BY APELLIDOS ASC";

$rs = $conectar->execute( $select ); // Ejecuta el select
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description"
	content="Mi web para el hito">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="listado2.css">
    <title>Listado de alumnos no aceptados</title>
</head>

<!-- HTML que muestra una tabla con los campos de la tabla de la BBDD -->

<body>

<table>
  <h3>Listado de los alumnos no aceptados:</h3>
  <thead>
  	<tr>
      <th>DNI</th>
      <th>Nombre</th>
      <th>Apellidos</th>
      <th>Fecha de nacimiento</th>
      <th>Correo electrónico</th>
      <th>Teléfono</th>
      <th>Dirección</th>
      <th>Ciudad</th>
      <th>Provincia</th>
      <th>Código postal</th>
    </tr>
  </thead>
  <tbody>

 <?php 
  // PHP donde recorrer cada fila de la tabla de la BBDD, asociando
  // las variables con los campos de la BBDD

    foreach( $rs as $clave=>$fila ){
        $dni        = $fila['DNI'];
        $nombre     = $fila['NOMBRE'];
        $apellidos  = $fila['APELLIDOS'];
        $fechaNac   = $fila['FECHA_DE_NACIMIENTO'];
        $correo     = $fila['CORREO_ELECTRÓNICO'];
        $tlf        = $fila['TELÉFONO'];
        $dirección  = $fila['DIRECCIÓN'];
        $ciudad     = $fila['CIUDAD'];
        $provincia  = $fila['PROVINCIA'];
        $codpost    = $fila['CÓDIGO_POSTAL'];
 ?> 

 <!-- HTML donde completar la tabla con los datos recogidos de la BBDD por el PHP -->    
    <tr>
      <td><?php echo $dni;       ?></td>
      <td><?php echo $nombre;    ?></td>
      <td><?php echo $apellidos; ?></td>
      <td><?php echo $fechaNac; ?></td>
      <td><?php echo $correo; ?></td>
      <td><?php echo $tlf; ?></td>
      <td><?php echo $dirección; ?></td>
      <td><?php echo $ciudad; ?></td>
      <td><?php echo $provincia; ?></td>
      <td><?php echo $codpost; ?></td>
    </tr>
  
<?php
// Cerramos el foreach del PHP
  }
?>

  </tbody>
</table>
<br>
<br>
<br>
<!--Opción de volver a la página del listado de todos los alumnos -->
<nav>
<a href="listado.php">➳ Volver</a>
</nav>
</body>
</html>

<?php
// Cerramos la conexión con la BBDD
include 'cerrarconexion.php';
?>