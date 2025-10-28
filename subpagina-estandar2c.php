<?php
session_start();

// Título del foro de esta subpágina
$foro_titulo = 'El Día Que Todo Cambió'; 

// Si se envían respuestas, solo simulamos captura (no se guarda en DB)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $respuestas = $_POST['respuestas'] ?? [];
    echo "<div style='background:#d4edda;color:#155724;padding:10px;margin-bottom:20px;border-radius:5px;'>";
    echo "<strong>Respuestas enviadas:</strong><br>";
    foreach ($respuestas as $preg => $resp) {
        echo "<strong>$preg:</strong> " . htmlspecialchars($resp) . "<br>";
    }
    echo "</div>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($foro_titulo) ?></title>
    <link rel="stylesheet" href="style.css">
    <style>
        textarea { width:100%; height:60px; margin-top:5px; margin-bottom:15px; padding:10px; border-radius:5px; border:1px solid #ccc; }
        button { background-color: #007bff; color: white; padding:10px 20px; border:none; border-radius:5px; cursor:pointer; }
        button:hover { background-color:#0056b3; }
    </style>
</head>
<body class="dark">
<div class="container subpage-container">
    <p><a href="inde.php" class="back-to-home">&larr; Volver a la Página Principal</a></p>
    <div class="subpage-content">
        <img src="img/edqtd.jpg" alt="<?= htmlspecialchars($foro_titulo) ?>" class="subpage-image">
        <h2 class="subpage-title"><?= htmlspecialchars($foro_titulo) ?></h2>
        <p class="subpage-info"><h2>Autor - Martín Blasco y Flor Canosa</h2></p>

        <form method="post">
            <ul class="subpage-features">
                <li>
                    <strong>Pregunta 1: ¿Cómo interpretas el título El día que todo cambió?</strong>
                    <textarea name="respuestas[Pregunta 1]" placeholder="Escribe tu respuesta aquí..."></textarea>
                </li>
                <li>
                    <strong>Pregunta 2: ¿Qué mensaje te dejó la historia de Paula y su padre?</strong>
                    <textarea name="respuestas[Pregunta 2]" placeholder="Escribe tu respuesta aquí..."></textarea>
                </li>
            </ul>
            <button type="submit">Enviar respuestas</button>
        </form>
    </div>
</div>
</body>
</html>
