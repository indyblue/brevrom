<?php

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
function PrV($file, $option=0) {
	$dir = "/www/b/content/00/VR/prime/";
		rubrics('ord/prime_brv.php');
		require $dir.'0Versicle.php';
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


function img($name='separator4.tif', $width='619', $height='59', $pct='33') {
	$dir = "/www/b/content/00/Rubrics/";
	echo '   <p:Head3><draw:frame text:anchor-type="as-char" svg:width="' . $width .'" style:rel-width="' . $pct . '%" svg:height="' . $height . '" style:rel-height="scale"><draw:image xlink:href="../Images/' . $name . '" xlink:type="simple" xlink:show="embed" xlink:actuate="onLoad"/></draw:frame></p>';
}

?>
