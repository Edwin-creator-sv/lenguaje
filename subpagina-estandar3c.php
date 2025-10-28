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
    <title>Academia Wirta</title> <link rel="stylesheet" href="style.css">
</head>
<body class="dark">
    <div class="container subpage-container">
        <p><a href="index.php" class="back-to-home">&larr; Volver a la Página Principal</a></p>
        <div class="subpage-content">
            <img src="img/acadamia wiirta.jpg" alt="Imagen del Estándar 1" class="subpage-image"> <h2 class="subpage-title">Academia Wirta</h2> <p class="subpage-info">
                <h2>Autor - Laia Soler</h2>
            </p>
            <ul class="subpage-features">
                <li>Pregunta 1: ¿Qué opinas sobre la idea de que no se necesitan poderes para ser especial?
Respuesta:
Me encantó ese mensaje. Creo que todos tenemos algo que nos hace únicos, aunque no sea visible. El libro me recordó que el verdadero poder está en conocerse a uno mismo y en atreverse a ser diferente.</li>
                <li>Pregunta 2: ¿Con qué personaje te sentiste más identificado y por qué?
Respuesta:
Me identifiqué con los personajes que dudaban de su valor, porque muchas veces uno también se siente “sin poder” o inseguro. Pero la historia me enseñó que todos tenemos algo que aportar si creemos en nosotros mismos.</li>
            </ul>
        </div>
    </div>
</body>
</html>