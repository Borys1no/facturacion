<?php
require_once 'conexion.php';
$conect = conexion();

$producto = $_POST['txtProducto'];
$cantidad = $_POST['txtCantidad'];
$categoria = $_POST['txtCategoria'];
$proveedor = $_POST['txtProveedor'];
$precio = $_POST['txtPrecio'];
$descripcion = $_POST['txtMsg'];


$query = "INSERT INTO productos (nombre_producto, cantidad, categoria, descripcion, proveedor, precio)
VALUES ('".$producto."', '".$cantidad."', '".$categoria."', '".$descripcion."','".$proveedor."', '".$precio."')";

$execute= mysqli_query($conect, $query) or die(mysqli_error($conect));

?>
<script type="text/javascript">
alert("Se guardo correctamente");
window.location.href="../view/homeAdmin.php"
</script>