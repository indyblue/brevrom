<?php 
//ini_set('allow_url_fopen', 1);

/*
if(!isset($_REQUEST['x'])) {
	ob_start();
	require 'htm_k.htm';
	$htm = ob_get_contents();
	ob_end_clean();

	$x = preg_match_all('/<a [^>]*href="([^"]*)/i', $htm, $m);
	//var_dump($m);
	foreach($m[1] as $url) {
		$url = "http://localhost/b/$url&x=1";
		echo "<h1>$url</h1>";

		
		$htm = file_get_contents($url);
		echo "size: ".strlen($htm);
		$x = preg_match_all('/<text:bookmark.*text:name="([^"]*)"\/>/', $htm, $n);
		var_dump($n[1]);
	}
}
//exit;
// */
?>
