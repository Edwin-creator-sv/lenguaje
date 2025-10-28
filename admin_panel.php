<?php
session_start();

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'edw1nr0m3r0', 'proyecto');
    if(!$db){
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }
    return $db;
}

$conexion = conectarDB();

// Verificar que sea administrador
if(!isset($_SESSION['id_usuario']) || $_SESSION['tipo'] !== 'administrador'){
    header("Location: login.php");
    exit;
}

// Foros que queremos mostrar
$foros = [
    'Supervivencia extrema',
    'El día que todo cambió',
    'Academia Wirta',
    'Un cielo en llamas',
    'La ciudad de las chimeneas encendidas',
    'Dos'
];

// Convertir array a string para SQL
$foros_in = "'" . implode("','", $foros) . "'";

// Consultar todas las publicaciones y sus respuestas
$query = "
SELECT f.id_foro, f.titulo AS foro_titulo, f.mensaje AS pregunta, f.fecha_publicacion, u.nombre AS autor,
       r.id_respuesta, r.contenido AS respuesta, r.fecha_respuesta, ur.nombre AS respondido_por
FROM foro f
JOIN usuarios u ON f.id_usuario = u.id_usuario
LEFT JOIN respuestas r ON f.id_foro = r.id_foro
LEFT JOIN usuarios ur ON r.id_usuario = ur.id_usuario
WHERE f.titulo IN ($foros_in)
ORDER BY FIELD(f.titulo, $foros_in), f.id_foro ASC, r.fecha_respuesta ASC
";

$resultado = mysqli_query($conexion, $query);
if(!$resultado){
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel del Administrador - Foro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 20px;
        }
        h1 {
            background: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 10px;
        }
        .foro {
            background: white;
            padding: 15px;
            margin-bottom: 25px;
            border-radius: 8px;
            box-shadow: 0 0 5px #ccc;
        }
        .pregunta {
            margin-bottom: 10px;
        }
        .respuesta {
            margin-left: 30px;
            background: #eef3ff;
            padding: 10px;
            border-left: 3px solid #007bff;
            border-radius: 5px;
            margin-bottom: 5px;
        }
        .autor {
            color: #555;
            font-size: 0.9em;
        }
        h4 {
            margin-top: 15px;
        }
    </style>
</head>
<body>

<h1>Panel del Administrador - Foro</h1>

<?php
$foro_actual = null;
while($fila = mysqli_fetch_assoc($resultado)):
    // Nueva publicación
    if ($foro_actual !== $fila['id_foro']):
        if ($foro_actual !== null) echo "</div>"; // Cerrar div anterior
        $foro_actual = $fila['id_foro'];
?>
        <div class="foro">
            <h3><?= htmlspecialchars($fila['foro_titulo']) ?></h3>
            <div class="pregunta">
                <p><strong>Pregunta:</strong> <?= nl2br(htmlspecialchars($fila['pregunta'])) ?></p>
                <p class="autor">Publicado por: <?= htmlspecialchars($fila['autor']) ?> | Fecha: <?= $fila['fecha_publicacion'] ?></p>
            </div>
            <h4>Respuestas:</h4>
<?php
    endif;

    // Mostrar respuesta si existe
    if ($fila['id_respuesta']):
?>
        <div class="respuesta">
            <p><?= nl2br(htmlspecialchars($fila['respuesta'])) ?></p>
            <p class="autor">Por: <?= htmlspecialchars($fila['respondido_por']) ?> | Fecha: <?= $fila['fecha_respuesta'] ?></p>
        </div>
<?php
    endif;
endwhile;

// Cerrar último div de foro
if ($foro_actual !== null) echo "</div>";
?>

</body>
</html>
