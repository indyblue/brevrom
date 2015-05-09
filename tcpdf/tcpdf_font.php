<span style="white-space:pre-wrap;"><?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

//require_once('config/lang/eng.php');
require_once("tcpdf.php");
// /home/user/www/b/tcpdf/tcpdf.php

/*****************************************************************************/
/*****************************************************************************/
/*****************************************************************************/
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//echo $pdf->addTTFFont('E:\4_ExpressMR\admin\pdf\tools\arial.ttf');
echo K_PATH_MAIN."\n";

//echo "val: ".TCPDF_FONTS::addTTFfont('fonts/ttf/FreeSerif.ttf', '', 'TrueTypeUnicode', 32)."\n";
//*
//echo "val: ".TCPDF_FONTS::addTTFfont('fonts/ttf/FreeSerif.ttf', '', 'TrueTypeUnicode', 32)."\n";
//echo "val: ".TCPDF_FONTS::addTTFfont('fonts/ttf/FreeSerifBold.ttf', '', 'TrueTypeUnicode', 32)."\n";
echo "val: ".TCPDF_FONTS::addTTFfont('fonts/ttf/FreeSerifBoldItalic.ttf', '', 'TrueTypeUnicode', 32)."\n";
echo "val: ".TCPDF_FONTS::addTTFfont('fonts/ttf/FreeSerifItalic.ttf', '', 'TrueTypeUnicode', 32)."\n";
echo "val: ".TCPDF_FONTS::addTTFfont('fonts/ttf/FreeSerifVR.ttf', '', 'TrueTypeUnicode', 32)."\n";
echo "val: ".TCPDF_FONTS::addTTFfont('fonts/ttf/OldLondon.ttf', '', 'TrueTypeUnicode', 32)."\n";
// */
/*
echo "val: ".$pdf->addTTFfont('font/arial.pfb', '', 'cp1252', 32)."\n";
echo "val: ".$pdf->addTTFfont('font/arialbd.pfb', '', 'cp1252', 32)."\n";
echo "val: ".$pdf->addTTFfont('font/arialbi.pfb', '', 'cp1252', 32)."\n";
echo "val: ".$pdf->addTTFfont('font/ariali.pfb', '', 'cp1252', 32)."\n";
// */
//$pdf->SetFont('arial', '', 12);

require_once('fonts/freeserif.php');
print_r($kern);
?></span>
