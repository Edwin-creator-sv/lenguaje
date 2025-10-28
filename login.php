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


if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $stmt = $conexion->prepare("SELECT id_usuario, nombre, tipo, contraseña FROM usuarios WHERE correo = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if($resultado->num_rows === 1){
        $usuario = $resultado->fetch_assoc();

        if(password_verify($contraseña, $usuario['contraseña'])){
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nombre'] = $usuario['nombre'];
            $_SESSION['tipo'] = $usuario['tipo'];

            if($usuario['tipo'] === 'administrador'){
                header("Location: index.php");
            } else {
                header("Location: index.php");
            }
            exit;
        } else {
            $error = "Contraseña incorrecta.";
        }
    } else {
        $error = "Usuario no encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inicio de Sesión</title>
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(135deg, #007bff, #00c6ff);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0;
    }

    .login-container {
        background-color: #fff;
        padding: 40px 50px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        text-align: center;
        width: 100%;
        max-width: 400px;
        transition: transform 0.3s ease-in-out;
    }

    .login-container:hover {
        transform: scale(1.02);
    }

    h2 {
        margin-bottom: 20px;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    label {
        text-align: left;
        font-weight: 600;
        color: #555;
    }

    input[type="email"],
    input[type="password"] {
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-size: 16px;
        outline: none;
        transition: border-color 0.3s;
    }

    input[type="email"]:focus,
    input[type="password"]:focus {
        border-color: #007bff;
    }

    button {
        background-color: #007bff;
        color: white;
        border: none;
        padding: 12px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    button:hover {
        background-color: #0056b3;
        transform: scale(1.03);
    }

    .error {
        color: #d9534f;
        font-weight: 600;
        margin-bottom: 10px;
        background-color: #f8d7da;
        padding: 10px;
        border-radius: 10px;
    }

    .footer {
        margin-top: 15px;
        font-size: 14px;
        color: #555;
    }

    .footer a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .footer a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>

<div class="login-container">
    <h2>Iniciar Sesión</h2>

    <?php if(!empty($error)) echo "<div class='error'>$error</div>"; ?>

    <form method="POST" action="">
        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" placeholder="Ejemplo: usuario@gmail.com" required>

        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" placeholder="Tu contraseña" required>

        <button type="submit">Ingresar</button>
    </form>

    <div class="footer">
        ¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a>
    </div>
</div>

</body>
</html>
