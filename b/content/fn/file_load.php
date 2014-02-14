<?php

function file_load($file) {
	ob_start(); // start buffer
	require ($file);
	
	$txtContent = ob_get_contents(); // assign buffer contents to variable
	ob_end_clean(); // end buffer and remove buffer contents
	
	$pieces = explode(chr(13).chr(10),$txtContent);
	$pieces = array_map('trim',$pieces);
	return $pieces;
}
function E($file) {
	$i = strrpos($file,'/');
	if($i>0)
		return substr($file,0,$i) . '/E' . substr($file,$i);
	else
		return 'E/' . $file;
}
function C($file) {
	$i = strrpos($file,'/');
	if($i>0)
		return substr($file,0,$i) . '/AL' . substr($file,$i);
	else
		return 'AL/' . $file;
}
?>
