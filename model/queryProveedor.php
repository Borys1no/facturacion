<?php 
require_once '../model/conexion.php';
$conect = conexion();

$nombreEmpresa= $_POST['txtNombreEmpresa'];
$direccion = $_POST['txtDireccion'];
$correo = $_POST['txtCorreo'];
$telefono = $_POST['txtTelefono'];
$delegado = $_POST['txtDelegado'];
$pais = $_POST['txtPais'];
$provincia = $_POST['txtProvincia'];
$canton = $_POST['txtCanton'];

$query = "INSERT INTO proveedor (nombre_proveedor, direccion, correo, telefono, delegado, pais, provincia, canton)
VALUES ('".$nombreEmpresa."', '".$direccion."', '".$correo."', '".$telefono."', '".$delegado."', '".$pais."', '".$provincia."', '".$canton."')";
$execute = mysqli_query($conect, $query) or die(mysqli_error($conect));

?>
<script type="text/javascript">
alert("Se registro correctamente");
window.location.href="../view/proveedores.php"
</script>