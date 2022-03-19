<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Editar</title>
    <?php require_once '../controller/dependencias.php'; ?>
</head>
<body>
    <?php require_once '../model/conexion.php'; 
    $conect =conexion();
    $id=$_REQUEST['id'];

    $consulta = "SELECT * FROM usuarios WHERE id='".$id."' ";
    $execute = mysqli_query($conect, $consulta);
    $row = $execute->fetch_assoc();
    ?>
<header>
<span>Editar</span>
</header>
<div class="container">
    <form action="../model/edqAdmin.php?id=<?php echo $row['id'] ?>" method="POST">
        <input type="text" name="nombrestxt" id="nombres" placeholder="nombre *" value="<?php echo $row['nombres']; ?>" required>
        <input type="text" name="apellidostxt" id="apellidos" placeholder="apellidos *" value="<?php echo $row['apellidos']; ?>" required>
        <input type="email" name="correotxt" id="correo" placeholder="correo *" value="<?php echo $row['correo']; ?>" required>
        <input type="password" name="passtxt" id="password" placeholder="password *" value="<?php echo $row['contrasena']; ?>" required>
        <input type="submit" value="Guardar">
    </form>
</div>    
</body>
</html>