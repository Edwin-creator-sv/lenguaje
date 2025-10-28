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
    <title>Un Cielo En Llamas</title> <link rel="stylesheet" href="style.css">
</head>
<body class="dark">
    <div class="container subpage-container">
        <p><a href="inde.php" class="back-to-home">&larr; Volver a la Página Principal</a></p>
        <div class="subpage-content">
            <img src="img/cielo.jpg" alt="Imagen del Estándar 1" class="subpage-image"> <h2 class="subpage-title">Un Cielo En Llamas</h2> <p class="subpage-info">
                <h2>Autor - África Vázquez Beltrán</h2>
            </p>
            <ul class="subpage-features">
                <li>Este libro me tuvo con los nervios de punta, pero también me hizo sentir mucha admiración por los personajes. A través de sus luchas y su valentía, entendí que la esperanza puede sobrevivir incluso en medio del caos. Hay escenas que realmente te tocan el corazón y te hacen pensar en la importancia de no rendirse, aunque el mundo parezca desmoronarse. Al final, me quedé con una sensación muy bonita: que siempre hay una luz, incluso entre las llamas.</li>
            </ul>
        </div>
    </div>
</body>
</html>