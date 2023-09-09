<?php
session_start();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Conectar a la base de datos (reemplaza los valores con los tuyos)
    $servername = 'localhost';
    $username = 'root';
    $password_db = '';
    $database = 'int3';

    $conn = new mysqli($servername, $username, $password_db, $database);

    // Verificar si la conexión fue exitosa
    if ($conn->connect_error) {
        die('Error en la conexión a la base de datos: ' . $conn->connect_error);
    }

    // Consulta para verificar las credenciales del usuario
    $sql = "SELECT * FROM users WHERE usuario = '$usuario' AND contrasena = '$password'";
    $result = $conn->query($sql);

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if ($result->num_rows > 0) {
        // Usuario válido, guardar el nombre de usuario en la sesión
        $_SESSION['usuario'] = $usuario;

        // Redirigir a la página de inicio o hacer alguna acción adicional
        header('Location: index.php');
        exit();
    } else {
        // Credenciales inválidas, mostrar una alerta
        echo '<script>alert("Usuario o contraseña incorrectos");</script>';
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>
<!-- Define que el documento esta bajo el estándar de HTML 5 -->
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
<head>
        
    <meta charset="utf-8">
    
    <title> Formulario de Acceso </title>    
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
    
    <!-- Link hacia el archivo de estilos css -->
    <link rel="stylesheet" href="css/login.css">
    
    <style type="text/css">
        
    </style>
    
    <script type="text/javascript">
    
    </script>
    
</head>

<body>
    
    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Bienvenido
                </div>
                <form id="loginform" method="POST" action="">
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    
                    <input type="password" placeholder="Contraseña" name="password" required>
                    
                    <button type="submit" title="Ingresar" name="Ingresar">Iniciar Sesión</button>
                </form>
                <div class="pie-form">
                    <a href="regis.php">Registrar</a>
                    <a href="#"></a>
                </div>
            </div>
            <div class="inferior">
                <a href="#"></a>
            </div>
        </div>
    </div>
        
</body>
</html>
