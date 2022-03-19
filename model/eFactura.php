<?php 
require_once 'conexion.php';
$conexion =conexion();

$correo = $_POST['correoCliente'];
$nombre = $_POST['nombreCliente'];
$mensaje = $_POST['mensaje'];
$factura = addslashes(file_get_contents($_FILES['factura']['tmp_name']));

$sql = "INSERT INTO factura(correo, nombre_cliente, mensaje, factura)
        VALUES('$correo', '$nombre', '$mensaje', '$factura' )";

$result=mysqli_query($conexion, $sql)or die(mysqli_error($conexion));

if($result){
    echo 'Mensaje enviado con exito!';
    header('location:../view/ventas.php');
}else{
    echo 'Error al enviar el mensaje!';
}

?>
