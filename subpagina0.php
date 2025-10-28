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
    <title>Introducción</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="dark">
    <div class="container subpage-container">
        <p><a href="inde.php" class="back-to-home">&larr; Volver a la Página Principal</a></p>

        <div class="subpage-content">
            <h2 class="subpage-title">Reseñas Audiovisuales</h2>

            <!-- Video reproducible -->
            <video class="subpage-video" controls autoplay muted loop width="640" height="360">
                <source src="img/video.mp4" type="video/mp4">
                Tu navegador no soporta la reproducción de video.
            </video>
        </div>
    </div>
</body>
</html>
