<?php
include "../conexion/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];

    // Preparar y enlazar
    $stmt = $conexion->prepare("INSERT INTO Usuarios (Nombre, Correo) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $correo);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }

    $stmt->close();
}
$conexion->close();
?>
