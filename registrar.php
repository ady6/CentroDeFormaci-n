<?php

require 'conexion.php'; // Incluimos el php donde nos conectamos a la BBDD

// Declaramos variables asociadas a los nombres de lo que introduce
// el usuario en los campos del formulario

$dni        = $conectar->qStr( $_POST[ 'dni'         ] );
$nombre     = $conectar->qStr( $_POST[ 'nombre'      ] );
$apellidos  = $conectar->qStr( $_POST[ 'apellidos'   ] );
$fechaNac   = $conectar->qSTR( $_POST['fechaNac']);
$correo     = $conectar->qStr( $_POST[ 'correo'      ] );
$tlf        = $_POST[ 'tlf'    ];
$dirección  = $conectar->qStr( $_POST[ 'dirección'   ] );
$ciudad     = $conectar->qStr( $_POST[ 'ciudad'      ] );
$provincia  = $conectar->qStr( $_POST[ 'provincia'   ] );
$codpost    = $_POST[ 'codpost']; 
$aceptado   = $_POST[ 'aceptado'];

// Declaramos una variable insertar que realice el insert into de la BBDD
// para introducir los datos del formulario en la tabla de la BBDD

$insertar = "INSERT INTO alumnos VALUES ($dni,$nombre,$apellidos,$fechaNac,$correo,$tlf,
$dirección,$ciudad,$provincia,$codpost, $aceptado )";

// Ejecutamos el insert

$rs = $conectar->execute( $insertar );

// Realizamos un if donde si se ha podido conectar con la BBDD y se ha realizado
// el insert into aparece en pantalla: Se ha registrado correctamente al alumno :)
// y si no aparece: No se ha podido registrar al alumno, compruebe que todos
// los campos son correctos

if(  $conectar->affected_rows() ) {
    echo 'Se ha registrado correctamente al alumno :)';
} else {
    echo 'No se ha podido registrar al alumno, compruebe que todos los campos son correctos';
}

// Cerramos la conexión con la BBDD

include 'cerrarconexion.php';

?>