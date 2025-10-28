<?php
session_start();

function conectarDB(): mysqli {
    $db = mysqli_connect('localhost', 'root', 'edw1nr0m3r0', 'proyecto');

    if (!$db) {
        die("Error: no se pudo conectar a la base de datos.");
    }

    return $db;
}

$conexion = conectarDB();

// Para este ejemplo asumimos que el usuario ya está logueado
// $_SESSION['id_usuario'] contiene el ID del usuario
if (!isset($_SESSION['id_usuario'])) {
    die("Debes iniciar sesión para responder.");
}

// Definir la pregunta del foro que se va a responder
$id_foro = 1; // ID de la publicación que quieres mostrar
$query_foro = "SELECT titulo, mensaje FROM foro WHERE id_foro = $id_foro";
$resultado_foro = mysqli_query($conexion, $query_foro);
$foro = mysqli_fetch_assoc($resultado_foro);

// Manejar el envío de la respuesta
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['respuesta'])) {
    $id_usuario = $_SESSION['id_usuario'];
    $contenido = mysqli_real_escape_string($conexion, $_POST['respuesta']);

    $insert = "INSERT INTO respuestas (id_foro, id_usuario, contenido) VALUES ($id_foro, $id_usuario, '$contenido')";
    if (mysqli_query($conexion, $insert)) {
        $mensaje_exito = "¡Respuesta guardada correctamente!";
    } else {
        $mensaje_error = "Error al guardar la respuesta: " . mysqli_error($conexion);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro - Responder</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f5f5f5; }
        .foro-container { background: white; padding: 20px; border-radius: 8px; max-width: 700px; margin: auto; }
        h2 { color: #007bff; }
        textarea { width: 100%; height: 120px; padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc; }
        button { padding: 10px 20px; border: none; border-radius: 5px; background: #007bff; color: white; cursor: pointer; }
        .mensaje { margin: 10px 0; font-weight: bold; }
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>

<div class="foro-container">
    <h2><?= htmlspecialchars($foro['titulo']) ?></h2>
    <p><?= nl2br(htmlspecialchars($foro['mensaje'])) ?></p>

    <?php if (!empty($mensaje_exito)): ?>
        <p class="mensaje success"><?= $mensaje_exito ?></p>
    <?php elseif (!empty($mensaje_error)): ?>
        <p class="mensaje error"><?= $mensaje_error ?></p>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="respuesta">Tu respuesta:</label>
        <textarea name="respuesta" id="respuesta" required></textarea>
        <button type="submit">Enviar respuesta</button>
    </form>
</div>

</body>
</html>
