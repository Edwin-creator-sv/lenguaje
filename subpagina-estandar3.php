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
                <li><p>Esta historia nos sumerge en una trama intensamente misteriosa y profunda dentro de la Academia Wirta, un escenario de élite que esconde un turbio sistema de tráfico de dones. A través de la protagonista, Brigit Strought, la historia describe cómo las apariencias de orden y prestigio esconden una verdad oscura y siniestra.</p>
                    <p>La narrativa logra ser un espejo de la realidad, obligándonos a cuestionar la autoridad y las estructuras que se dan por sentadas. El arco de Brigit es un poderoso llamado al valor personal; ella debe rechazar la conveniencia del poder (el trasplante) para defender su propia integridad.</p>
                    <p>La lección central es clara: la verdad siempre merece ser descubierta, por dolorosa que sea. Incluso en el entorno más opresivo y corrupto (la Academia y el Consejo), el relato demuestra que la esperanza yace en la capacidad de resistencia. Brigit nos enseña que el verdadero poder no es un don físico, sino la valentía de alzar la voz para marcar una diferencia, eligiendo la moralidad por encima de la aceptación social.</p>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>