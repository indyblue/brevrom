<?php
namespace fssr;
include_once 'fn/1init.php';

foreach($GLOBALS as $i=>$v) {
//	if(is_string($v)) echo "$i = $v<br>";
}

//include_once "{$$l}/$varia";

$pl = new pars('la');
$file = $pl->folder('ord_gen', "$h.txt");


echo file_parse($file, $pl);
	
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
