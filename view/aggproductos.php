<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/agg.css">
    <?php 
    require_once '../controller/dependencias.php';
    ?>
    <title>Agregar productos</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact-form">
            <div class="contact-image">
                <h1>Muebleria "Jehova Nisi" y grupo V&S</h1>
            </div>
            <form action="../model/aggPro.php" method="post">
                <h3>Agregar producto</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtProducto" class="form-control" placeholder="Producto *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="number" name="txtCantidad" class="form-control" placeholder="Cantidad *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtCategoria" class="form-control" placeholder="Categoria *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtProveedor" class="form-control" placeholder="Proveedor *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPrecio" class="form-control" placeholder="Precio *" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnsave" value="Guardar" />
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Descripcion *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
</body>
</html>