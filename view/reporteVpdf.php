


<?php 
require_once '../model/conexion.php';
require '../fpdf/fpdf.php';

$dia_total = 0;
$i = 0;

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
    
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,utf8_decode('Muebleria "Jehova Nisi y Grupo V&S" '),0,0,'C');
    
    // Salto de línea
    $this->Ln(20);
    //subtitulo
    $this->SetFont('Courier','B',9);
    $this->SetXY(80, 30);
    $this->MultiCell(100, 10, utf8_decode('Reporte de ventas diarias'), 0, 'j');
    
    $this->SetFont('Arial', 'B', 5);
    
    $this->Cell(16, 5, utf8_decode('# Factura'), 1, 0, 'C', 0);
    $this->Cell(16, 5, utf8_decode('Fecha'), 1, 0, 'C', 0);
    $this->Cell(16, 5, utf8_decode('C.I.'),1,0,'C',0);
    $this->Cell(16, 5, utf8_decode('Nombres'), 1, 0, 'C', 0);
    $this->Cell(16, 5, utf8_decode('Telefono'), 1, 0, 'C', 0);
    $this->Cell(16, 5, utf8_decode('Producto'), 1, 0, 'C', 0);
    $this->Cell(16, 5, utf8_decode('Cantidad'), 1, 0, 'C', 0);
    $this->Cell(16, 5, utf8_decode('Precio Unitario'), 1, 0, 'C', 0);
    $this->Cell(16, 5, utf8_decode('Descuento'), 1, 0, 'C', 0);
    $this->Cell(16, 5, utf8_decode('Tipo de pago'), 1, 0, 'C', 0);
    $this->Cell(16, 5, utf8_decode('Total'), 1, 0, 'C', 0);
    $this->Cell(16, 5, utf8_decode('Total del dia'), 0, 1, 'C', 0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

$conexion = conexion();



$sql = "SELECT Vt.id, Vt.fecha, Vt.nombre_cliente, Vt.ci, Vt.telefono, Pd.nombre_producto, Vt.cantidad, Vt.precio_unitario, Vt.descuento, Vt.tipo_pago, Vt.descripcion, Vt.subtotal, Vt.total,
                             Pd.nombre_producto
                           
                           FROM ventas Vt 
                           INNER JOIN productos Pd ON  Vt.producto = Pd.id 
                            ";
$result = mysqli_query($conexion, $sql) or die(mysqli_error($conexion));


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',7);

while ($row = $result->fetch_assoc()) {
    $pdf->Cell(16, 3, utf8_decode( $row['id']) , 0, 0, 'C', 0);
    $pdf->Cell(16, 3, utf8_decode($row['fecha']), 0, 0, 'C', 0);
    $pdf->Cell(16, 3, utf8_decode($row['ci']) , 0, 0, 'C', 0);
    $pdf->Cell(16, 3, utf8_decode($row['nombre_cliente']) , 0, 0, 'C', 0);
    $pdf->Cell(16, 3, utf8_decode($row['telefono']) , 0, 0, 'C', 0);
    $pdf->Cell(16, 3, utf8_decode($row['nombre_producto']) , 0, 0, 'C', 0);
    $pdf->Cell(16, 3, utf8_decode($row['cantidad']) , 0, 0, 'C', 0);
    $pdf->Cell(16, 3, utf8_decode( $row['precio_unitario']) , 0, 0, 'C', 0);
    $pdf->Cell(16, 3, utf8_decode( $row['descuento']) , 0, 0, 'C', 0);
    $pdf->Cell(16, 3, utf8_decode($row['tipo_pago']) , 0, 0, 'C', 0);
    $pdf->Cell(16, 3, utf8_decode($row['total']) , 0, 0, 'C', 0);

    $dia_total=$dia_total+$row['total'];
    $i++;

    $pdf->Cell(25,3,utf8_decode( $dia_total), 0, 1, 'C', 0);

    
}
$pdf->Output();
?>


    

  