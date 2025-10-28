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
    <title>La Ciudad de las Chimeneas Encendidas</title> <link rel="stylesheet" href="style.css">
</head>
<body class="dark">
    <div class="container subpage-container">
        <p><a href="index.php" class="back-to-home">&larr; Volver a la Página Principal</a></p>
        <div class="subpage-content">
            <img src="img/ciudad.jpg" alt="Imagen del Estándar 1" class="subpage-image"> <h2 class="subpage-title">La Ciudad de las Chimeneas Encendidas</h2> <p class="subpage-info">
                <h2>Autor - Jorge Galán</h2>
            </p>
            <ul class="subpage-features">
                <li>Este libro me pareció misterioso y muy profundo. Me encantó cómo el autor describe una ciudad llena de secretos y cómo los personajes buscan la verdad en medio del humo y las apariencias. Me hizo pensar en la realidad: a veces vivimos rodeados de cosas que parecen normales, pero que en el fondo no lo son. Aprendí que hay que tener el valor de cuestionar lo que está mal, de no quedarse callado. La historia me dejó claro que la verdad puede ser difícil, pero siempre vale la pena descubrirla. Además, me enseñó que incluso en los lugares más oscuros siempre hay esperanza, y que las personas valientes pueden marcar la diferencia si se atreven a ver más allá de lo que todos aceptan.</li>
            </ul>
        </div>
    </div>
</body>
</html>