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
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="opiniones">
                    <h3>OPINIONES</h3>
                    <form>
                        <div class="form-group">
                            <label for="correo">CORREO</label>
                            <input type="email" class="form-control" id="correo">
                        </div>
                        <div class="form-group">
                            <label for="comentario">COMENTARIO</label>
                            <textarea class="form-control" id="comentario" rows="4"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </form>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <div class="comentario">
                    <h5>Juan Soto</h5>
                    <p>Muy bueno, solo que falta mejorar un poco la atención al cliente.</p>
                </div>
                <div class="comentario">
                    <h5>Agust Flores</h5>
                    <p>Excelente, una recomendación es que vayan los días miércoles que normalmente suele haber ofertas.</p>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
<?php include '../inicio/footer.php'; ?>
</footer>