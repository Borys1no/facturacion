<?php
require_once 'conexion.php';
$conect = conexion();
$id = $_REQUEST['id'];

$proveedor =$_POST['nombretxt'];
$direccion = $_POST['direcciontxt'];
$correo = $_POST['correotxt'];
$telefono = $_POST['telefonotxt'];
$delegado = $_POST['delegadotxt'];
$pais = $_POST['paistxt'];
$provincia = $_POST['provinciatxt'];
$canton = $_POST['cantontxt'];

$update = "UPDATE  proveedor SET nombre_proveedor='".$proveedor."', direccion='".$direccion."', correo='".$correo."', telefono='".$telefono."', delegado='".$delegado."', pais='".$pais."', provincia='".$provincia."', canton='".$canton."' WHERE id='".$id."' ";
$execute = mysqli_query($conect, $update) or die(mysqli_error($conect));

?>
<script type="text/javascript">
alert("Se edito correctamente");
window.location.href="../view/proveedores.php"
</script>