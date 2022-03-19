<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../controller/dependencias.php'; require_once '../controller/nav.php'?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <br>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form action="../model/queryAdmin.php" method="POST" class="form-horizontal" role="form">
        <fieldset>

          <!-- Form Name -->
          <legend>Agregar un administrador</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Nombres</label>
            <div class="col-sm-10">
              <input type="text" name="txtNombres" placeholder="Nombres" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Apellidos</label>
            <div class="col-sm-10">
              <input type="text" name="txtApellidos" placeholder="Apellidos " class="form-control">
            </div>
          </div>
          
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Correo</label>
            <div class="col-sm-10">
              <input type="email" name="txtCorreo" placeholder="Correo " class="form-control">
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Contraseña</label>
            <div class="col-sm-10">
              <input type="password" name="txtPass" placeholder="Contraseña" class="form-control">
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Tipo usuario</label>
            <div class="col-sm-10">
              <input type="text" name="txtAdmin" placeholder=" por defecto 'administrador' " class="form-control">
            </div>
          </div>
         



          

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->
</body>
</html>