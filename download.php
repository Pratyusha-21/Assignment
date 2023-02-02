<?php
    require("fpdf/fpdf.php");
    session_start();

    // fetching the data  using session variables to print in the pdf
    $firstname = ($_SESSION['firstname']);
    $lastname = ($_SESSION['lastname']);
    $a = ($_SESSION['f']);
    $number = ($_SESSION['number'] );
    $email = ($_SESSION['email'] );

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('courier','B',16);
    $pdf->Cell(0,10,"PROFILE",1,1,'C');
    $pdf->Image('images/dp.jpg',50,25,100);
    $pdf->Ln(70);
    $pdf->Cell(0,10,$firstname." ".$lastname,0,0,'C');
    $pdf->Ln(20);

    for ($i=0; $i<count($a); $i+=2) {
        if($i==count($a)-2) {
            $pdf->Cell(0,10,$a[$i],1,0,'C');
        }
        else{
            $pdf->Cell(50,10,$a[$i],1,0,'C');
        }
    }
    $pdf->Ln();
    //print the marks in table form
    for ($i=1; $i<count($a); $i+=2) {
        if($i==count($a)-1) {
            $pdf->Cell(0,10,$a[$i],1,0,'C');
        }
        else{
            $pdf->Cell(50,10,$a[$i],1,0,'C');
        }
    }
    $pdf->Write(15,'Phone Number : '.$number);
    $pdf->Ln(10);
    $pdf->Write(20,'Email ID : '.$email);
    $pdf->output();
    $file = 'profile.pdf';
    $pdf->Output($file,'D');
    $pdf->Output('images/form.pdf','F');
?>