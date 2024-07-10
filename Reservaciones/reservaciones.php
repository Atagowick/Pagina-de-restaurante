<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000; /* Fondo negro */
            color: #fff;
        }
        .card {
            background: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente */
            color: #fff;
        }
        .card img {
            opacity: 0.8; /* Ajuste de opacidad de la imagen */
        }
        .card-title, .card-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        .btn {
            background: rgba(255, 255, 255, 0.3); /* Fondo semi-transparente para los botones */
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">RESERVACIONES</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="../img/restaurant-1.jpg" class="card-img" alt="Restaurant 1">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                        <h4 class="card-title">RESTAURANT</h4>
                        <p class="card-text">Av. Calle Moquegua 141</p>
                        <a href="#" class="btn btn-primary mb-2">RESERVA</a>
                        <a href="#" class="btn btn-primary mb-2">PIDE ONLINE</a>
                        <a href="#" class="btn btn-primary">CARTA</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="../img/restaurant-2.jpg" class="card-img" alt="Restaurant 2">
                    <div class="card-img-overlay d-flex flex-column justify-content-center align-items-center">
                        <h4 class="card-title">RESTAURANT</h4>
                        <p class="card-text">JR. urbano 24JR. urbano 2</p>
                        <a href="#" class="btn btn-primary mb-2">RESERVA</a>
                        <a href="#" class="btn btn-primary mb-2">PIDE ONLINE</a>
                        <a href="#" class="btn btn-primary">CARTA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
