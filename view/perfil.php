

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../controller/dependencias.php'; require_once '../controller/nav.php';?>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>perfil</title>
</head>
<body>
    <?php
    require_once '../model/conexion.php';
    $conect = conexion();
    
    ?>
<br><br>
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                        <h3 class="panel-title">Administradores</h3>

                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                            <tr>
                                <th><em class="fa fa-cog"></em></th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <?php
                        $query ="SELECT id, nombres, apellidos, correo FROM usuarios WHERE tipo_usuario= 'administrador' ";
                        $execute = mysqli_query($conect, $query)or die(mysqli_error($conect));
                        while($row = $execute->fetch_assoc()){
                        ?>
                        <tbody>
                            <tr>
                                <td align="center" >
                                <a href="edAdmin.php?id=<?php echo $row['id']; ?>" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                <a href="../model/dAdmin.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                </td>
                                <td><?php echo $row['nombres'];?></td>
                                <td><?php echo $row['apellidos'];?></td>
                                <td><?php echo $row['correo']; ?></td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        
        
         
        
    </div>
</div>
<br>
<br>
<br>
<div class="container">
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                        <h3 class="panel-title">Usuarios</h3>

                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-list">
                        <thead>
                            <tr>
                                <th><em class="fa fa-cog"></em></th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Correo</th>
                            </tr>
                        </thead>
                        <?php
                        $query ="SELECT id, nombres, apellidos, correo FROM usuarios WHERE tipo_usuario= 'usuario' ";
                        $execute = mysqli_query($conect, $query)or die(mysqli_error($conect));
                        while($row = $execute->fetch_assoc()){
                        ?>
                        <tbody>
                            <tr>
                                <td align="center" >
                                <a href="edAdmin.php?id=<?php echo $row['id']; ?>" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                                <a href="../model/dAdmin.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><em class="fa fa-trash"></em></a>
                                </td>
                                <td><?php echo $row['nombres'];?></td>
                                <td><?php echo $row['apellidos'];?></td>
                                <td><?php echo $row['correo']; ?></td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
        
        
         
        
    </div>
</div>



</body>
</html>