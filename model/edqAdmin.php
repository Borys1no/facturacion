<?php
require_once 'conexion.php';
$conect = conexion();
$id = $_REQUEST['id'];

$nombres =$_POST['nombrestxt'];
$apellidos = $_POST['apellidostxt'];
$correo = $_POST['correotxt'];
$pass = $_POST['passtxt'];

$update = "UPDATE  usuarios SET nombres='".$nombres."', apellidos='".$apellidos."', correo='".$correo."', contrasena='".$pass."' WHERE id='".$id."' ";
$execute = mysqli_query($conect, $update) or die(mysqli_error($conect));

?>
<script type="text/javascript">
alert("Se edito correctamente");
window.location.href="../view/perfil.php"
</script>