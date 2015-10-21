<?php 
//ini_set('allow_url_fopen', 1);

//*
if(!isset($_REQUEST['x'])) {

	// because this routine takes several seconds to run,
	// we will store the results in a file, and use this file
	// for any additional requests in the next few minutes
	$file = getcwd().'/content/htm_links.php';
	if(file_exists($file) && time()-filemtime($file)<300) {
		require $file;
		foreach($n0[1] as $i) {
			unset($links[$i]);
		}
		//echo "<pre>".var_export($links,1)."</pre>";
	} else {

		ob_start();
		require 'htm_k.htm';
		$htm = ob_get_contents();
		ob_end_clean();

		$links = [];
		$x = preg_match_all('/<a [^>]*href="(?:kindle\/)?([^"]*)/i', $htm, $m);
		//var_dump($m);
		$x = preg_match_all('/<text:bookmark.*text:name="([^"]*)"\/>/', $txtContent, $n0);
		foreach($m[1] as $url) {
			if(strpos($_SERVER["REQUEST_URI"], $url)!==false
				|| strpos($url, '#')!==false
				|| strpos($url, '/en/')!==false) {
				continue;
			}

			$htm = file_get_contents("http://localhost/b/kindle/$url&x=1");
			$x = preg_match_all('/<text:bookmark.*text:name="([^"]*)"\/>/', $htm, $n);
			foreach($n[1] as $i) {
				if(!isset($links[$i]))
					$links[$i] = "$url#$i";
			}
		}
		file_put_contents($file, "<?php\n \$links = ".var_export($links,1).';');

		foreach($n0[1] as $i) {
			unset($links[$i]);
		}

	}

}
//exit;
// */
?>
