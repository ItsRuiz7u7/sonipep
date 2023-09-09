<?php
  // Verificar si se ha enviado el formulario
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    // Datos de conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "int3";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si la conexión es exitosa
    if ($conn->connect_error) {
      die("Error de conexión: " . $conn->connect_error);
    }

    // Insertar los datos en la tabla de usuarios
    $sql = "INSERT INTO users (usuario, contrasena) VALUES ('$usuario', '$contrasena')";

    if ($conn->query($sql) === TRUE) {
      echo '<script>alert("Usuario registrado exitosamente");</script>';
    } else {
      echo "Error al registrar el usuario: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
  }
  ?>
<!doctype html>

<!-- Representa la raíz de un documento HTML o XHTML. Todos los demás elementos deben ser descendientes de este elemento. -->
<html lang="es">
    
<head>
        
    <meta charset="utf-8">
    
    <title> Registro de usuario </title>    
    
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
    
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Registrar
                </div>
                <form id="loginform" method="POST" action="">
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    
                    <input type="password" placeholder="Contrasena" name="contrasena" required>
                    
                    <button type="submit" title="Ingresar" name="Ingresar">Registrar</button>
                </form>
                <div class="pie-form">
                    <a href="login.php">ya tienes cuenta? Inicia Sesión</a>
                </div>
            </div>
            <div class="inferior">
                <a href="#"></a>
            </div>
        </div>
    </div>
        
</body>
</html>
