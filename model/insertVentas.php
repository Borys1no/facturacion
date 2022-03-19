<?php 
require_once 'conexion.php';
$conect = conexion();

$fecha = $_POST['fecha'];
$cliente = $_POST['nombreCliente'];
$ci=$_POST['ciCliente'];
$telefono=$_POST['telefonoCliente'];
$correo=$_POST['correoCliente'];
$producto = $_POST['productoVenta'];
$cantidad = $_POST['cantidadV'];
$precioUnitario = $_POST['precioUnitario'];
$descuento = $_POST['descuento'];
$tipoPago ="";
$descripcion = $_POST['descripcionV'];
$subtotal = $_POST['subtotal'];
$total = $_POST['total'];

if(isset($_POST['tdpago'])){
    $tipoPago=$_POST['tdpago'];
}else{
    $tipoPago="";
}

$sql = "INSERT INTO ventas(fecha, nombre_cliente, ci, telefono, correo, producto, cantidad, precio_unitario, descuento, tipo_pago, descripcion, subtotal, total) 
VALUES('".$fecha."', '".$cliente."', '".$ci."', '".$telefono."', '".$correo."', '".$producto."', '".$cantidad."', '".$precioUnitario."', '".$descuento."', '".$tipoPago."', '".$descripcion."', '".$subtotal."', '".$total."')";
$execute = mysqli_query($conect, $sql)or die(mysqli_error($conect));
if($execute==1){
    $sql2 = "INSERT INTO cliente(nombres, ci, correo, n_telefono) VALUES ('".$cliente."', '".$ci."', '".$correo."', '".$telefono."')";
$execute2 = mysqli_query($conect, $sql2)or die(mysqli_error($conect));
}

desCantidad($producto,$cantidad);
 function desCantidad($productob, $cantidads){
     $conexion = conexion();
     $consult ="SELECT cantidad FROM productos WHERE id='$productob' ";
     $result=mysqli_query($conexion, $consult)or die (mysqli_error($conexion));
     $cantU=mysqli_fetch_row($result)[0];
     $nuevaC=abs($cantidads - $cantU);
     $query = "UPDATE productos SET cantidad='$nuevaC' WHERE id='$productob'";
     mysqli_query($conexion, $query)or die(mysqli_error($conexion));

    };
 
?>
<script type="text/javascript">
alert("Venta realizada con exito!");
window.location.href="../view/ventas.php"
</script>