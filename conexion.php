<?php

// PHP que será requerido en todos nuestros PHP ya que con
// este establecemos la conexión a la BBDD

include( '../../adodb5/adodb.inc.php' ); // Incluimos las librerías de ADOdb

$conectar = newADOConnection( 'mysqli' ); // Creamos la variable conectar, con la que crear una conexión

// Establecemos para crear esta conexión todos los datos necesarios

$host	= 'localhost:3306';
$user	= 'root';
$pwd	= 'curso';
$dbname	= 'hito1';

$conectar->connect($host, $user, $pwd, $dbname); // Y nos conectamos


?>