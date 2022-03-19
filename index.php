<?php
require_once 'model/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Login</title>
</head>
<body background="img/muebles.jpg">
    <div class="main">
       
        <form action="" id="formlg" >
        <h2 class="title">Inicie sesion</h2>
        
        <h5>Usuario</h5>
        <input type="text" name="user" id="user" class="user">
        <h5>Contraseña</h5>
        <input type="password" name="password" id="password" class="password">
        <input type="submit" value="Entrar" class="btn">
        
        </form>
    </div>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>