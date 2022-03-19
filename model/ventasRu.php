<?php 
require_once '../model/conexion.php';


class ventas{
 public function obtenerDatos($id){
    $conect = conexion();
    $sql="SELECT id, nombre_producto, cantidad, descripcion, precio FROM productos WHERE id='$id' ";
    $resul = mysqli_query($conect, $sql)or die(mysqli_error($conect));
    $ver=mysqli_fetch_row($resul);

    $datos=array(
        'nombre_producto'=>$ver[1] ,
        'cantidad'=>$ver[2],
        'descripcion'=>$ver[3],
        'precio'=>$ver[4]
    );
    return $datos;
    }
}

?>