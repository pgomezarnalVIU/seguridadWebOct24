<?php
    //Comprobamos usuario y password
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario_valido = "admin";
        $password_valida = "1234";
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        if ($usuario === $usuario_valido && $password === $password_valida) {
            $msg="<div class='alert alert-success mt-3'>Inicio de sesión exitoso</div>";
        } else {
            header("location:index.php");
        }  
        session_start();
        if(!isset($_SESSION['user'])){
            $_SESSION['user'] =$usuario_valido;
        }
        $usuarioRegistrado=$_SESSION['user'];
        $_SESSION['favcolor']='red';
        $_SESSION['animal']='cat';
        $_SESSION['time']=time();
    }else{
        header("location:index.php");
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
<body class="content vh-100 bg-light">
    <h1>Comprobacion de la sesion activa</h1>
    <p>usuario: <?=$usuarioRegistrado?></p>
    <p>favcolor: <?=$_SESSION['favcolor']?></p>
    <p>animal: <?=$_SESSION['animal']?></p>
    <p>fecha: <?=$_SESSION['time']?></p>
    <a href="logout.php" class="btn btn-primary" >Salir de la sesion</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>