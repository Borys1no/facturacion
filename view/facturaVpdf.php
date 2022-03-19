<!DOCTYPE html>
<html>

<head>


	<title>Document</title>
	<style type="text/css">
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		p,
		label,
		span,
		table {
			font-family: 'BrixSansRegular';
			font-size: 9pt;
		}

		.h2 {
			font-family: 'BrixSansBlack';
			font-size: 16pt;
		}

		.h3 {
			font-family: 'BrixSansBlack';
			font-size: 12pt;
			display: block;
			background: #0a4661;
			color: #FFF;
			text-align: center;
			padding: 3px;
			margin-bottom: 5px;
		}

		#page_pdf {
			width: 95%;
			margin: 15px auto 10px auto;
		}

		#factura_head,
		#factura_cliente,
		#factura_detalle {
			width: 100%;
			margin-bottom: 10px;
		}

		.logo_factura {
			width: 25%;
		}

		.info_empresa {
			width: 50%;
			text-align: center;
		}

		.info_factura {
			width: 25%;
		}

		.info_cliente {
			width: 100%;
		}

		.datos_cliente {
			width: 100%;
		}

		.datos_cliente tr td {
			width: 50%;
		}

		.datos_cliente {
			padding: 10px 10px 0 10px;
		}

		.datos_cliente label {
			width: 75px;
			display: inline-block;
		}

		.datos_cliente p {
			display: inline-block;
		}

		.textright {
			text-align: right;
		}

		.textleft {
			text-align: left;
		}

		.textcenter {
			text-align: center;
		}

		.round {
			border-radius: 10px;
			border: 1px solid #0a4661;
			overflow: hidden;
			padding-bottom: 15px;
		}

		.round p {
			padding: 0 15px;
		}

		#factura_detalle {
			border-collapse: collapse;
		}

		#factura_detalle thead th {
			background: #058167;
			color: #FFF;
			padding: 5px;
		}

		#detalle_productos tr:nth-child(even) {
			background: #ededed;
		}

		#detalle_totales span {
			font-family: 'BrixSansBlack';
		}

		.nota {
			font-size: 8pt;
		}

		.label_gracias {
			font-family: verdana;
			font-weight: bold;
			font-style: italic;
			text-align: center;
			margin-top: 20px;
		}

		.anulada {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translateX(-50%) translateY(-50%);
		}
	</style>
</head>
<?php
require_once '../model/conexion.php';
$conexion = conexion();
$id = $_GET['id'];
$sql = "SELECT Vt.id, Vt.fecha, Vt.nombre_cliente, Vt.ci, Vt.telefono, Pd.nombre_producto, Vt.cantidad, Vt.precio_unitario, Vt.descuento, Vt.tipo_pago, Vt.descripcion, Vt.subtotal, Vt.total,
                             Pd.nombre_producto
                           
                           FROM ventas Vt 
                           INNER JOIN productos Pd ON  Vt.producto = Pd.id 
                           and Vt.id='$id' ";
$result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));
while ($row = $result->fetch_assoc()) {

?>

	<body>
		
			<div id="page_pdf">
				<table id="factura_head">
					<tr>
						<td class="logo_factura">

						</td>
						<td class="info_empresa">
							<div>
								<span class="h2">Muebleria "Jehova Nisi"</span>
								<span>Grupo V&S </span>
								<p>Avenida 8va A entre calles 19 y 20 Barrio La Libertad, diagonal al club social. Canton la libertad</p>
								<p>AUT. S.R.I.: 1126257407</p>
								<p>Telefono: 4511154</p>
								<p>Email: steven14salinas@hotmail.com</p>
							</div>
						</td>
						<td class="info_factura">
							<div class="round">
								<span class="h3">Factura</span>
								<p>No. Factura: <strong>001-001-0000000<?php echo $row['id']; ?></strong></p>
								<p>Fecha: <?php echo $row['fecha']; ?></p>
							</div>
						</td>
					</tr>
				</table>
				<table id="factura_cliente">
					<tr>
						<td class="info_cliente">
							<div class="round">
								<span class="h3">Cliente</span>
								<table class="datos_cliente">
									<tr>
										<td><label>C.I.:</label>
											<p><?php echo $row['ci']; ?></p>
										</td>
										<td><label>Telefono:</label>
											<p><?php echo $row['telefono'] ?></p>
										</td>
									</tr>
									<tr>
										<td><label>Nombre:</label>
											<p><?php echo $row['nombre_cliente']; ?></p>
										</td>
										<td><label>Tipo de pago:</label>
											<p><?php echo $row['tipo_pago']; ?></p>
										</td>

									</tr>

								</table>
							</div>
						</td>

					</tr>
				</table>

				<table id="factura_detalle">
					<thead>
						<tr>
							<th width="50px">Cant.</th>
							<th class="textleft">Producto</th>
							<th class="textright" width="150px">Precio Unitario.</th>
							<th class="textright" width="150px"> Precio Total</th>
						</tr>
					</thead>
					<tbody id="detalle_productos">
						<tr>
							<td class="textcenter">x <?php echo $row['cantidad']; ?></td>
							<td><?php echo $row['nombre_producto']; ?></td>
							<td class="textright"><?php echo $row['precio_unitario']; ?></td>
							<td class="textright"><?php echo $row['precio_unitario']; ?></td>
						</tr>

					</tbody>
					<tfoot id="detalle_totales">
						<tr>
							<td colspan="3" class="textright"><span>DESCUENTO </span></td>
							<td class="textright"><span><?php echo $row['descuento']; ?></span></td>
						</tr>
						<tr>
							<td colspan="3" class="textright"><span>SUBTOTAL </span></td>
							<td class="textright"><span><?php echo $row['subtotal']; ?></span></td>
						</tr>
						<tr>
							<td colspan="3" class="textright"><span>IVA (12%)</span></td>
							<td class="textright"><span><?php echo $row['total']; ?></span></td>
						</tr>
						<tr>
							<td colspan="3" class="textright"><span>TOTAL</span></td>
							<td class="textright"><span><?php echo $row['total']; ?></span></td>
						</tr>
					</tfoot>
				</table>
				<div>

					<h4 class="label_gracias">Gracias por su compra!</h4>
				</div>

			</div>
			
		

	<?php } ?>

	</body>

</html>