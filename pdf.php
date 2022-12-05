<?php

use Dompdf\Dompdf;
use Dompdf\Options;

require "../PsicologaTec/pdf/dompdf/autoload.inc.php";

$html=file_get_contents("http://localhost/github/PsicologaTec/reportes.php");
$options= new Options();    
$options->set('chroot',realpath(''));
$pdf=new Dompdf($options);
$pdf->loadHtml(utf8_decode($html));

$pdf->setPaper("A4","landingpage");

$pdf->render();
$pdf->stream('Pacientes.pdf');?>