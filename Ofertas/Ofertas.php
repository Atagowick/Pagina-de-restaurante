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
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../img/carrucel-1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/carrucel-2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../img/carrucel-1.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- <p class="Titulo text-left mb-4">OFERTAS</p>
        <br><br>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="image-container">
                        <img src="../img/restaurant-1.jpg" class="card-img" alt="Restaurant 1">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                        <h4 class="rest">RESTAURANT</h4>
                        <p class="card-text">Av. Calle Moquegua 141</p>
                        <a href="#" class="btn btn-primary mb-2">RESERVA</a>
                        <a href="#" class="btn btn-primary mb-2">PIDE ONLINE</a>
                        <a href="#" class="btn btn-primary">CARTA</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="image-container">
                        <img src="../img/restaurant-2.jpg" class="card-img" alt="Restaurant 2">
                        <div class="image-overlay"></div>
                    </div>
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                        <h4 class="rest">RESTAURANT</h4>
                        <p class="card-text">JR. urbano 24JR. urbano 2</p>
                        <a href="#" class="btn btn-primary mb-2">RESERVA</a>
                        <a href="#" class="btn btn-primary mb-2">PIDE ONLINE</a>
                        <a href="#" class="btn btn-primary">CARTA</a>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
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
            </div>
    </div>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

