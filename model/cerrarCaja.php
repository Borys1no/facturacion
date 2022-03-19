<?php 
require_once 'conexion.php';
$conexion = conexion();
$sql = "DELETE FROM ventas ";
$resul=mysqli_query($conexion, $sql)or die(mysqli_error($conexion));

?>
<script type="text/javascript">
alert("Caja cerrada correctamente!");
window.location.href='../view/ventas.php';
</script>