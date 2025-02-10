<?php
    session_start();

    // Configuración de acceso a la base de datos
    $host = "localhost";
    $dbname = "seguridadwebsesion";
    $dbUser = "root";
    $dbPass = "";
    $mensaje = "";

// Crear la conexión usando MySQLi
$conn = new mysqli($host, $dbUser, $dbPass, $dbname);

// Verificar si hubo algún error en la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificamos que se haya recibido el texto mediante POST
if (isset($_POST['solicitud'])) {
    
    $texto = trim($_POST['solicitud']);
    $texto = stripslashes( $texto );
    $usuario = $_POST['usuario'];

    // Creamos la sentencia SQL
    $sql = "INSERT INTO solicitudes (nombre,solicitud) VALUES ('$usuario','$texto')";
    echo $sql;

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Texto insertado correctamente.";
    } else {
        echo "Error al insertar el texto: " . $conn->error;
    }
} else {
    echo "No se ha recibido ningún texto para insertar.";
}

// Cerrar la conexión
$conn->close();
?>