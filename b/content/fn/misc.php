<?php

function space($type='BodySm') {
	echo '
  <p:'. $type .'/>
';
}

function bookmark($link='') {
	echo '
<p:BkHidden><text:bookmark text:name="' . $link . '"/></p>
';
}
function bkref($link='') {
	return '<text:bookmark-ref text:reference-format="page" text:ref-name="' . $link . '">1</text:bookmark-ref>';
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



?>
