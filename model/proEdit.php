<?php 
require_once 'conexion.php';
$conect = conexion();

$id= $_REQUEST['id'];
$producto = $_POST['productotxt'];
$cantidad = $_POST['cantidadtxt'];
$categoria = $_POST['categoriatxt'];
$proveedor = $_POST['proveedortxt'];
$precio = $_POST['preciotxt'];
$descripcion = $_POST['descripciontxt'];

$update = "UPDATE productos SET nombre_producto='".$producto."', cantidad='".$cantidad."', categoria='".$categoria."', descripcion='".$descripcion."', proveedor='".$proveedor."', precio='".$precio."' WHERE id= '".$id."' ";
$execute = mysqli_query($conect, $update)or die(mysqli_error($conect));

?>
<script type="text/javascript">
alert("Se edito correctamente");
window.location.href="../view/homeAdmin.php"
</script>