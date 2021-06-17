<?php

require 'conexion.php'; // Incluimos el php donde nos conectamos a la BBDD

// Declaramos una variable select que realice el select en la BBDD
// para seleccionar a los alumnos ordenados por apellido ascendente

$select="SELECT * FROM hito1.alumnos ORDER BY APELLIDOS ASC";

// Ejecutamos el select

$rs = $conectar->execute( $select );
?>

<!-- HTML que muestra una tabla con los campos de la tabla de la BBDD -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description"
	  content="Mi web para el hito">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="listado2.css">
    <title>Listado para el hito</title>
</head>

<body>
  <table>
    <h3>Listado de los alumnos:</h3>
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
  <!-- Botones para ir a un PHP donde nos mostrarán a los alumnos aceptados
  y los que no respectivamente -->
  
  <br>
  <a href="alumnosaceptados.php"><input type="button" value="Ver alumnos aceptados">
  <a href="alumnosnoaceptados.php"><input type="button" value="Ver alumnos no aceptados">
  <br>
  <br>
  <nav>
      <a href="registrarhito.html">➳ Registrar a un alumno</a> <br><br>
      <a href="modificarhito.html">➳ Modificar los datos de un alumno</a> <br><br>
      <a href="bajahito.html">➳ Dar de baja a un alumno</a> <br><br>
      <a href="aceptarhito.html">➳ Aceptar a un alumno</a>
  </nav>
</body>
</html>

<?php
// Cerramos la conexión con la BBDD
include 'cerrarconexion.php';
?>



