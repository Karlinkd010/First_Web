<?php
/* incluimos primeramente el archivo que contiene la clase fpdf */
include ('fpdf/fpdf.php'); // no se cambia
require('conexion.php'); //cambiar a su conexion
	
	$query="SELECT * FROM tblprofesor"; // su consulta a la tabla que ustedes deseen
	$resultado=$conexion->query($query);
// 
/* tenemos que generar una instancia de la clase */
        $pdf = new FPDF();
        $pdf->AddPage();

/* seleccionamos el tipo, estilo y tamaño de la letra a utilizar */
		while($row=$resultado->fetch_assoc()){ 
        $pdf->SetFont('Helvetica', 'B', 14);
		$pdf->Write (7,"Reporte de profesor  ");
		$pdf->Ln();
		$pdf->Write (7,$row['Nombre']);
		$pdf->Ln(); //salto de linea
		$pdf->Write (7, $row['Direccion']);
		$pdf->Ln(); //salto de linea
		$pdf->Write (7, $row['Telefono']);
		$pdf->Ln(); //salto de linea
		$pdf->Write (7, $row['email']);
		$pdf->Ln(); //salto de linea
		$pdf->Write(7, $row['Nombre'],1,0,'C');
		$pdf->Ln(15);//ahora salta 15 lineas 
		$pdf->SetTextColor('255','0','0');//para imprimir en rojo 
		$pdf->Multicell(190,7, $row['intidprofesor']."\n Matricula",1,'R');
		$pdf->Line(0,160,300,160);//impresión de linea
	}
        $pdf->Output("prueba.pdf",'F');
		echo "<script language='javascript'>window.open('prueba.pdf','_self','');</script>";//para ver el archivo pdf generado
		exit;
	?>