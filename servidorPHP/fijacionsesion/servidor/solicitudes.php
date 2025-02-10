<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card p-4 shadow" style="width: 300px;">
        <h3 class="text-center mb-3">Solicitar al admin</h3>
        <form action="solicitud.php" method="POST">
             <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" readonly value="<?=$_SESSION['user']?>">
            </div>
            <div class="mb-3">
                <label for="solicitud" class="form-label">Solicitud</label>
                <textarea type="text" rows="5" class="form-control" name="solicitud" id="solicitud" placeholder="Incluye tu solicitud" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary w-100">Enviar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
