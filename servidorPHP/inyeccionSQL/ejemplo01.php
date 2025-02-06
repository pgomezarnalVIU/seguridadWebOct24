<?php
   // Ejemplo de código (no seguro):
   $id = $_GET['id'];  // Entrada proporcionada por el usuario (sin validación)
   $sql = "SELECT * FROM usuarios WHERE id = '$id'";
   // Se ejecuta la consulta...
   // ...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error-based SQL Injection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Error-based SQL Injection</h5>
            <p class="card-text">$sql = "SELECT * FROM usuarios WHERE id = '$id'";</p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>