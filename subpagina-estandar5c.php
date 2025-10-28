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
                <li>Pregunta 1: ¿Qué simbolizan las chimeneas dentro de la historia?
Respuesta:
Creo que las chimeneas representan el poder, la rutina y la contaminación no solo del aire, sino también de la sociedad. Muestran cómo las injusticias se vuelven parte del paisaje cuando las personas dejan de mirar más allá del humo.</li>
                <li>Pregunta 2: ¿Qué enseñanza te dejó este libro?
Respuesta:
Me enseñó que el cambio comienza cuando alguien se atreve a ver lo que los demás ignoran. Aunque el entorno esté lleno de humo y oscuridad, siempre hay quienes conservan la luz y luchan por un futuro más justo.</li> 
            </ul>
        </div>
    </div>
</body>
</html>