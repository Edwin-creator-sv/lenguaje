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
    <title>El Olympos</title> <link rel="stylesheet" href="style.css">
</head>
<body class="dark">
    <div class="container subpage-container">
        <p><a href="index.php" class="back-to-home">&larr; Volver a la Página Principal</a></p>
        <div class="subpage-content">
            <img src="img/cielo.jpg" alt="Imagen del Estándar 1" class="subpage-image"> <h2 class="subpage-title">Un Cielo En Llamas</h2> <p class="subpage-info">
                <h2>Autor - África Vázquez Beltrán</h2>
            </p>
            <ul class="subpage-features">
                <li>Pregunta 1: ¿Qué te transmitió el título Un cielo en llamas?
Respuesta:
Para mí, simboliza el caos y la esperanza al mismo tiempo. Aunque todo parece destruirse, los personajes siguen adelante, demostrando que incluso en medio del fuego hay lugar para la valentía y la fe.</li>
                <li>Pregunta 2: ¿Qué sentimiento predominó en ti al leer este libro?
Respuesta:
Sentí mucha tensión, pero también admiración. Me conmovió ver cómo los personajes se apoyan y luchan juntos. Al final, me dejó una sensación de esperanza: aunque el mundo arda, siempre hay algo por lo que vale la pena seguir.</li>        
            </ul>
        </div>
    </div>
</body>
</html>