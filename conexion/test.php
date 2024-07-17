<?php
include ('conexion.php');

if ($conexion->connect_error) {
    die('<strong>No pudo conectarse:</strong> ' . $conexion->connect_error);
} else {
    echo "Conexión exitosa.";
}
?>