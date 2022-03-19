
<?php


require_once 'conexion.php';
$conexion=conexion();


$nombres =   $_POST['nombres'];
$apellido =  $_POST['apellidos'];
$correo =    $_POST['correo'];
$password =  $_POST['pass'];

$sql = "INSERT INTO usuarios (nombres, apellidos, correo, contrasena, tipo_usuario)
VALUES ('".$nombres."', '".$apellido."', '".$correo."', '".$password."', 'usuario') ";

$result = mysqli_query($conexion, $sql)or die(mysqli_error($conexion));

?> 
<script type="text/javascript">
alert("Se registro correctamente");
window.location.href="../view/perfil.php";
</script>