<?php
// Se declaran variables para conectar base de datos
$host="localhost";
$user="root";
$passw="";
$baseDatos="escolares";

//Se conecta base de datos
$mysqli = new mysqli($host, $user, $passw, $baseDatos);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
// Comentar mensaje de la conexión exitosa de la base de datos.
 echo "Conexión Exitosa. ".$mysqli->host_info . "\n<br />";
?>