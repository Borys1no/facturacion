<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once '../controller/dependencias.php'; require_once '../controller/nav.php'; ?>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Realizar una venta</h1>
        <div class="row">
            <div class="col-sm-12">
                <span class="btn btn-default" id="venderPBtn">Vender</span>
                <span class="btn btn-default" id="ventasHechasBtn">Ventas hechas</span>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="venderP"></div>
                <div id="ventasHechas"></div>
            </div>
        </div>
    </div>
</body>
</html>
<script type="text/javascript">

$(document).ready(function(){
    $('#venderPBtn').click(function(){
        esconderSventas();
        $('#venderP').load('ventasProducto.php');
        $('#venderP').show();
    });
    $('#ventasHechasBtn').click(function(){
        esconderSventas();
        $('#ventasHechas').load('ventasReporte.php');
        $('#ventasHechas').show();
    });
});
function esconderSventas(){
    $('#venderP').hide();
    $('#ventasHechas').hide();

}
</script>