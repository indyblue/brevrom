<pre><?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

require_once('config/lang/eng.php');
require_once('tcpdf.php');

/*****************************************************************************/
/*****************************************************************************/
/*****************************************************************************/
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//echo $pdf->addTTFFont('E:\4_ExpressMR\admin\pdf\tools\arial.ttf');
echo K_PATH_MAIN."\n";

//*
echo "val: ".$pdf->addTTFfont('../Images/fonts/timeslt.ttf', '', '', 32)."\n";
echo "val: ".$pdf->addTTFfont('../Images/fonts/timesltb.ttf', '', '', 32)."\n";
echo "val: ".$pdf->addTTFfont('../Images/fonts/timeslti.ttf', '', '', 32)."\n";
echo "val: ".$pdf->addTTFfont('../Images/fonts/timesltbi.ttf', '', '', 32)."\n";
echo "val: ".$pdf->addTTFfont('../Images/fonts/times vr.ttf', '', '', 32)."\n";
echo "val: ".$pdf->addTTFfont('../Images/fonts/CloisterBlack.ttf', '', '', 32)."\n";
// */
/*
echo "val: ".$pdf->addTTFfont('font/arial.pfb', '', 'cp1252', 32)."\n";
echo "val: ".$pdf->addTTFfont('font/arialbd.pfb', '', 'cp1252', 32)."\n";
echo "val: ".$pdf->addTTFfont('font/arialbi.pfb', '', 'cp1252', 32)."\n";
echo "val: ".$pdf->addTTFfont('font/ariali.pfb', '', 'cp1252', 32)."\n";
// */
//$pdf->SetFont('arial', '', 12);
?></pre>
