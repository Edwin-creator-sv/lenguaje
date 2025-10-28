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
                <li>Pregunta 1: ¿Qué tema principal crees que aborda la historia y por qué es importante?
Respuesta: El libro trata sobre la importancia de las decisiones y cómo cada acción tiene consecuencias. Me hace reflexionar sobre que incluso los momentos pequeños pueden cambiar el rumbo de nuestra vida o la de otros, y que debemos actuar con responsabilidad y conciencia.</li>
                <li>Pregunta 2: ¿Qué personaje te llamó más la atención y por qué?
Respuesta: Me llamó mucho la atención el personaje principal porque muestra cómo la valentía y la inteligencia se combinan para enfrentar problemas inesperados. Es inspirador ver cómo aprende de sus errores y se preocupa por los demás mientras sigue adelante.</li>          
             </ul>
        </div>
    </div>
</body>
</html>