<?php
function conectarDB(): mysqli {
    $db = mysqli_connect('localhost', 'root', 'edw1nr0m3r0', 'proyecto');

    if (!$db) {
        die("Error: no se pudo conectar a la base de datos.");
    }

    return $db;
}


$conexion = conectarDB();
echo "¡Conexión exitosa!";
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>El Día Que Todo Cambió</title> <link rel="stylesheet" href="style.css">
</head>
<body class="dark">
    <div class="container subpage-container">
        <p><a href="index.php" class="back-to-home">&larr; Volver a la Página Principal</a></p>
        <div class="subpage-content">
            <img src="img/edqtd.jpg" alt="Imagen del Estándar 1" class="subpage-image"> <h2 class="subpage-title">El Día Que Todo Cambió</h2> <p class="subpage-info">
                <h2>Autor - Martín Blasco y Flor Canosa</h2>
            </p>
            <ul class="subpage-features">
                <li>Este libro me dejó con muchas emociones. Me hizo pensar en cómo la vida puede cambiar de un momento a otro, sin avisar, y en lo importante que es adaptarse y valorar lo que tenemos. A veces, vivimos tan rápido que no notamos las cosas que realmente importan: la familia, los amigos, los momentos pequeños. Los personajes me hicieron reflexionar sobre la importancia de no perder la esperanza, incluso cuando todo parece diferente o incierto.</li>
            </ul>
        </div>
    </div>
</body>
</html>