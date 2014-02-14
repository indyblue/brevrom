<?php
/*
!!!!!!BACKUP BEFORE USING!!!!!!!!
set backup | set nomore | ar *.php *\*.php *\*\*.php *\*\*\*.php
ar *.php~ *\*.php~ *\*\*.php~ *\*\*\*.php~
redir >das.txt | argdo g/\vBodyL.*\v\c<(<u|\w*[b-pr-zæœ]u|\w*[aeioyæœ]){3,}\w*>
g/E486/-2,d
g/lines,/d
%s/<[^>]*>/<>/ig

s/^.*bookmark[^"]*"\([^"]*\).*$/<%php bookmark(\'\1\'); %>/

Check for whitespace and bad accents:
(Some whitespace is necessary in Prayers!!!!)
\v [ ;:!,\n]|[áéíóúý]\w*[áéíóúý]|\v\c<(u|\w*[b-fh-pr-zæœ]u|\w*[aeioyæœ]){3,}\w*>

\v [ ;:!,\n]|'

[ÁÉÍÓÚÝ]

Per Dóminum. - Through our Lord.
Per eúmdem Dóminum. - Through the same.
Per Dóminum...in unitáte ejúsdem Spíritus Sancti. - 
	Through our Lord...in the unity of the same Holy Spirit.
Qui vivis. - Who livest.
Qui tecum vivit. - Who liveth.

 */

function psalm($file, $part=0, $cross=0) {
	$dir = "/www/b/content/00/Psalm/old/";
		require $dir.$file;
}
function canticle($file, $part=0, $cross=0) {
	$dir = "/www/b/content/00/Canticle/";
		require $dir.$file;
}
/* 
<?php rubrics('asIn.php','csApLCLauds','Lauds','Little Chapter'); ?> 
*/
function rubrics($file, $link='', $location='I Vespers', $content='Psalms and antiphons') {
	$dir = "/www/b/content/00/Rubrics/";
		require $dir.$file;
}
function bookmark($link='') {
	echo '<p:BkHidden><text:bookmark text:name="' . $link . '"/></p>';
}
function bkref($link='') {
	echo '<text:bookmark-ref text:reference-format="page" text:ref-name="' . $link . '"/>';
}
function vr($file, $option=0) {
	$dir = "/www/b/content/00/VR/long/";
		require $dir.$file;
}
function vrS($file, $option=0) {
	$dir = "/www/b/content/00/VR/";
	if($option==2)
		require $dir.'0VersicleResponseNoVR.php';
	else
		require $dir.'0VersicleResponse.php';
}
function brS($file, $option=0) {
	$dir = "/www/b/content/00/VR/";
		require $dir.'0BriefRespond.php';
}
function mr($file, $option=0) {
	$dir = "/www/b/content/00/VR/";
		require $dir.'0MatinRespond.php';
}
function PrV($file, $option=0) {
	$dir = "/www/b/content/00/VR/prime/";
		rubrics('ord/prime_brv.php');
		require $dir.'0Versicle.php';
}
function prayer($file, $nameL='N.', $nameE='N.') {
	$dir = "/www/b/content/00/Prayer/";
		require $dir.'0Prayer.php';
}
function hymn($file, $option=0) {
	$dir = "/www/b/content/00/Hymn/";
//	echo '<p:Head0/>';
	require $dir.'0Hymn.php';
//	echo '<p:BodySm/>';
}
function lc($file, $text='', $r=1) {
	$dir = "/www/b/content/00/LittleChapter/";
	require $dir.'0LittleChapter.php';
}
//$incs is the include pattern:
// 0 - not displayed
// 1 - for no astrisk no number
// * - for astrisk but no number
// + - for astrisk, no number, no "Ant."
// # - for number but no astrisk
// 2 - for both astrisk & number
function ant($file, $incs='*') {
	$dir = "/www/b/content/00/Antiphon/";
		require $dir.'0Antiphon.php';
}
function antN($file, $nameL='N.', $nameE='N.') {
	$dir = "/www/b/content/00/Antiphon/";
		require $dir.$file;
}
function headSt($date, $class, $nameL, $nameE, $descr='') {
	if($class==1) $clname = 'I class';
	if($class==2) $clname = 'II class';
	if($class==3) $clname = 'III class';
	if($class==0) $clname = 'Commem.';
?>
	<p:Hidden1><?php echo $date . ' - ' .$nameE; ?></p>
	<text:p text:style-name="Head1<?php 
echo ($class==1||$class==2?'':'NI') . '">' . ($_GET['L']==1?$nameL:$nameE) 
?></p>
	<p:Head2><?php
	echo $descr . ($descr?' - ':'') . $clname . ' - ' . $date; ?></p>
   <p:BodySm/>
<?php

}


function img($name='separator4.tif', $width='619', $height='59', $pct='33') {
	$dir = "/www/b/content/00/Rubrics/";
	echo '   <p:Head3><draw:frame text:anchor-type="as-char" svg:width="' . $width .'" style:rel-width="' . $pct . '%" svg:height="' . $height . '" style:rel-height="scale"><draw:image xlink:href="../Images/' . $name . '" xlink:type="simple" xlink:show="embed" xlink:actuate="onLoad"/></draw:frame></p>';
}

/*

Galilǽa
Galilǽam
Galilǽi
Magdalénæ
fóedere
prǽcipis
quǽrite
quǽritis
quǽsumus
sǽcula
sǽculo
sǽculi
sǽculum
prǽstito
adhǽsit

 */

require '001_start.php';

//Switch to determine if headings are in English or Latin
$_GET['L'] = 1;
//Switch to change page settings for Lulu &c:
//Settings can be:
//     '' (Blank) for 4.25x6.75
//     '7' for 4.25x7
//     'L4' for Lulu 4.25 x 6.875
//     'L6' for Lulu 6 x 9
$_GET['Style'] = 'L6';

//Switch to determine size of headings:
// 0 = smaller headings (used in propers)
// 1 = larger headings (used in ordinary & psalter)
$_GET['O'] = 0;

// require '050_hymns.php';
// require '051_my_hymns.php';
// require '00/Prayer/0index.php';
// require '6ComS/690_OfficeDead.php';

// echo '   <p:P182/>';
// require '210_part_proper_seasons.php';
// require '510_part_proper_saints.php';
// require '610_part_common_saints.php';

//hymn('vexilla_regis_prodeunt.php');

// brS('0test.php');
// echo '   <p:Head1NI/>';


require '100_intro.php';
echo '   <text:section text:style-name="Sect1" text:name="Section1" text:protected="true">';
require '150_calendar.php';
require '200_proper_seasons.php';
$_GET['O'] = 1;
require '300_ordinary.php';
require '400_psalter.php';
$_GET['O'] = 0;

require '500_proper_saints.php';
require '6ComS/600_common_saints.php';

require '700_appendix.php';
echo '   </text:section>';
require '998_indices.php';

require '999_end.php';
?>
