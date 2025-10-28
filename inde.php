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
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" href="css/bootstrap.css">
<title>Blog fiction express</title>
</head>
<body>

    <header class="header">
<style>
.header {
    background-image: linear-gradient( rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(img/fondo1.webp);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    min-height: 70vh;
    display: flex;
    align-items: center;
}

.services {
    background-image: linear-gradient( rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url(img/fondo1.webp);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    padding: 100px 0;
    
}

/* 🚀 Estilo agregado para agrandar las imágenes en la sección "LO MAS LEIDO" */
.services-1 img {
    /* Define un ancho y alto fijo para las imágenes */
    width: 200px; /* Puedes ajustar este valor */
    height: 300px; /* Puedes ajustar este valor */
    object-fit: cover; /* Asegura que la imagen cubra el área sin distorsionarse */
    display: block; /* Para centrar si se aplica un margen */
    margin: 0 auto 10px auto; /* Centra la imagen y agrega un pequeño margen abajo */
}

/* 💡 Opcional: Ajusta el ancho del contenedor de la imagen si es necesario */
.services-1 {
    /* Permite que el contenedor se ajuste al tamaño de la imagen */
    max-width: 220px; 
    /* Agrega un poco de espacio extra alrededor del contenedor si es necesario */
    padding: 10px; 
    /* Centra los contenedores dentro del grupo si el `services-group` usa flexbox */
    margin: 0 auto; 
}
/* 💡 Opcional: También podrías querer hacer más grandes las imágenes de "Los mejores libros..." */
.estándar-1 img {
    width: 150px; /* Ejemplo, ajusta a tu gusto */
    height: 220px; /* Ejemplo, ajusta a tu gusto */
    object-fit: cover;
}


</style>
        <div class="menu container">
            <a href="#" class="logo" ></a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="img/menu.png" class="menu-icono" alt="">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#estandares-info">Reseñas</a></li>
                    <li><a href="#estandares-infos">Preguntas</a></li>
                </ul>
            </nav>
        </div>
        </input>

        <div class="header-content container">

            <h1>Blog Literario</h1>
            <h2><p>Leer libros de Fiction Express de nivel 3 ha sido una experiencia muy interesante. Cada historia nos ha hecho pensar, imaginar y hasta emocionarnos con lo que viven los personajes. Lo más divertido es que nosotros, como lectores, podemos participar y decidir qué camino tomará la historia.
            </p></h2>
            <a href="subpagina0.php" class="btn-1"><h6>Introducción</h6></a>

        </div>
    </header>
<section class="ISO">

        <img class="estándar-img" src="img/imag.png" alt="">

        <div class="estándar-content container">

            <h2>Los mejores libros de fiction express </h2>

            <div class="estándar-group">
                <div class="estándar-1">
                <img src="img/supervivencia-extrema.jpg" alt="">
                <h3>1.Supervivencia extrema</h3>
                <p>
                  La aventura comienza como un juego, pero termina siendo una pesadilla.
                </p>
            </div>
            <div class="estándar-1">
                <img src="img/edqtd.jpg" alt="">
                <h3>2. El dia que todo cambio </h3>
                <p>
                     Lo que empezó como un día cualquiera terminó siendo 
                     el más importante de todos.
                </p>
            </div>
            <div class="estándar-1">
                <img src="img/acadamia wiirta.jpg" alt="">
                <h3>3.Academia Wirta</h3>
                <p>
                    La Academia Wirta donde aprender puede cambiarlo todo 
                </p>
            </div>
        </div>
        <a href="#" class="btn-1">INICIO</a>
    </div>

    </section>

    <main class="services" id="estandares-info">
        <div class="services-content container">
            <h2>Reseñas Literarias</h2>
            <div class="services-group">
                <div class="services-1">
                    <a href="subpagina-estandar1.php">
                    <img src="img/supervivencia-extrema.jpg" alt="">
                    <h3>Supervivencia extrema</h3>
                    </a>
                </div>
                <div class="services-1">
                    <a href="subpagina-estandar2.php">
                    <img src="img/edqtd.jpg" alt="">
                    <h3>El dia que todo cambio </h3>
                    </a>
                </div>
                <div class="services-1">
                    <a href="subpagina-estandar3.php">
                    <img src="img/acadamia wiirta.jpg" alt="">
                    <h3>Academia Wirta</h3>
                    </a>
                </div>
            </div>
        <div class="services2-group">
            <div class="services-1">
                <a href="subpagina-estandar4.php">
                    <img src="img/cielo.jpg" alt="">
                    <h3>Un Cielo En Llamas</h3>
                    </a>
                </div>
                <div class="services-1">
                    <a href="subpagina-estandar5.php">
                    <img src="img/ciudad.jpg" alt="">
                    <h3>La Ciudad De Las Chimeneas Encendidas</h3>
                    </a>
                </div>
                <div class="services-1">
                    <a href="subpagina-estandar6.php">
                    <img src="img/Dos.jpg" alt="">
                    <h3>Dos</h3>
                    </a>
                </div>
        </div>
            <h1><p>
                En esta sección se alojan las reseñas que hemos realizado sobre cada libro
                de los cuales se ha hecho una lectura y análisis pertinente para compartir nuestras 
                opiniones y enseñanzas de cada uno. 
            </p></h1>
            <a href="#" class="btn-1" >Inicio</a>
        </div>
    </main>

        <main class="services" id="estandares-infos">
        <div class="services-content container">
            <h2>Preguntas</h2>
            <div class="services-group">
                <div class="services-1">
                    <a href="subpagina-estandar1c.php">
                    <img src="img/supervivencia-extrema.jpg" alt="">
                    <h3>Supervivencia extrema</h3>
                    </a>
                </div>
                <div class="services-1">
                    <a href="subpagina-estandar2c.php">
                    <img src="img/edqtd.jpg" alt="">
                    <h3>El dia que todo cambio </h3>
                    </a>
                </div>
                <div class="services-1">
                    <a href="subpagina-estandar3c.php">
                    <img src="img/acadamia wiirta.jpg" alt="">
                    <h3>Academia Wirta</h3>
                    </a>
                </div>
            </div>
        <div class="services2-group">
            <div class="services-1">
                <a href="subpagina-estandar4c.php">
                    <img src="img/cielo.jpg" alt="">
                    <h3>Un Cielo En Llamas</h3>
                    </a>
                </div>
                <div class="services-1">
                    <a href="subpagina-estandar5c.php">
                    <img src="img/ciudad.jpg" alt="">
                    <h3>La Ciudad De Las Chimeneas Encendidas</h3>
                    </a>
                </div>
                <div class="services-1">
                    <a href="subpagina-estandar6c.php">
                    <img src="img/Dos.jpg" alt="">
                    <h3>Dos</h3>
                    </a>
                </div>
        </div>
            <h1><p>
                En esta sección se alojan las preguntas que hemos realizado sobre cada libro
                de los cuales se ha hecho una lectura y análisis pertinente para compartir nuestras 
                opiniones y enseñanzas de cada uno. 
            </p></h1>
            <a href="#" class="btn-1" >Inicio</a>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-content container">
            <p>&copy; 2025 Blog Literario</p>
        </div>    
   </footer>
</body>
</html>