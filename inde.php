<?php
function conectarDB(): mysqli {
    $db = mysqli_connect('localhost', 'root', 'edw1nr0m3r0', 'proyecto');

    if (!$db) {
        die("Error: no se pudo conectar a la base de datos.");
    }

    return $db;
}

$conexion = conectarDB();
echo "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuestas en tiempo real</title>

    <style>
        /* Fuente general */
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
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        /* Barra superior con degradado */
        .header {
            width: 100%;
            background: linear-gradient(90deg, #f8b5b5, #ffe066, #ffd166);
            padding: 50px 0;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* Contenedor del menú */
        .menu.container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Caja blanca con botones */
        .navbar {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            padding: 30px 50px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        .navbar ul {
            list-style: none;
        }

        .navbar ul li {
            margin: 15px 0;
        }

        /* Botones azules */
        .btn-1 {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px 30px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: background 0.3s ease;
        }

        .btn-1:hover {
            background: #0056b3;
        }

        /* Texto de conexión */
        body > p, body > div, body > span {
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="menu container">
            <nav class="navbar">
                <ul>
                    <li><a href="registro.php" class="btn-1">Registrarse</a></li>
                    <li><a href="login.php" class="btn-1">Iniciar sesión</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>
