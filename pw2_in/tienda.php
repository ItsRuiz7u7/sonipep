<?php
session_start();
if(isset($_SESSION['usuario'])){
  $cerrarSesion = true;
} else {
  $cerrarSesion = false;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta charset="utf-8">
<link rel="icon" href="img/cr7.png" type="image/png">
<title>Cristiano Ronaldo</title>
<link rel="stylesheet" href="css/estiloss.css">
</head>
<body>
<div class="navegacion">
    <nav>
        <ul class="clearfix">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Equipos</a>
                <ul>
                    <li><a href="real.html">Real Madrid</a></li>
                    <li><a href="man.html">Manchester United</a></li>
                    <li><a href="juve.html">Juventus</a></li>
                    <li><a href="https://www.sporting.pt/en">Sporting</a></li>
                    <li><a href="al.html">Al Nassr</a></li>
                </ul>
            </li>
            <li><a href="#">Récords</a>
                <ul>
                    <li><a href="#">Máximo goleador histórico de la Champions League</a></li>
                    <li><a href="#">Máximo goleador histórico del Real Madrid</a></li>
                    <li><a href="#">Máximo goleador histórico a nivel selección y club</a></li>
                </ul>
            </li>
            <li><a href="tienda.php">Tienda</a></li>
            <li><a href="#">Redes Sociales</a>
                <ul>
                    <li><a href="https://www.instagram.com/cristiano/">Instagram</a></li>
                    <li><a href="https://twitter.com/Cristiano">Twitter</a></li>
                </ul>
            </li>
            <li>
                <?php if ($cerrarSesion) { ?>
                    <a href="logout.php">Cerrar Sesión</a>
                <?php } else { ?>
                    <a href="login.php">Iniciar Sesión</a>
                <?php } ?>
            </li>
        </ul>
    </nav>
</div>

<div class="contenido">
    <main>
        <article>
            <?php if ($cerrarSesion) { ?>

            <!-- Código HTML existente aquí -->

            <div class="galeria-productos">
                <?php
                // Incluye el archivo de conexión a la base de datos
                include("conexion.php");

                // Realiza una consulta a la base de datos para obtener los productos
                $query = "SELECT id_p AS id_producto, nombre_p, precio_p, imagen_p, descripcion_p FROM productos";
                $resultado = mysqli_query($conexion, $query);

                // Verifica si la consulta fue exitosa
                if (!$resultado) {
                    die("Error al obtener productos: " . mysqli_error($conexion));
                }

                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo '<div class="producto">';
                    echo '<img src="' . $row['imagen_p'] . '" alt="' . $row['nombre_p'] . '">';
                    echo '<h3>' . $row['nombre_p'] . '</h3>';
                    echo '<p>Precio: $' . number_format($row['precio_p'], 2) . ' MXN</p>';
                    echo '<p>' . $row['descripcion_p'] . '</p>';
                    
                    // Convierte el enlace en un botón HTML con class "boton-compra"
                    echo '<button class="boton-compra">Agregar al carrito</button>';
                
                    echo '</div>';
                }
                

                // Cierra el resultado de la consulta
                mysqli_free_result($resultado);
                mysqli_close($conexion);
                ?>

            </div>

            <?php } ?>

            <!-- Código HTML existente aquí -->

        </article>
    </main>
</div>

<footer>
    <div class="contenedor">
        <div class="nosotros">
            <h2>Realizado por </h2>
            <p>
                Jonathan Ruiz
            </p>
        </div>
    </div>

    <p class="copyright">
        Todos los derechos reservados &copy;2023
    </p>
</footer>
</body>
</html>
