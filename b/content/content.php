<?php
function psalm($file, $part=0, $cross=0) {
	$dir = "/wamp/www/b/content/00/Psalm/";
		include $dir.$file;
}
function canticle($file, $part=0, $cross=0) {
	$dir = "/wamp/www/b/content/00/Canticle/";
		include $dir.$file;
}
/* 
<?php rubrics('asIn.php','csApLCLauds','Lauds','Little Chapter'); ?> 
*/
function rubrics($file, $link='', $location='I Vespers', $content='Psalms and antiphons') {
	$dir = "/wamp/www/b/content/00/Rubrics/";
		include $dir.$file;
}
function vr($file, $option=0) {
	$dir = "/wamp/www/b/content/00/VR/";
		include $dir.$file;
}
function prayer($file, $nameL='N.', $nameE='N.', $mart=-1) {
	$dir = "/wamp/www/b/content/00/Prayer/";
		include $dir.$file;
}
function hymn($file, $option=0) {
	$dir = "/wamp/www/b/content/00/Hymn/";
//	echo '<text:p text:style-name="Head0"/>';
	include $dir.$file;
	echo '<text:p text:style-name="BodySm"/>';
}
function lc($file) {
	$dir = "/wamp/www/b/content/00/LittleChapter/";
	include $dir.$file;
}
function ant($file, $number=0, $astrisk=0) {
	$dir = "/wamp/www/b/content/00/Antiphon/";
		include $dir.$file;
}

function img($name='separator4.tif', $width='619', $height='59', $pct='33') {
	$dir = "/wamp/www/b/content/00/Rubrics/";
	echo '   <text:p text:style-name="Head3"><draw:frame text:anchor-type="as-char" svg:width="' . $width .'" style:rel-width="' . $pct . '%" svg:height="' . $height . '" style:rel-height="scale"><draw:image xlink:href="../Images/' . $name . '" xlink:type="simple" xlink:show="embed" xlink:actuate="onLoad"/></draw:frame></text:p>';
}

/*
<?php img('Saints/0908_nativity_of_bvm.tif',1371,412,100); ?>
$_GET['n'] = 3;
<?php if ($_GET['n']==0): ?>a<?php else: ?>c<?php endif; ?>

<text:p text:style-name="BkHidden"><text:bookmark text:name="vrDominusVobiscum"/></text:p>
<text:bookmark-ref text:reference-format="page" text:ref-name="Ps5"/>
<?php echo ($cross==1?'‡':'') ?>

<?php if ($part==0): ?>
<?php endif; ?>
<?php echo ($part==0?'"BodyLDrop">':'"BodyLIndent">') ?>
<?php echo ($part==0?'"BodyEDrop">':'"BodyEIndent">') ?>

	<text:p text:style-name="Head1"><?php 
echo ($_GET['L']==1?'':'') 
?></text:p>
<?php if ($_GET['L']==1): ?>
<?php else: ?>
<?php endif; ?>

<?php canticle('athanasian.php'); ?>
:Psalmus 115
<\/table:table>
%s/^.* Nonam.*$/<?php rubrics('head\/None.php'); ?>/
<?php rubrics('ps/ComBVM.php'); ?>
<?php vr('br/nimis_honorati_sunt.php'); ?>
<?php lc('wis5_1.php'); ?>

<?php hymn('domare_cordis_impetus_elisabeth.php'); ?>

%s/^.*$/      <text:p text:style-name="HymnE">\0</text:p>
%s/&apos;\|'/’/ig
<text:p text:style-name="RubricHidden">
Author: St. Ambrose (attributed)
Trans: Fr. E.Caswall
</text:p>
<text:span text:style-name="HymnR">L</text:span>
‘’
“”

*/

include '001_start.php';

//Switch to determine if headings are in English or Latin
$_GET['L'] = 1;
//Switch to determine size of headings:
// 0 = smaller headings (used in propers)
// 1 = larger headings (used in ordinary & psalter)
$_GET['O'] = 0;
//include '050_hymns.php';

// include '100_intro.php';
// echo '   <text:section text:style-name="Sect1" text:name="Section1" text:protected="true">';
// include '150_calendar.php';
// include '200_proper_seasons.php';
// $_GET['O'] = 1;
// include '300_ordinary.php';
// include '400_psalter.php';
// $_GET['O'] = 0;
// include '500_proper_saints.php';

include '6ComS/600_common_saints.php';

// include '650_office_dead.php';
// include '700_appendix.php';
// echo '   </text:section>';

include '999_end.php';
?>
