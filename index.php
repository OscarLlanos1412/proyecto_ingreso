<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ingreso</title>
</head>
<body>
    <form action="php/validar.php" method="POST" class="form">
        <h1>Inicio De Sesion</h1>
        <p class="ti-user">Usuario</p>
        <input type="text" placeholder="Digite su usuario" name="usuario" class="user" required autocomplete="off">
        <p class="ti-cons">Contraseña</p>
        <input type="password" placeholder="Digite su contraseña" name="clave" class="clave" required autocomplete="off"> <br><br>
        <input type="submit" placeholder=" Iniciar Sesion" name="enviar" class="enviar" required autocomplete="off">
    </form>
</body>
</html>