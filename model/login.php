<?php 


require 'conexion.php';
$conexion= conexion();


$sql="SELECT nombres, tipo_usuario
FROM usuarios WHERE correo ='".$_POST['user']."'
AND contrasena = '".$_POST['password']."' ";

$resultado = mysqli_query($conexion,$sql);

 if($resultado->num_rows==1):
  
  $datos = $resultado->fetch_assoc();
    echo json_encode(array('error'=> false, 'tipo' => $datos['tipo_usuario']));

 else:
    echo json_encode(array('error'=> true));
 endif;
mysqli_close($conexion);
?>