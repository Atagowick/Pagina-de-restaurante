<?php
// Parámetros de conexión a la base de datos
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$BD = "fusion";

// Crear una conexión usando MySQLi
$conexion = new mysqli($servidor, $usuario, $contrasena, $BD);

// Verificar la conexión
if ($conexion->connect_error) {
    die('<strong>No pudo conectarse:</strong> ' . $conexion->connect_error);
} 
?>
