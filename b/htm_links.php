<?php 
/*
ob_start();
require 'htm_k.htm';
$htm = ob_get_contents();
ob_end_clean();

$x = preg_match_all('/<a [^>]*href="([^"]*)/i', $htm, $m);
//var_dump($m);
foreach($m[1] as $url) {
	$url = preg_replace('/kindle\/(en\/)?(.*)/', '\2', $url);
	echo "content/$url";
	ob_start();
	require "content/$url";
	$htm = ob_get_contents();
	ob_end_clean();
	$x = preg_match_all('/<a [^>]*name="([^"]*)/i', $htm, $n);
	var_dump($n[1]);
}
exit;
*/
?>
