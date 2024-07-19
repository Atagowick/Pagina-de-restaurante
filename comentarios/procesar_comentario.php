
<?php 

// Incluir el archivo de conexión a la base de datos
include "../conexion/conexion.php";

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $comentario = $_POST["comentario"];
    $fecha = date('Y-m-d H:i:s');

    // Preparar la consulta SQL para insertar el comentario
    $sql = "INSERT INTO Opiniones (Correo, Comentario, FechaOpinion) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $correo, $comentario, $fecha);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Comentario enviado correctamente
        $response = array(
            'status' => 'success',
            'message' => 'Comentario enviado correctamente.'
        );
    } else {
        // Error al enviar el comentario
        $response = array(
            'status' => 'error',
            'message' => 'Error al enviar el comentario: ' . $stmt->error
        );
    }

    // Cerrar la conexión
    $stmt->close();
    $conexion->close();     

    // Devolver respuesta como JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>


