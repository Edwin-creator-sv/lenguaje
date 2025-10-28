<?php
function conectarDB(): mysqli {
    $db = mysqli_connect('localhost', 'root', 'edw1nr0m3r0', 'proyecto');

    if (!$db) {
        die("Error: no se pudo conectar a la base de datos.");
    }

    return $db;
}


$conexion = conectarDB();
echo "";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Introducción</title> <link rel="stylesheet" href="style.css">
</head>
<body class="dark">
    <div class="container subpage-container">
        <p><a href="index.php" class="back-to-home">&larr; Volver a la Página Principal</a></p>
        <div class="subpage-content">
            <video src="img/video.mp4" alt="Imagen del Estándar 1" class="subpage-video"> <h2 class="subpage-title">Estándar 1: ISO/IEC 27001</h2> <p class="subpage-info">
               </p>
               </video>
               </div>
    </div>
</body>
</html>