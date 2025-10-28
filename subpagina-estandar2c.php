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
                <li>Pregunta 1: ¿Cómo interpretas el título El día que todo cambió?
Respuesta:
Para mí, el título representa ese momento en la vida donde todo se transforma, no solo afuera, sino también dentro de uno mismo. Para Paula, el meteorito no solo cambia su mundo, también la hace enfrentar sus miedos, su pasado y la oscuridad que lleva dentro.
</li>
                <li>Pregunta 2: ¿Qué mensaje te dejó la historia de Paula y su padre?
Respuesta:
Me hizo reflexionar sobre la importancia del perdón y de la confianza. A veces, las personas regresan a nuestras vidas y no sabemos si creerles, pero este libro muestra que abrir el corazón puede ser el primer paso para sanar.</li>      
            </ul>
        </div>
    </div>
</body>
</html>