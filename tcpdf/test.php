<?php
//============================================================+
// File name   : example_007.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 007 for TCPDF class
//               Two independent columns with WriteHTMLCell()
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Two independent columns with WriteHTMLCell()
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 007');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 007', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('freeserif', '', 12);

// add a page
$pdf->AddPage();

$pdf->AddSpotColor('spotBlack', 100, 100, 100, 100);
$pdf->AddSpotColor('spotRed', 0, 100, 100, 0);

/*
// to allow spot colors for fg/bg in style:
// in tcpdf.php, font color section of getHtmlDomArray,
// change code to include the following:

						if (isset($dom[$key]['style']['color']) AND (!TCPDF_STATIC::empty_string($dom[$key]['style']['color']))) {
							$spotcolor = TCPDF_COLORS::getSpotColor($dom[$key]['style']['color'], $this->spot_colors);
							if ($spotcolor === false) 
								$dom[$key]['fgcolor'] = TCPDF_COLORS::convertHTMLColorToDec($dom[$key]['style']['color'], $this->spot_colors);
							else
								$dom[$key]['fgcolor'] = $spotcolor;

*/

$css = '
<style>
	span.vr {
		font-family: freeserifvr;
		color: spotRed;
		//background-color:gray;
	}
	span.d {
		font-family:oldlondon;
		color:spotRed;
		font-size:68;
		line-height:1;
		margin:0;
		padding:0;
	}
	div {
		font-family: freeserif;
		text-align: justify;
		font-size:14;
		color: spotBlack;
		background-color:white;
	}
</style>
';
// create columns content
$left_column = $css.'<div>PE­RI, (Dó­mi­ne), os me­um ad be­ne­di­cén­dum no­men san­ctum tu­um: mun­da quo­que cor me­um ab óm­ni­bus va­nis, per­vér­sis et ali­é­nis co­gi­ta­tió­ni­bus;</div>
<div>in­tel­léc­tum il­lú­mi­na, afféc­tum in­flám­ma, ut dig­ne, at­tén­te ac de­vó­te hoc Of­fí­ci­um re­ci­tá­re vá­le­am, et ex­au­dí­ri mé­re­ar an­te con­spéc­tum di­ví­næ Ma­jes­tá­tis tuæ. Per Ch­ris­tum, Dó­mi­num nos­trum. <span class="vr">R.</span> Amen.</div>';

$right_column = $css.'<div>AWAY OPEN my mouth, O Lord, that I may bless thy holy name. Cleanse my heart from all vain, evil and wan­der­ing thoughts; en­light­en my un­der­stand­ing, enkin­dle my af­fec­tions, that I may worthi­ly re­cite this Office with at­ten­tion and de­vo­tion, and may worthi­ly be heard be­fore the pres­ence of thy Di­vine Majesty. Through Christ our Lord. <span class="vr">R.</span> Amen.</div>';

$regex=array(
	'/ff/', '/fi/', '/fl/', '/ffi/', '/ffl/', 
	//'/st/', 
	'/ct/'
);
$repl=array(
	'&#64256;', 'ﬁ', 'ﬂ', 'ﬃ', 'ﬄ', 
	//'ﬆ', 
	'﬇'
);
$left_column = preg_replace($regex,$repl,$left_column);
$right_column = preg_replace($regex,$repl,$right_column);

// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)
/*
GetX
GetY
getCellHeight *
getPage
getNumPages
GetCharWidth
GetStringWidth *

*/

// get current vertical position
$p = $pdf->getPage();
$x = $pdf->getX();
$y = $pdf->getY();
//echo "<br>x,y ($x, $y) test.php<br>\n";
$drop = $css.'<span class="d">A</span>';
$ch = $pdf->getCellHeight($drop);
$pdf->writeHTML($drop, false);
$dh = $pdf->getLastH();
$dh *= 4;
$dw = $pdf->getX()-$x;
$dw += .8;
$regions = array(
array('page' => $p, 'xt' => $x+$dw, 'yt' => $y, 'xb' => $x+$dw, 'yb' =>  $y+$dh, 'side' => 'L')
);
//var_dump($regions);
$pdf->setPageRegions($regions);
$pdf->SetXY($x,$y);
//echo "<br>x,y ($x, $y) test.php<br>\n";
/*
$pdf->Polygon(array(
	$x,$y, $x+$dw,$y, $x+$dw,$y+$dh, $x,$y+$dh
), 'D');
*/
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);

$h = "<br/> x: $x, y: $y, w: $dw, h: $dh";
$h .= "<br>".print_r($regions,1)."";
//echo "<br>test.php: x,y ({$pdf->getX()}, {$pdf->getY()}) <br>\n";
// write the first column
$pdf->writeHTMLCell(80, '', '', $y, $left_column,1);

// write the second column
$pdf->writeHTMLCell(80, '', '', '', $right_column,1);


$pdf->writeHTMLCell('','',$x,100,$h);

// reset pointer to the last page
$pdf->lastPage();



// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_007.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
