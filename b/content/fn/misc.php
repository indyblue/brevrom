<?php

function space($type='BodySm') {
	if($type=='Line') $type='P191';
	elseif($type=='PgB') $type='P181';
	elseif($type=='PgH') $type='P182';
	elseif($type=='PgH1') $type='P180';
	elseif($type=='PgI') $type='P179';
	echo '
  <p:'. $type .'/>
';
}

function bookmark($link='') {
	echo '
<p:BkHidden><text:bookmark text:name="' . $link . '"/></p>
';
}

// regex search to check for bkref not in echo
// \v(echo.*)@<!bkref\(
function bkref($link='') {
	return '<text:bookmark-ref text:reference-format="page" text:ref-name="' . $link . '">1</text:bookmark-ref>';
}

function PrV($file, $option=0) {
	$dir = "/www/b/content/00/VR/prime/";
	if($option==0)
		rubrics('ord/prime_brv.php');
		require $dir.'0Versicle.php';
}

/*
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
 */



?>
