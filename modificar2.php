<?php

require 'conexion.php'; // Incluimos el php donde nos conectamos a la BBDD

// Declaramos variables asociadas a los nombres de lo que introduce
// el usuario en los campos del formulario, incluso el dni original
// recogido en un input que no puede ver el usuario

$dni_original = $conectar->qStr( $_POST[ 'dni_original'] );
$dni        = $conectar->qStr( $_POST[ 'dni'] );
$nombre     = $conectar->qStr( $_POST[ 'nombre'      ] );
$apellidos  = $conectar->qStr( $_POST[ 'apellidos'   ] );
$fechaNac   = $conectar->qSTR( $_POST['fechaNac']);
$correo     = $conectar->qStr( $_POST[ 'correo'      ] );
$tlf        = $_POST[ 'tlf'    ];
$dirección  = $conectar->qStr( $_POST[ 'dirección'   ] );
$ciudad     = $conectar->qStr( $_POST[ 'ciudad'      ] );
$provincia  = $conectar->qStr( $_POST[ 'provincia'   ] );
$codpost    = $_POST[ 'codpost'];

//Declaramos una variable modificar que actualice los datos del alumno cuyo DNI
// es el recogido en el input escondido (es decir, el dni original) para así
// poder llegar a sus datos y actualizarlos sin problema

$modificar = "UPDATE alumnos SET DNI=$dni, NOMBRE=$nombre, APELLIDOS=$apellidos,
FECHA_DE_NACIMIENTO=$fechaNac, CORREO_ELECTRÓNICO=$correo, TELÉFONO=$tlf, DIRECCIÓN=$dirección,
CIUDAD=$ciudad, PROVINCIA=$provincia, CÓDIGO_POSTAL=$codpost WHERE DNI=$dni_original";

$rs = $conectar->execute( $modificar ); // Ejecuta el modificar

// Realizamos un if donde si se ha podido conectar con la BBDD y se ha realizado
// el update aparece en pantalla: La modificación es correcta :)
// y si no aparece: No se ha hecho la modificación :(

if( $conectar->affected_rows() ) {
    echo 'La modificación es correcta :)';
} else { 
    echo 'No se ha hecho la modificación :(';
}

// Cerramos la conexión con la BBDD
include 'cerrarconexion.php';
?>