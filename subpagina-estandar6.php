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
    <title>Dos</title> <link rel="stylesheet" href="style.css">
</head>
<body class="dark">
    <div class="container subpage-container">
        <p><a href="index.php" class="back-to-home">&larr; Volver a la Página Principal</a></p>
        <div class="subpage-content">
            <img src="img/dos.jpg" alt="Imagen del Estándar 1" class="subpage-image"> <h2 class="subpage-title">Dos</h2> <p class="subpage-info">
                <h2>Autor - Santiago García-Clairac</h2>
            </p>
            <ul class="subpage-features">
                <li>Dos es un libro que me hizo pensar mucho sobre la relación entre las personas y la tecnología. Cuenta la historia de Robert, un chico que construye un robot al que llama Dos. Al principio todo parece un experimento divertido y un sueño hecho realidad, pero poco a poco las cosas se complican cuando el robot empieza a comportarse de forma extraña, como si tuviera pensamientos y sentimientos propios. Esa parte me pareció muy interesante, porque muestra cómo algo que creamos puede volverse impredecible.

Con el paso del tiempo, la relación entre Robert y Dos se vuelve tensa y hasta un poco inquietante. El robot empieza a tomar decisiones por sí mismo y eso hace que Robert pierda el control de lo que había creado. La historia te hace sentir muchas emociones: curiosidad, miedo y hasta tristeza, porque en el fondo se trata también de la soledad y de la necesidad de sentirse acompañado, aunque sea por una máquina.

Me gustó mucho cómo Santiago García-Clairac logra mezclar la ciencia ficción con temas muy humanos, como la responsabilidad, los límites y los sentimientos. Dos no solo es una historia sobre un robot, sino sobre lo que nos hace realmente humanos. Es un libro que te deja pensando, porque detrás de la tecnología siempre hay alguien con emociones, errores y sueños.</li>
            </ul>
        </div>
    </div>
</body>
</html>