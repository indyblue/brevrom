<?php
namespace fssr;
include_once 'fn/1init.php';

foreach($GLOBALS as $i=>$v) {
//	if(is_string($v)) echo "$i = $v<br>";
}

include_once "{$$l}/$varia";

$p = new pars();
$file =  "{$$l}/$ord_gen/$h.txt";


//echo "cwd: ".getcwd()."<br>";
//echo $file;
if(!file_exists($file)) die("<h1>ERROR: no file $file</h1>");


$arr = file($file,  FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

//echo "<pre>".var_dump($ord,1)."</pre>";

for($i=0;$i<count($arr);$i++){
	$l = $arr[$i];
	while(preg_match('/{[^}]*$/',$l)) {
		$i++;
		$l .= ' '.$arr[$i];
	}
	/*
	while(false||mb_substr($l,-1)!==';') {
		$i++;
		$l .= ' '.$arr[$i];
	}
	//*/

	// variae
	if(preg_match('/^@([^;]+);/',$l, $match)!==0) {
		$cmd = $match[1];
		if(isset($varia[$cmd]))
			$cmd = $varia[$cmd];
		else
			die("<h1>ERROR: couldn't find \$varia['$cmd']</h1>");
		
		if(is_string($cmd)) 
			echo "$cmd<br>";
		else if(is_array($cmd)) {
			foreach($cmd as $cmd1) {
				echo "$cmd1<br>";
			}
		}
			

		//echo "<pre>".var_dump($match,1)."</pre>";
	} 
	// variable parts 
	else if(preg_match('/^\[([^\]]+)\]/',$l, $match)!==0) {
		echo "<pre>".var_dump($match,1)."</pre>";

	} else {
		echo "$l<br>";
	}
	echo "<br>";
}
	
//echo hora($h, $t, $f, $s);

// $hour = m,l,p,t,s,n,v,c
// $type = s,t (sanctus, tempore)
// $file = file name
// $season = season abbrev (optionally with week-feria)
function hora($hour, $type, $file, $season) {
	echo "THIS IS A BIG FAT TEST!";
}

include_once 'fn/2end.php';

?>
