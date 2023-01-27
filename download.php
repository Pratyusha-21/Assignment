<?php
    require("fpdf/fpdf.php");
    $fname=$_GET['first'];
    $lname=$_GET['last'];
    $eng=$_GET['eng'];
    $comp=$_GET['comp'];
    $sci=$_GET['sci'];
    $maths=$_GET['maths'];
    $phone=$_GET['phone'];
    $email=$_GET['mail'];

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('courier','B',16);
    $pdf->Cell(0,10,"PROFILE",1,1,'C');
    $pdf->Image('images/dp.jpg',50,25,100);
    $pdf->Ln(70);
    $pdf->Cell(0,10,$fname." ".$lname,0,0,'C');
    $pdf->Ln(20);
    $pdf->Cell(45,10,"English",1,0,'C');
    $pdf->Cell(45,10,"Mathematics",1,0,'C');
    $pdf->Cell(45,10,"Science",1,0,'C');
    $pdf->Cell(0,10,"Computer",1,0,'C');
    $pdf->Ln();
    $pdf->Cell(45,10,$eng,1,0,'C');
    $pdf->Cell(45,10,$maths,1,0,'C');
    $pdf->Cell(45,10,$sci,1,0,'C');
    $pdf->Cell(0,10,$comp,1,0,'C');
    $pdf->Write(15,'Phone Number : '.$phone);
    $pdf->Ln(10);
    $pdf->Write(20,'Email ID : '.$email);
    $pdf->output();
    $file='profile.pdf';
    $pdf->Output($file,'D');
    $pdf->Output('images/form.pdf','F');
?>