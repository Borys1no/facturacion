<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/hadmin.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <title>Document</title>
    <?php
    require_once '../controller/dependencias.php';
    require_once '../controller/nav.php';

    ?>
</head>

<body>

    <?php
    
    require_once '../model/conexion.php';
    $conect = conexion();
    ?>
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">

                <div class="panel panel-default panel-table">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col col-xs-6">
                                <h3 class="panel-title">Lista de proveedores</h3>
                            </div>
                            <div class="col col-xs-6 text-right">
                                <a href="aggproductos.php">+Agregar mas productos </a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <thead>
                                <tr>
                                    <th><em class="fa fa-cog"></em></th>
                                    <th>Id</th>
                                    <th>Producto</th>
                                    <th>Cantidad </th>
                                    <th>Categoria</th>
                                    <th>Descripcion</th>
                                    <th>Proveedor</th>
                                    <th>Precio</th>

                                </tr>
                            </thead>
                            <?php
                            $consulta = "SELECT id, nombre_producto, cantidad, categoria, descripcion, proveedor, precio FROM productos";
                            $execute = mysqli_query($conect, $consulta) or die(mysqli_error($conect));
                            while ($files = $execute->fetch_assoc()) {
                            ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $files['id'] ?></td>
                                        <td><?php echo $files['nombre_producto'] ?></td>
                                        <td><?php echo $files['cantidad'] ?></td>
                                        <td><?php echo $files['categoria'] ?></td>
                                        <td><?php echo $files['descripcion'] ?></td>
                                        <td><?php echo $files['proveedor'] ?></td>
                                        <td>$<?php echo $files['precio'] ?></td>

                                    </tr>
                                </tbody>
                            <?php } ?>
                        </table>

                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col col-xs-4">Page 1 of 5
                            </div>
                            <div class="col col-xs-8">
                                <ul class="pagination hidden-xs pull-right">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                                <ul class="pagination visible-xs pull-right">
                                    <li><a href="#">«</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>