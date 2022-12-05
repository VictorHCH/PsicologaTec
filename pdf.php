<?php

use Dompdf\Dompdf;

include_once "../PsicologaTec/pdf/dompdf/autoload.inc.php";
$pdf=new Dompdf();
$html=file_get_contents("http://localhost/github/PsicologaTec/reportes.php");
$pdf->loadHtml($html);
$pdf->setPaper("A4","landingpage");
$pdf->render();
$pdf->stream();?>