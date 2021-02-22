<?php
    require_once('../conexion/conec.php');
    $nombre = $_SESSION['nombre'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_admin.css">
    <title>Administrador</title>
</head>
<body>
    <button class="btn"><a href="../php/cerrarsesion.php" class="bton">Cerrar Sesion</a></button>
    <div class="contenedor">
        <h1>Bienvenido Administrador <?php echo $nombre; ?></h1>
    </div>
    
</body>
</html>