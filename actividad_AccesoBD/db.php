<?php
$host = 'localhost';
$db = 'Actividad';
$user = 'root';
$password = '';

$conexion = new mysqli($host, $user, $password, $db);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
