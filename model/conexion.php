<?php 

function conexion(){
    return $conect = mysqli_connect("localhost", "root", "", "facturaciondb");
}

?>