<?php
require_once '../model/conexion.php';
$conexion = conexion();
?>
<form action="../model/cerrarCajaU.php" method="POST">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <div class="table-responsive">
                <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
                    <caption><label>Registro de ventas</label></caption>
                    <tr>
                        <td>N# Factura</td>
                        <td>Fecha</td>
                        <td>Nombre Cliente </td>
                        <td>Telefono</td>
                        <td>Producto</td>
                        <td>Cantidad</td>
                        <td>Precio unitario</td>
                        <td>Descuento</td>
                        <td>Tipo de pago</td>
                        <td>Descripcion</td>
                        <td>Total</td>
                        <td>Factura</td>
                    </tr>
                    <?php
                    $sql = "SELECT Vt.id, Vt.fecha, Vt.nombre_cliente, Vt.telefono, Pd.nombre_producto, Vt.cantidad, Vt.precio_unitario, Vt.descuento, Vt.tipo_pago, Vt.descripcion, Vt.subtotal, Vt.total,
                             Pd.nombre_producto
                           
                           FROM ventas Vt 
                           INNER JOIN productos Pd ON  Vt.producto = Pd.id  ";
                    $consulta = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
                    while ($row = $consulta->fetch_assoc()) {
                        echo '
                <tr>
                <td>001-001-0000000' . $row['id'] . '</td>
                <td>' . $row['fecha'] . '</td>
                <td>' . $row['nombre_cliente'] . '</td>
                <td>' . $row['telefono'] . '</td>
                <td>' . $row['nombre_producto'] . '</td>
                <td>' . $row['cantidad'] . '</td>
                <td>$' . $row['precio_unitario'] . '</td>
                <td>$' . $row['descuento'] . '</td>
                <td>' . $row['tipo_pago'] . '</td>
                <td>' . $row['descripcion'] . '</td>
                <td>$' . $row['total'] . '</td>
                <td>
                <a href="factura.php?id=' . $row['id'] . '" >factura <span class="glyphicon glyphicon-file"></span></a>
                <p></p>
                <a href="sendFacturaU.php?id=' . $row['id'] . '" >Enviar factura <span class="glyphicon glyphicon-envelope"></span></a>
                </td>
                </tr>
                
                ';
                    }
                    ?>
                </table>
                <div class="report">
                    <a href="reporteVpdf.php" target="_blank" class="glyphicon glyphicon-print"> Generar reporte</a>
                </div>

                <div class="buttonClear">
                    <input type="submit" class="btn btn-primary" value="Cerrar caja">
                </div>
            </div>
        </div>
    </div>
</form>