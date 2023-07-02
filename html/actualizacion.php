<?php
require_once('../php/validate_session.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/actualizar_contraseña.css">
</head>

<body>
    <h1> recuperar tu contraseña</h1>
    <div class="container col-11 col-md-5">
        <p>Ingresa tu nueva contraseña.</p>
        <form action="../php/actualizar_contraseña.php" class="form" method="post">
            <div class="form-correo">
                <input type="password" placeholder="Ingrese la nueva contraseña" class="contraseña" name="contraseña">
            </div>
            <div class="form-button">
                <a class="salir " href="../php/cerrar_contraseña.php">Salir</a>
                <button class="enviar">enviar</button>
            </div>
        </form>
    </div>


</body>

</html>