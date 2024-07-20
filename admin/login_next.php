<?php
include "../conexion/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dni = $_POST['dni'];
    $password = $_POST['password'];

    // Preparar y enlazar
    $stmt = $conexion->prepare("SELECT * FROM Admin WHERE Dni = ? AND Contrasena = ?");
    $stmt->bind_param("is", $dni, $password);
// Prueba
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Inicio de sesión exitoso, mostrar alerta y redirigir después de unos segundos
        echo "<script>
            alert('Inicio de sesión exitoso');
            setTimeout(function() {
                window.location.href = '../admin/vistaadmin.php';
            }, 1000);                      // 1 segundos de espera
        </script>";
    } else {
        echo "<script>
        alert('DNI o Contraseña incorrectas');
        setTimeout(function() {
            window.location.href = '../admin/login.php';
        }, 0);                      // 0 segundos de espera
    </script>";
    }

    $stmt->close();
}
$conexion->close();
?>
