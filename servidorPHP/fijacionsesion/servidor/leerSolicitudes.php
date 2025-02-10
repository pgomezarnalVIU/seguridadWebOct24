<?php
    session_start();
    //Comprobación de usuario logado
    if($_SESSION['user']=='admin'){
        // Configuración de acceso a la base de datos
        $host = "localhost";
        $dbname = "seguridadwebsesion";
        $dbUser = "root";
        $dbPass = "";
        $mensaje = "";

        // Crear la conexión usando MySQLi
        $conn = new mysqli($host, $dbUser, $dbPass, $dbname);
        
        // Creamos la sentencia SQL
        $sql = "SELECT * FROM solicitudes";


        // Ejecutar la consulta
        $result = $conn->query($sql);


    }else{

        header('Location: session.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitudes activas</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            // Abrir tabla HTML
            echo "<table border='1'>";
            echo "<tr>";
            // Encabezados (ajusta a tus columnas reales, por ejemplo: id, nombre, fecha, etc.)
            echo "<th>id</th>";
            echo "<th>nombre</th>";
            echo "<th>solicitud</th>";
            echo "</tr>";

            // Recorrer cada fila y mostrar los datos
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id']     . "</td>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['solicitud']  . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No se encontraron registros en la tabla 'solicitudes'.";
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>