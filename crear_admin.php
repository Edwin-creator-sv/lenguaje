<?php
// Iniciar sesión si se desea usar autenticación después
session_start();

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'edw1nr0m3r0', 'proyecto');
    if (!$db) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }
    return $db;
}

$conexion = conectarDB();

// Datos del nuevo administrador
$nombre = "Administrador";
$correo = "admin@gmail.com";
$contraseña = "admin123";

// Encriptar contraseña de forma segura
$hash_contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

// Verificar si el correo ya existe
$check = mysqli_prepare($conexion, "SELECT id_usuario FROM usuarios WHERE correo = ?");
mysqli_stmt_bind_param($check, "s", $correo);
mysqli_stmt_execute($check);
mysqli_stmt_store_result($check);

if (mysqli_stmt_num_rows($check) > 0) {
    echo "El administrador ya existe.";
} else {
    // Insertar nuevo administrador
    $stmt = mysqli_prepare($conexion, "INSERT INTO usuarios (nombre, correo, contraseña, tipo) VALUES (?, ?, ?, 'administrador')");
    mysqli_stmt_bind_param($stmt, "sss", $nombre, $correo, $hash_contraseña);
    if (mysqli_stmt_execute($stmt)) {
        echo "Administrador creado correctamente.";
    } else {
        echo "Error al crear el administrador: " . mysqli_error($conexion);
    }
    mysqli_stmt_close($stmt);
}

mysqli_stmt_close($check);
mysqli_close($conexion);
?>
