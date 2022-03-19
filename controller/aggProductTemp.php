<?php 
session_start();
require_once '../model/conexion.php';
$conect = conexion();


$fecha = $_POST['fecha'];
$cliente = $_POST['nombreCliente'];
$producto = $_POST['productoVenta'];
$cantidad = $_POST['cantidadV'];
$precioUnitario = $_POST['precioUnitario'];
$tipoPago ="";
$descripcion = $_POST['descripcionV'];
$subtotal = $_POST['subtotal'];
$total = $_POST['total'];

if(isset($_POST['tdpago'])){
    $tipoPago=$_POST['tdpago'];
}else{
    $tipoPago="";
}

$sql= "SELECT fecha,
                 nombre_cliente,
                 producto,
                 cantidad,
                 precio_unitario,
                 tipo_pago,
                 total 
                 FROM ventas
                 WHERE id='$producto' ";
    $result = mysqli_query($conect,$sql)or die(mysqli_error($conect));
    $nombrep=mysqli_fetch_row($result)[0];
    $productA=$producto."||".$fecha."||
                ".$cliente."||
                ".$cantidad."||
                ".$precioUnitario."||
                ".$tipoPago."||
                ".$total;
    
    $_SESSION['tamblaVentasTemp'][]=$productA;

?>