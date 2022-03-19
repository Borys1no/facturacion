<?php
require_once '../model/conexion.php';

$conect = conexion();
?>

<h4>Realizar una venta</h4>
<div class="row">
<div class="col-sm-4">
   <form action="../model/insertVentasU.php" method="POST" id="frmVentas">

   <label >Fecha</label>
    <input type="date" name="fecha" id="fecha" class="form-control input-sm"  required>

   <label >Datos del cliente</label>
    <input type="text" name="nombreCliente" id="nombreCliente" class="form-control input-sm" placeholder="Ingrese el nombre del cliente"  required>
    <p></p>
    <input type="text" name="ciCliente" id="ciCliente" class="form-control input-sm" placeholder="Ingrese C.I del cliente"  required>
    <p></p>
    <input type="text" name="telefonoCliente" id="telefonoCliente" class="form-control input-sm" placeholder="Numero de telefono "  required>
    <p></p>
    <input type="text" name="correoCliente" id="correoCliente" class="form-control input-sm" placeholder="Correo "  required>

   <label >Producto</label>
    <select name="productoVenta" id="productoVenta" class="form-control input-sm" required>
    <option value=""> Selecciona el producto</option>
        <?php 
        $query = "SELECT id, nombre_producto FROM productos ";
        $result = mysqli_query($conect, $query)or die(mysqli_error($conect));
        while($row= mysqli_fetch_row($result)):
        ?>
        <option value="<?php echo $row[0] ?>"><?php echo $row[1]?></option>
        <?php endwhile; ?>

    </select>

    <label >Cantidad</label>
    <input type="text" name="cantidadV" id="cantidadV" class="form-control input-sm"  required>

    <label>Precio unitario</label>
    <input type="text" name="precioUnitario" id="precioUnitario" class="form-control input-sm" required>

    <label>Descuento</label>
    <input type="text" name="descuento" id="descuento" class="form-control input-sm" required>

    
    

    <fieldset>
    <legend>Tipo de pago</legend>
    <label >
        <input type="radio" name="tdpago" id="efectivo" value="Efectivo" required>Efectivo
    </label>
    <label >
        <input type="radio" name="tdpago" id="acumulativo" value="Acumulativo" required>Acumulativo
    
    <label >
        <input type="radio" name="tdpago" id="tarjetaCrediro" value="Tarjeta de credito" required>Tarjeta de credito
    </label>
    </fieldset>

    <label >Descripcion</label>
    <textarea name="descripcionV" id="descripcionV" class="form-control input-sm" cols="30" rows="10" required></textarea>
    <p></p>
    <legend>Detalles finales</legend>

    <label>IVA</label>
    <input type="text" name="iva" id="iva" class="form-control input-sm"  value="0.12">

    <label>Subtotal</label>
    <input type="text" name="subtotal" id="subtotal" class="form-control input-sm"  required>

    <label>Total a pagar</label>
    <input type="text" name="total" id="total" class="form-control input-sm"  required>
    <p></p>
    <input class="btn btn-primary" type="button" onclick="valorPagar()" value="Calcular">
    <span class="btn btn-primary" id="btnagg">Agregar</span>
    <input type="submit" class="btn btn-primary" value="Vender">
    <span class="btn btn-danger" id="btnVaciar">Vaciar ventas</span>
    
   </form>
</div>
   <div class="col-sm-4">
       <div id="tableTemp"></div>
   </div>
</div>

<script type="text/javascript" >
function total(id){
    return document.getElementById(id);
}
function valorPagar(){
    var cantidad= parseInt(total('cantidadV').value);
    var precioUni = parseFloat(total('precioUnitario').value);
    var descuento = parseFloat(total('descuento').value);
    var sub=(cantidad*precioUni)-descuento;
    total('subtotal').value=parseFloat(sub);
    var iva = (sub* 0.12);
    var totalp=(sub+iva);
    total('total').value=parseFloat(totalp); 
    
}
</script>

<script type="text/javascript" >
    $(document).ready(function(){
        $('#tableTemp').load("tableVenTempU.php");
        $('#productoVenta').change(function(){
            $.ajax({
                type:"POST",
                data:"id=" + $('#productoVenta').val(),
                url:"../controller/llenarReporteU.php",
                success:function(r){
                    dato=jQuery.parseJSON(r);
                    $('#descripcionV').val(dato['descripcion']);
                    $('#precioUnitario').val(dato['precio']);

                }
            });
        });

        $('#btnagg').click(function(){
            datos =$('#frmVentas').serialize();
            $.ajax({
                type:"POST",
                data:datos,
                url:"../controller/aggProductTempU.php",
                success:function(r){
                    $('#tableTemp').load("tableVenTempU.php");

                }
            })
        });

        $('#btnVaciar').click(function(){
            $.ajax({
                url:"../controller/vaciarU.php",
                success:function(r){
                    $('#tableTemp').load("tableVenTempU.php");

                }
            })
        });
    });

 </script>

 <script type="text/javascript">
function quitarP(index){
    $.ajax({
        type:"POST",
                data:"ind="+ index,
                url:"../controller/eliminarU.php",
                success:function(r){
                    $('#tableTemp').load("tableVenTempU.php");
                    alertify.success("Se elimino correctamente");

                }
    })
}
</script>


