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
      <form action="../model/queryProveedor.php" method="POST" class="form-horizontal" role="form">
        <fieldset>

          <!-- Form Name -->
          <legend>Registrar un proveedor</legend>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Nombre proveedor</label>
            <div class="col-sm-10">
              <input type="text" name="txtNombreEmpresa" placeholder="Nombre empresa o representante" class="form-control">
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Direccion</label>
            <div class="col-sm-10">
              <input type="text" name="txtDireccion" placeholder="Direccion de la empresa " class="form-control">
            </div>
          </div>
          
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Correo</label>
            <div class="col-sm-10">
              <input type="email" name="txtCorreo" placeholder="Correo de la empresa" class="form-control">
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Telefono</label>
            <div class="col-sm-10">
              <input type="text" name="txtTelefono" placeholder="Telefono de la empresa o representante" class="form-control">
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Delegado</label>
            <div class="col-sm-10">
              <input type="text" name="txtDelegado" placeholder="Delegado o representante de la empresa" class="form-control">
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Pais</label>
            <div class="col-sm-10">
              <input type="text" name="txtPais" placeholder="Pais" class="form-control">
            </div>
          </div>
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Provincia</label>
            <div class="col-sm-4">
              <input type="text" name="txtProvincia" placeholder="Provincia" class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="textinput">Canton</label>
            <div class="col-sm-4">
              <input type="text" name="txtCanton" placeholder="Canton o ciudad" class="form-control">
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