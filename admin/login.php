<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="../Estilos/login.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4">
            <h2 class="text-center">Inicio de Sesión</h2>
            <form action="login_next.php" method="post">
                <div class="form-group">
                    <label for="dni">DNI:</label><br>
                    <input type="text" class="form-control" id="dni" name="dni" required><br>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label><br>
                    <input type="password" class="form-control" id="password" name="password" required><br><br>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>

            </form>
        </div>
    </div>
</body>
<!-- PRUEBA 2 -->
</html>
