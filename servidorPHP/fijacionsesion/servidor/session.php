<?php
    // Configuración de acceso a la base de datos
    $host = "localhost";
    $dbname = "seguridadwebsesion";
    $dbUser = "root";
    $dbPass = "";
    $mensaje = "";
    try {
        // Conexión a la base de datos usando PDO
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbUser, $dbPass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Comprobamos que se hayan enviado los datos por POST
        if (isset($_POST['usuario']) && isset($_POST['pass'])) {
            $usuario = $_POST['usuario'];
            $pass   = $_POST['pass'];

        // Preparamos la consulta para evitar inyecciones SQL
            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE nombre = :usuario");
            $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $stmt->execute();
            // Obtenemos la fila (si existe)
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verificamos si hubo resultado y la contraseña coincide
            if ($result && $pass==$result['pass']) {
                // Contraseña válida
                session_start();
                $_SESSION['user']=$usuario;
                $mensaje="¡Inicio de sesión exitoso!";
                // Aquí puedes iniciar sesión con session_start(), redireccionar, etc.
                } else {
                    // Usuario o contraseña inválidos
                    $mensaje="Usuario o contraseña incorrectos.";
                }
            } else {
                $mensaje="No se han recibido datos de usuario y contraseña.";
            }
        
        } catch (PDOException $e) {
            // Captura e imprime errores en caso de que algo falle en la conexión o la consulta
            $mensaje="Error en la conexión a la base de datos: " . $e->getMessage();
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de session activa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="vh-100 bg-light container">
    <h1>Comprobacion del usuario</h1>
    <p><?=$mensaje?></p>
    <p>Sesion: <?=print $_COOKIE['PHPSESSID'];?></p>
    <p>Usuario: <?=$usuario?></p>
    <div>
        <a class="btn btn-primary mr-5" href="logout.php" role="button">Logout</a>
        <a class="btn btn-primary" href="solicitudes.php" role="button">Solicitud</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>