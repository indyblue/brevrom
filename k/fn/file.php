<?php
namespace fssr;

function file_parse($files, $p) {
	if(is_string($files))
		$file = $files;

	ob_start(); 


	//echo "cwd: ".getcwd()."<br>";
	//echo $file;
	if(!file_exists($file)) die("<h1>ERROR: no file $file</h1>");


	$arr = file($file,  FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

	//echo "<pre>".var_dump($ord,1)."</pre>";

	$out = [];
	for($i=0;$i<count($arr);$i++){
		$l = file_parse\next_line($arr, $i);
		/*
		$l = $arr[$i];
		while(preg_match('/{[^}]*$/',$l)) {
			$i++;
			$l .= ' '.$arr[$i];
		}
		*/

		// variae
		if(preg_match('/^@([^;]+)$/',$l, $match)!==0) {
			$cmd = $match[1];
			$short = 0;
			if($short && isset($p->varia_short[$cmd]))
				$cmd = $p->varia_short[$cmd];
			else if(isset($p->varia[$cmd]))
				$cmd = $p->varia[$cmd];
			else
				die("<h1>ERROR: couldn't find \$varia['$cmd']</h1>");
			
			//$out[$match[1]] = $cmd;
			if(is_array($cmd))
				$out = array_merge($out, $cmd);
			else $out[] = $cmd;
		} 

		// variable parts 
		else if(preg_match('/^#(?<n>[^\[]+)\[(?<c>\])?/',$l, $match)!==0) {
			$subout = null;
			if(!isset($match['c'])) {
				$subout = [];
				//*
				do {
					$i++;
					$l2 = file_parse\next_line($arr, $i);
					if(preg_match('/^\s*\]\s*$/',$arr[$i])) break;
					$subout[] = $l2;
				} while($i<count($arr));
				// */
			}

			$out[$match[1]] = $subout;
			
		} 
		
		// "normal" inline parts
		else {
			$out[] = $l;
		}
	}
	var_dump($out);

	$txtContent = ob_get_contents(); 
	ob_end_clean(); 
	return $txtContent;
}

/*******************************************************************/
/*******************************************************************/
/*******************************************************************/
namespace fssr\file_parse;

function next_line($arr, &$i) {
	$carr = count($arr);
	$l = $arr[$i];
	while($i<$carr && preg_match('/{[^}]*$/',$l)) {
		$i++;
		$l .= ' '.$arr[$i];
	}
	return $l;
}
