<?php
	require('../fpdf17/fpdf.php');
	$pdf = new FPDF();
	$pdf->addpage();

	$pdf->setFont("Arial", 'B', 16);
	$pdf->cell(10,10, "Aloha Choco Champola");
	$pdf->ln(10);
	$pdf->setFont("Arial", 'IU', 18);
	$pdf->cell(10,10, "Gatas na Chocnut", 0,0, 'L');
	$pdf->ln(10);
	$pdf->setFont("Arial", 'IBU', 12);
	$pdf->setTextColor(200, 150, 150);
	$pdf->cell(190,10, "Chocnut na Gatas", 1,1, 'R');
	$pdf->ln(20);
	$pdf->image("../champola.jpeg", 40, 60);
	$pdf->ln(90);
	$pdf->setTextColor(0, 0, 150);
	//must use absolute path
	$pdf->write(3, "go back to reviewer", "http://localhost/PHPLecture/chapter10.php");

	$pdf->output();
	// $pdf->ln(30);

	


		?>
