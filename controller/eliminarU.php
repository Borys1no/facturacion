<?php 
session_start();
$index=$_POST['ind'];
unset($_SESSION['tamblaVentasTemp'][$index]);
$data=array_values($_SESSION['tamblaVentasTemp']);
unset($_SESSION['tamblaVentasTemp']);
$_SESSION['tamblaVentasTemp']=$data;


?>