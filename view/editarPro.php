<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Editar</title>
</head>
<body>
<?php 
require_once '../model/conexion.php';
$conect = conexion();
$id=$_REQUEST['id'];

$consulta = "SELECT * FROM productos WHERE id='".$id."' ";
$execute  = mysqli_query($conect, $consulta);
$file = $execute->fetch_assoc();
?>
<header>
<span>Editar</span>
</header>
<div class="container">
    <form action="../model/proEdit.php?id=<?php echo $file['id'] ?>" method="POST">
        <input type="text" name="productotxt" id="producto" placeholder="Producto *" value="<?php echo $file['nombre_producto']; ?>" required>
        <input type="number" name="cantidadtxt" id="cantidad" placeholder="Cantidad *" value="<?php echo $file['cantidad']; ?>" required>
        <input type="text" name="categoriatxt" id="categoria" placeholder="Categoria *" value="<?php echo $file['categoria']; ?>" required>
        <input type="text" name="proveedortxt" id="proveedor" placeholder="Proveedor *" value="<?php echo $file['proveedor']; ?>" required>
        <input  type="text" name="preciotxt" class="form-control" placeholder="Precio *" value="<?php echo $file['precio']; ?> " required />
        <textarea name="descripciontxt" class="form-control" placeholder="Descripcion *"  style="width: 100%; height: 150px;"><?php echo $file['descripcion']; ?></textarea>
        <input type="submit" value="Guardar">
    </form>
    </div> 
</body>
</html>