<?php
/*
!!!!!!BACKUP BEFORE USING!!!!!!!!
set backup | set nomore | ar *.php *\*.php *\*\*.php *\*\*\*.php
ar *.php~ *\*.php~ *\*\*.php~ *\*\*\*.php~
redir >das.txt | argdo g/\vBodyL.*\v\c<(<u|\w*[b-pr-zæœ]u|\w*[aeioyæœ]){3,}\w*>
g/E486/-2,d
g/lines,/d
%s/<[^>]*>/<>/ig

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
	$dir = "/wamp/www/b/content/00/Psalm/";
		require $dir.$file;
}
function canticle($file, $part=0, $cross=0) {
	$dir = "/wamp/www/b/content/00/Canticle/";
		require $dir.$file;
}
/* 
<?php rubrics('asIn.php','csApLCLauds','Lauds','Little Chapter'); ?> 
*/
function rubrics($file, $link='', $location='I Vespers', $content='Psalms and antiphons', $nr='') {
	$dir = "/wamp/www/b/content/00/Rubrics/";
		require $dir.$file;
}
function vr($file, $option=0) {
	$dir = "/wamp/www/b/content/00/VR/long/";
		require $dir.$file;
}
function vrS($file, $option=0) {
	$dir = "/wamp/www/b/content/00/VR/";
		require $dir.'0VersicleResponse.php';
}
function brS($file, $option=0) {
	$dir = "/wamp/www/b/content/00/VR/";
		require $dir.'0BriefRespond.php';
}
function prayer($file, $nameL='N.', $nameE='N.') {
	$dir = "/wamp/www/b/content/00/Prayer/";
		require $dir.'0Prayer.php';
}
function hymn($file, $option=0) {
	$dir = "/wamp/www/b/content/00/Hymn/";
//	echo '<text:p text:style-name="Head0"/>';
	require $dir.'0Hymn.php';
//	echo '<text:p text:style-name="BodySm"/>';
}
function lc($file, $text='') {
	$dir = "/wamp/www/b/content/00/LittleChapter/";
	require $dir.'0LittleChapter.php';
}
//$incs is the include pattern:
// 0 - not displayed
// 1 - for no astrisk no number
// * - for astrisk but no number
// # - for number but no astrisk
// 2 - for both astrisk & number
function ant($file, $incs='*') {
	$dir = "/wamp/www/b/content/00/Antiphon/";
		require $dir.'0Antiphon.php';
}
function antN($file, $nameL='N.', $nameE='N.') {
	$dir = "/wamp/www/b/content/00/Antiphon/";
		require $dir.$file;
}
function headSt($date, $class, $nameL, $nameE, $descr='') {
	if($class==1) $clname = 'I class';
	if($class==2) $clname = 'II class';
	if($class==3) $clname = 'III class';
	if($class==0) $clname = 'Commem.';
?>
	<text:p text:style-name="Hidden1"><?php echo $date . ' - ' .$nameE; ?></text:p>
	<text:p text:style-name="Head1<?php 
echo ($class==1||$class==2?'':'NI') . '">' . ($_GET['L']==1?$nameL:$nameE) 
?></text:p>
	<text:p text:style-name="Head2"><?php
	echo $descr . ($descr?' - ':'') . $clname . ' - ' . $date; ?></text:p>
   <text:p text:style-name="BodySm"/>
<?php

}


function img($name='separator4.tif', $width='619', $height='59', $pct='33') {
	$dir = "/wamp/www/b/content/00/Rubrics/";
	echo '   <text:p text:style-name="Head3"><draw:frame text:anchor-type="as-char" svg:width="' . $width .'" style:rel-width="' . $pct . '%" svg:height="' . $height . '" style:rel-height="scale"><draw:image xlink:href="../Images/' . $name . '" xlink:type="simple" xlink:show="embed" xlink:actuate="onLoad"/></draw:frame></text:p>';
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
//Switch to determine size of headings:
// 0 = smaller headings (used in propers)
// 1 = larger headings (used in ordinary & psalter)
$_GET['O'] = 0;

// require '050_hymns.php';
// require '00/Prayer/0index.php';

// echo '   <text:p text:style-name="P182"/>';
require '510_part_proper_saints.php';

//hymn('vexilla_regis_prodeunt.php');

// brS('0test.php');
// echo '   <text:p text:style-name="Head1NI"/>';


// require '100_intro.php';
// echo '   <text:section text:style-name="Sect1" text:name="Section1" text:protected="true">';
// require '150_calendar.php';
// require '200_proper_seasons.php';
// $_GET['O'] = 1;
// require '300_ordinary.php';
// require '400_psalter.php';
// $_GET['O'] = 0;
// 
// require '500_proper_saints.php';
// require '6ComS/600_common_saints.php';
// 
// require '700_appendix.php';
// echo '   </text:section>';
// require '998_indices.php';

require '999_end.php';
?>
