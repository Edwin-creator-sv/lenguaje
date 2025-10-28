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
        <p><a href="inde.php" class="back-to-home">&larr; Volver a la Página Principal</a></p>
        <div class="subpage-content">
            <img src="img/supervivencia-extrema.jpg" alt="Imagen del Estándar 1" class="subpage-image"> <h2 class="subpage-title">Supervivencia Extrema</h2> <p class="subpage-info">
                <h2>Autor - Arturo Padilla</h2>
            </p>
            <ul class="subpage-features">
                <li>Supervivencia extrema es una historia que te atrapa desde las primeras páginas. Arturo Padilla nos lleva a un escenario límite, donde un grupo de jóvenes debe enfrentarse a una situación inesperada que pone a prueba no solo su resistencia física, sino también su fortaleza emocional.

El autor logra que sientas el miedo, la tensión y la esperanza junto a los protagonistas. Cada personaje reacciona de una forma diferente ante el peligro, mostrando lo mejor y lo peor del ser humano cuando la vida está en riesgo. Lo que más impacta es cómo, entre el caos, surgen valores como la amistad, la solidaridad y la valentía.

Padilla escribe con un lenguaje cercano, ágil y directo, lo que hace que la lectura sea intensa y fácil de seguir. A través de las páginas, uno se pregunta: ¿cómo reaccionaría yo en una situación así?

En definitiva, Supervivencia extrema no es solo una historia de acción, sino una reflexión sobre los límites del ser humano, la importancia de trabajar en equipo y el deseo profundo de seguir adelante, incluso cuando todo parece perdido.</li>
            </ul>
        </div>
    </div>
</body>
</html>


