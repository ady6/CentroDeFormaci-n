<?php

require 'conexion.php'; // Incluimos el php donde nos conectamos a la BBDD

// Declaramos la variable DNI asociada al nombre que tiene el campo del formulario
// donde el usuario introduce el DNI
$dni        = $conectar->qStr( $_POST[ 'dni' ] );

//Declaramos una variable select que seleccione al alumno cuyo DNI ha sido recogido
// en el formulario
$select     ="SELECT * FROM hito1.alumnos WHERE DNI=$dni";

$rs = $conectar->getAll( $select ); // Ejecuta el select

// Realizamos un if donde si se ha podido conectar con la BBDD y se ha realizado
// el select aparece en pantalla la página modificar2hito.php
// y si no aparece: El usuario no existe
if( $rs ) {
    foreach( $rs as $clave => $registro ){
        $dni =          $registro['DNI'];
        $nombre =       $registro['NOMBRE'];
        $apellidos =    $registro['APELLIDOS'];
        $fechaNac =     $registro['FECHA_DE_NACIMIENTO'];
        $correo =       $registro['CORREO_ELECTRÓNICO'];
        $tlf =          $registro['TELÉFONO'];
        $dirección =    $registro['DIRECCIÓN'];
        $ciudad =       $registro['CIUDAD'];
        $provincia =    $registro['PROVINCIA'];
        $codpost =      $registro['CÓDIGO_POSTAL'];
    }
    include 'modificar2hito.php';
} else { 
    echo 'El usuario no existe';
}

// Cerramos la conexión con la BBDD
include 'cerrarconexion.php';
?>