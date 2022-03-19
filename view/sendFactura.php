<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>
    <?php require_once '../controller/nav.php'; ?>
</head>



<body>



    <?php require_once '../model/conexion.php';
    $conexion = conexion();
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM ventas WHERE id = '" . $id . "'";
    $execute = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
    $row = $execute->fetch_assoc();
    ?>


    <form action="../model/send.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title">Enviar factura</h3>

                    </div>
                    <div class="panel-body">
                        <form role="form" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group">
                                <label class="col-sm-2" for="inputTo">De:</label>
                                <div class="col-sm-10"><input type="email" class="form-control" id="inputTo" placeholder="Correo Emisor"  name="emisor" required></div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2" for="inputTo">Para:</label>
                                <div class="col-sm-10"><input type="email" class="form-control" id="inputTo" placeholder="correo del cliente" value="<?php echo $row['correo'];?>" name="correoCliente" required></div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2" for="inputTo">Cliente:</label>
                                <div class="col-sm-10"><input type="text" class="form-control" id="inputTo" placeholder="nombre del cliente" value="<?php echo $row['nombre_cliente'];?>" name="nombreCliente" required></div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2" for="inputSubject">Asunto</label>
                                <div class="col-sm-10"><input type="text" class="form-control" id="inputSubject" placeholder="Asunto" name="asunto">  </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12" for="inputBody">Mensaje</label>
                                <div class="col-sm-12">
                                    <ghost>
                                        <div style="position: absolute; color: transparent; overflow: hidden; white-space: pre-wrap; border: 1.33333px solid rgb(204, 204, 204); border-radius: 4px; box-sizing: border-box; height: 228px; width: 817.333px; z-index: 0; padding: 6px 12px; margin: 0px; top: auto; left: auto; background: none 0% 0% / auto repeat scroll padding-box border-box rgb(255, 255, 255);" data-id="71c8bb8e-8a51-c867-6c4f-5b14b864ac06" data-gramm_id="71c8bb8e-8a51-c867-6c4f-5b14b864ac06" data-gramm="gramm" data-gramm_editor="true" data-grammarly-reactid=".2" contenteditable="true" width="817.3333740234375"><span style="display:inline-block;line-height:26.6667px;color:transparent;overflow:hidden;text-align:left;float:initial;clear:none;box-sizing:border-box;vertical-align:baseline;white-space:pre-wrap;width:100%;margin:0;padding:0;border:0;font:normal normal normal normal 14px / 26.6667px 'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:14px;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;letter-spacing:normal;text-shadow:none;height:225px;" data-grammarly-reactid=".2.0"></span><br data-grammarly-reactid=".2.1"></div>
                                    </ghost><textarea class="form-control" id="inputBody" rows="8" data-gramm="true" data-txt_gramm_id="71c8bb8e-8a51-c867-6c4f-5b14b864ac06" data-gramm_id="71c8bb8e-8a51-c867-6c4f-5b14b864ac06" spellcheck="false" data-gramm_editor="true" style="z-index: auto; position: relative; line-height: 26.6667px; font-size: 14px; transition: none; overflow: auto; background: transparent !important;" name="mensaje"></textarea>
                                    <form>
                                        <div class="form-group">
                                            
                                            <label for="exampleFormControlFile1">Seleccionar factura</label>
                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="archivo" required>
                                        </div>
                                    </form>
                                    <div>
                                        <div style="z-index: 2; opacity: 1; margin-left: 794px; margin-top: 197px;" class="gr-textarea-btn " data-grammarly-reactid=".3">

                                            <div title="Protected by Grammarly" class="gr-textarea-btn_status" data-grammarly-reactid=".3.0"> </div>
                                        </div>
                                    </div>

                                </div>
                                <input type="submit" class="btn btn-primary" value="Enviar" name="enviar">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </form>
</body>

</html>