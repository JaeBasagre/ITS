<?php
if(!empty($_POST['submit']))
{
$first = $_POST['FNa'];
$last = $_POST['LNa'];
$user = $_POST['UNa'];
$pass = $_POST['PSa'];
$pos = $_POST['posi'];
$email = $_POST['EMa'];
$addr = $_POST['add'];

require("SIGNUP_REGISTER.php")
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(10,10,"welcome {$first}",1,1,C);
    
$pdf->Cell(50,10,"Name :",1,0);
$pdf->Cell(50,10,$last,1,0);    
    
$pdf->Output();
} 
?>