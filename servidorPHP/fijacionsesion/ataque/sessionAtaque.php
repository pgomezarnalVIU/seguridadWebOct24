<?php
    session_id('c06pp8gk8r261s8750f5ilehvr');
    session_start();
    //$usuarioRegistrado=$_SESSION['user'];
    //Comprueba que estamos registrados
    //Hemos pasado por la pagina signin.php
    if(!isset($_SESSION['user'])){
        //Redireccion
        //header("location:signin.php");
    }
    $usuarioRegistrado=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de session activa</title>
</head>
<body>
    <h1>Comprobacion de la sesion activa</h1>
    <p>usuario: <?=$usuarioRegistrado?></p>
</body>
</html>