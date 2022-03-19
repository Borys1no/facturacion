<?php 
session_start();
//print_r($_SESSION['tamblaVentasTemp']);
?>
<h4>Ventas del dia</h4>
<h4><div id="ventas"></div></h4>
<table class="table table-bordered table-hover table-condensed" style="text-align: center;">
<caption>
    <span class="btn btn-success">
        <span class="glyphicon glyphicon-usd"></span> 
    </span>
</caption>
<tr>
    <td>Id producto</td>
    <td>Fecha</td>
    <td>Nombre cliente</td>
    <td>Cantidad</td>
    <td>Precio unitario</td>
    <td>Tipo pago</td>
    <td>Total</td>
    <td>Limpiar</td>
</tr>
<?php
$totalD=0;
$clienteD="";
if(isset($_SESSION['tamblaVentasTemp'])):
    $i=0;
    foreach(@$_SESSION['tamblaVentasTemp'] as $key){
        $d=explode("||", @$key);

    
?>
<tr>
    <td><?php echo $d[0] ?></td>
    <td><?php echo $d[1] ?></td>
    <td><?php echo $d[2] ?></td>
    <td><?php echo $d[3] ?></td>
    <td><?php echo $d[4] ?></td>
    <td><?php echo $d[5] ?></td>
    <td><?php echo "$". $d[6] ?></td>
    <td>
        <span class="btn btn-danger btn-xs" onclick="quitarP('<?php echo $i; ?>')">
            <span class="glyphicon glyphicon-remove"></span>
        </span>
    </td>
</tr>
<?php
    $totalD=$totalD + $d[6];
    $i++;
}
endif;
?>

<tr>
    <td>Total de ventas del dia: <?php echo "$". $totalD; ?></td>
</tr>
</table>