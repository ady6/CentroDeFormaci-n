<?php

require 'conexion.php'; // Incluimos el php donde nos conectamos a la BBDD

// Declaramo la variable DNI asociada al nombre que tiene el campo del formulario
// donde el usuario introduce el DNI

$dni        = $conectar->qStr( $_POST['dni'] );

// Declaramos una variable actualizar que realice el update de la BBDD
// para aceptar al alumno cuyo DNI introduce el usuario
// de la tabla de la BBDD

$actualizar = "UPDATE alumnos SET aceptado=1 WHERE dni=$dni";

$rs         = $conectar->execute( $actualizar ); // Ejecuta el update

// Realizamos un if donde si se ha podido conectar con la BBDD y se ha realizado
// el update aparece en pantalla: ¡Se ha podido aceptar al alumno! :)
// y si no aparece: No se ha podido aceptar al alumno,
// compruebe que el DNI es correcto o está ya registrado

if(  $conectar->affected_rows() ) {
    echo '¡Se ha podido aceptar al alumno! :)';
} else {
    echo 'No se ha podido aceptar al alumno, compruebe que el DNI es correcto o está ya registrado';
}

// Cerramos la conexión con la BBDD

include 'cerrarconexion.php';


?>