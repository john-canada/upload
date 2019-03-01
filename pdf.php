<?php
   
require("fpdf/fpdf.php"); //fpdf.org

$name = $_POST['name'];
$position = $_POST['position'];

//$pdf->Cell(width,height,"data",border,nextline,"position");

$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Welcome: {$name}",1,2,"L");
$pdf->Cell(50,10,"Position: {$position}",0,0,"L");
$pdf->output();