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
} else {
    header("Location: ../Inicio/body.php");
}

// La conexión se usa automáticamente con las conSsultas, por lo que no es necesario seleccionar la base de datos explícitamente
?>
