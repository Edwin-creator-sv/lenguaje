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
    <title>Supervivencia Extrema</title> <link rel="stylesheet" href="style.css">
</head>
<body class="dark">
    <div class="container subpage-container">
        <p><a href="index.php" class="back-to-home">&larr; Volver a la Página Principal</a></p>
        <div class="subpage-content">
            <img src="img/supervivencia-extrema.jpg" alt="Imagen del Estándar 1" class="subpage-image"> <h2 class="subpage-title">Supervivencia Extrema</h2> <p class="subpage-info">
                <h2>Autor - Arturo Padilla</h2>
            </p>
            <ul class="subpage-features">
                <li>Pregunta 1: ¿Qué te enseñó esta historia sobre la amistad y el trabajo en equipo?
               Respuesta:
Aprendí que en los momentos más duros, la verdadera fuerza está en la unión. Los personajes de Supervivencia extrema logran sobrevivir gracias a que confían unos en otros y dejan a un lado sus diferencias. Me hizo pensar que la amistad no se demuestra con palabras, sino con acciones cuando más se necesita.
</li>
                <li>Pregunta 2: ¿Qué escena del libro te impactó más y por qué?
Respuesta:
La parte en la que los protagonistas enfrentan la tormenta me pareció muy intensa. Sentí su miedo y su cansancio, pero también su determinación. Esa escena me mostró que, aunque el entorno sea hostil, el espíritu humano siempre busca una manera de salir adelante.</li>
            </ul>
        </div>
    </div>
</body>
</html>