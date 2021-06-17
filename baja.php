<?php

require 'conexion.php'; // Incluimos el php donde nos conectamos a la BBDD

// Declaramo la variable DNI asociada al nombre que tiene el campo del formulario
// donde el usuario introduce el DNI

$dni    = $conectar->qStr( $_POST[ 'dni' ] );

// Declaramos una variable borrar que realice el delete de la BBDD
// para borrar los datos del alumno cuyo DNI introduce el usuario
// de la tabla de la BBDD

$borrar = "DELETE FROM alumnos WHERE dni=$dni";

$rs = $conectar->execute( $borrar ); // Ejecuta el delete

// Realizamos un if donde si se ha podido conectar con la BBDD y se ha realizado
// el delete aparece en pantalla: El alumno ha sido dado de baja correctamente :)
// y si no aparece: No se ha podido dar de baja al alumno,
// compruebe que el DNI es correcto o está registrado

if(  $conectar->affected_rows() ) {
    echo 'El alumno ha sido dado de baja correctamente :)';
} else {
    echo 'No se ha podido dar de baja al alumno, compruebe que el DNI es correcto o está registrado';
}

// Cerramos la conexión con la BBDD

include 'cerrarconexion.php';

?>