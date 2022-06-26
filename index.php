<?php
include "includes/conexionDB.php";

$resultado = $mysqli->query("SELECT * FROM alumnos ORDER BY apellidos,nombre");

echo "<h1 style='text-align:center;'>Consulta de Alumnos</h1>";
echo "<p>Resultados de la consulta</p>";
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    echo "<p>".$fila['id_alumno']."- ".$fila['apellidos'].", ".$fila['nombre']." - ".$fila['carrera']."</p>";
}
include "includes/cerrarDB.php"
?>