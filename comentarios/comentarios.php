<?php 
include ("../conexion/conexion.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fusion</title>
    <link rel="stylesheet" href="../Estilos/comentarios.css">
    <!-- Enlazar Bootstrap CSS desde un CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="fondo-inicio">
<?php include '../Inicio/header.php'; ?>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-2">
                <div class="opiniones">
                    <h3>OPINIONES</h3>
                    <!-- formulario_comentarios -->
                    <form id="commentForm" action="procesar_comentario.php" method="POST">
                        <label for="correo">CORREO</label>
                        <input type="email" id="correo" name="correo" required>
                        <br><br>
                        <label for="comentario">COMENTARIO</label>
                        <textarea id="comentario" name="comentario" rows="4" required></textarea>
                        <br><br>
                        <button class="col-md-12" type="submit">Publicar</button>
                    </form>

                    <!-- Alerta mas reinicio de pagina tras publicar comentario -->
                    <script>
                        document.getElementById('commentForm').addEventListener('submit', function(event) {
                            event.preventDefault(); // Prevenir el envío por defecto

                            var formData = new FormData(this);

                            fetch('procesar_comentario.php', {
                                method: 'POST',
                                body: formData
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'success') {
                                    mostrarAlerta('¡Éxito!', data.message, 'alert-success');
                                    setTimeout(function() {
                                        window.location.reload(); // Recargar la página después de 3 segundos
                                    }, 1000);
                                } else {
                                    mostrarAlerta('¡Error!', data.message, 'alert-error');
                                }
                            })
                            .catch(error => {
                                console.error('Error al enviar el formulario:', error);
                            });
                        });

                        function mostrarAlerta(titulo, mensaje, clase) {
                            // Crear elemento de alerta
                            var alerta = document.createElement('div');
                            alerta.className = 'alert ' + clase;
                            alerta.textContent = titulo + ' ' + mensaje;

                            // Insertar alerta antes del formulario
                            var formulario = document.getElementById('commentForm');
                            formulario.parentNode.insertBefore(alerta, formulario.nextSibling);

                            // Eliminar la alerta después de 5 segundos
                            setTimeout(function() {
                                alerta.parentNode.removeChild(alerta);
                            }, 2500);
                        }
                    </script>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <div class="comentario">
                    <?php
                    // Consulta SQL para obtener los comentarios ordenados por fecha descendente
                    $sql = "SELECT Correo, Comentario, FechaOpinion FROM Opiniones ORDER BY FechaOpinion DESC";
                    $resultado = $conexion->query($sql);

                    if ($resultado->num_rows > 0) {
                        while ($fila = $resultado->fetch_assoc()) {
                            echo '<div class="comentario">';
                            echo '<h5>' . $fila["Correo"] . '</h5>';
                            echo '<p>' . $fila["Comentario"] . '</p>';
                            echo '</div>';
                        }
                    } else {
                        echo "No hay comentarios aún.";
                    }

                    // Cerrar la conexión
                    $conexion->close();
                    ?>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
</body>
<footer>
    <?php include '../inicio/footer.php'; ?>
</footer>
</html>
