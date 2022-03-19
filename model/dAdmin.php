<?php
require_once 'conexion.php';
$conect = conexion();
$id = $_REQUEST['id'];
$delete ="DELETE FROM usuarios WHERE id='".$id."' ";
$execute = mysqli_query($conect, $delete) or die(mysqli_error($conect));
header('location: ../view/perfil.php');
?>