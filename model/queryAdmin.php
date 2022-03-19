<?php 
require_once '../model/conexion.php';
$conect = conexion();

$nombres= $_POST['txtNombres'];
$apellidos = $_POST['txtApellidos'];
$correo = $_POST['txtCorreo'];
$pass = $_POST['txtPass'];
$tipoUsuario = $_POST['txtAdmin'];


$query = "INSERT INTO usuarios (nombres, apellidos, correo, contrasena, tipo_usuario)
VALUES ('".$nombres."', '".$apellidos."', '".$correo."', '".$pass."', '".$tipoUsuario."')";
$execute = mysqli_query($conect, $query) or die(mysqli_error($conect));

?>
<script type="text/javascript">
alert("Se registro correctamente");
window.location.href="../view/perfil.php"
</script>