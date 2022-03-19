<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../controller/dependencias.php'; require_once '../controller/nav.php';?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <title>Document</title>
</head>
<body>
    <?php require_once '../model/conexion.php';
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
                  <a href="aggProveedor.php">+Añadir proveedor</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th>Proveedor</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Delegado</th>
                        <th>Pais</th>
                        <th>Provincia</th>
                        <th>Canton</th>
                    </tr> 
                  </thead>
                  <?php
                  $consulta = "SELECT id, nombre_proveedor, direccion, correo, telefono, delegado, pais, provincia, canton FROM proveedor ";
                  $execute = mysqli_query($conect, $consulta) or die(mysqli_error($conect));
                  while($row = $execute->fetch_assoc()){

                  
                  ?>
                  <tbody>
                          <tr>
                            <td align="center">
                              <a href="edProveedores.php?id=<?php echo $row['id']; ?>" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a href="../model/dProveedores.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td> <?php echo $row['nombre_proveedor']; ?></td>
                            <td><?php echo $row['direccion']; ?></td>
                            <td><?php echo $row['correo']; ?></td>
                            <td><?php echo $row['telefono']; ?></td>
                            <td><?php echo $row['delegado']; ?></td>
                            <td><?php echo $row['pais']; ?></td>
                            <td><?php echo $row['provincia']; ?></td>
                            <td><?php echo $row['canton']; ?></td>
                            
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

</div></div></div>

</body>
</html>