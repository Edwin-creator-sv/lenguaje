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
$error = "";
$exito = "";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $tipo = 'encuestado'; 

    $hash = password_hash($contraseña, PASSWORD_DEFAULT);

    $stmt = $conexion->prepare("SELECT id_usuario FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if($resultado->num_rows > 0){
        $error = "El correo ya está registrado.";
    } else {
        $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, correo, contraseña, tipo) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $correo, $hash, $tipo);
        if($stmt->execute()){
            $exito = "Registro exitoso. Ahora puedes <a href='login.php'>iniciar sesión</a>.";
        } else {
            $error = "Error al registrar usuario.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro de Usuario</title>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background-color: #f4f6f9;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
    }

    h2 {
        color: #007bff;
        text-align: center;
        margin-bottom: 20px;
        border-bottom: 1px solid #cfd9de;
        width: 80%;
        padding-bottom: 10px;
    }

    .container {
        background-color: white;
        padding: 30px 50px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        max-width: 450px;
        width: 90%;
        text-align: left;
    }

    label {
        font-weight: 500;
        color: #333;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-top: 6px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 15px;
        transition: all 0.2s ease;
    }

    input:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0,123,255,0.3);
    }

    .btn-1 {
        background: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 15px;
        font-weight: 500;
        margin-top: 10px;
        transition: background 0.3s ease;
    }

    .btn-1:hover {
        background: #0056b3;
    }

    p {
        margin-top: 15px;
        text-align: center;
        font-size: 14px;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    /* Mensajes */
    .mensaje-error {
        color: red;
        text-align: center;
        margin-bottom: 10px;
    }

    .mensaje-exito {
        color: green;
        text-align: center;
        margin-bottom: 10px;
    }
</style>
</head>

<body>
    <div class="container">
        <h2>Registro de Usuario</h2>

        <?php 
            if(!empty($error)) echo "<p class='mensaje-error'>$error</p>";
            if(!empty($exito)) echo "<p class='mensaje-exito'>$exito</p>";
        ?>

        <form method="POST" action="">
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required><br><br>

            <label>Correo:</label><br>
            <input type="email" name="correo" required><br><br>

            <label>Contraseña:</label><br>
            <input type="password" name="contraseña" required><br><br>

            <button type="submit" class="btn-1">Registrar</button>
        </form>

        <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión aquí</a>.</p>
    </div>
</body>
</html>
