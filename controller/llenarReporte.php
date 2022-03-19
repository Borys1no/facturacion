<?php
require_once '../model/conexion.php';
require_once '../model/ventasR.php';


$obj = new ventas();
echo json_encode($obj->obtenerDatos($_POST['id']))

?>