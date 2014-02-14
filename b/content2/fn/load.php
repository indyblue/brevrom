<?php

function load($str) {
	$txt = new txt;
	$i = $stripos($str,'L|');

	if($i>0 {
		$i += 2;
		$i2 = $stripos($str,'|',$i);
		$ret->L = substr($str,$i,$i2-$i);
	} else {

	// scan latin directory, filter return for matches
	$ls = scandir($dir);
	// see if actual file name has been passed, or just psalm number
	if(strpos($num,'.php')!==false)
		$fname = $num;
	else
		$fname = sprintf("%03s",$num) . ($part>0?'-'.dechex($part):'');
	$callback = create_function('$args',
		'return strpos($args,"'.$fname.'")!==false;');
	$ls = array_values(array_filter($ls,$callback));


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

