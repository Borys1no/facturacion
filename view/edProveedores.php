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

    $consulta = "SELECT * FROM proveedor WHERE id='".$id."' ";
    $execute = mysqli_query($conect, $consulta);
    $row = $execute->fetch_assoc();
    ?>
<header>
<span>Editar</span>
</header>
<div class="container">
    <form action="../model/edqproveedores.php?id=<?php echo $row['id'] ?>" method="POST">
        <input type="text" name="nombretxt" id="nombre" placeholder="nombre *" value="<?php echo $row['nombre_proveedor']; ?>" required>
        <input type="text" name="direcciontxt" id="direccion" placeholder="direccion *" value="<?php echo $row['direccion']; ?>" required>
        <input type="text" name="correotxt" id="correo" placeholder="correo *" value="<?php echo $row['correo']; ?>" required>
        <input type="text" name="telefonotxt" id="telefono" placeholder="telefono *" value="<?php echo $row['telefono']; ?>" required>
        <input  type="text" name="delegadotxt"  placeholder="delegado *" value="<?php echo $row['delegado']; ?> " required>
        <input  type="text" name="paistxt"  placeholder="pais *" value="<?php echo $row['pais']; ?> " required >
        <input  type="text" name="provinciatxt"  placeholder="provincia *" value="<?php echo $row['provincia']; ?> " required>
        <input  type="text" name="cantontxt"  placeholder="canton *" value="<?php echo $row['canton']; ?> " required>
        
        <input type="submit" value="Guardar">
    </form>
</div>    
</body>
</html>