<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas</title>
    <link rel="stylesheet" href="../Estilos/ofertas.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="fondo-inicio">
<?php include '../Inicio/header.php'; ?>
    <div class="container mt-5">
        <?php
        // Conexión a la base de datos
        include "../conexion/conexion.php";

        // Consultar la base de datos para obtener las ofertas
        $result = $conexion->query("SELECT * FROM Ofertas WHERE Activa = 1");

        if ($result->num_rows > 0) {
            // Mostrar el carrusel con las ofertas activas
            echo '<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">';
            $active = true;
            while ($row = $result->fetch_assoc()) {
                $activeClass = $active ? 'active' : '';
                echo '<div class="carousel-item ' . $activeClass . '">
                        <img class="d-block w-100" src="../img/' . $row['Imagen'] . '" alt="Oferta">
                      </div>';
                $active = false;
            }
            echo '</div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
                  </div>';
        } else {
            // Mostrar el mensaje y la imagen si no hay ofertas
            echo '<div class="row">
                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                        <div class="noferta">
                            <img src="../img/nofertas.png" class="img-fluid" alt="No Ofertas">
                        </div>
                    </div>
                  </div>
                  <br><br><br>
                  <div class="col-md-12 d-flex justify-content-center align-items-center">
                        <div class="parrafo">
                            <h1>Lo sentimos</h1>
                            <p>Por el momento no contamos con promociones, pronto tendremos algo nuevo para ti.</p>
                        </div>   
                  </div>';
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: 2000
            });
        });
    </script>

    <footer>
        <?php include '../Inicio/footer.php'; ?>
    </footer>
</body>
</html>
