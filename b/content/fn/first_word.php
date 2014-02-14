<?php

function caps_first_word($sline) {
	return first_word($sline);
}

function first_word($sline,$minlen=2,$retarr=0) {
	$split = mb_split(' ',$sline,3);
	$i = mb_strlen($split[0]);
	if($i>$minlen) 
		$split[2] = $split[1] .' '. $split[2];
	elseif($i=$minlen) {
		if(mb_ereg_match('\w',mb_substr($split[0],$minlen-1,1))) 
			$split[2] = $split[1] .' '. $split[2];
		else
			$split[0] .= ' '. $split[1];
	} else 
			$split[0] .= ' '. $split[1];

	if($retarr)
		return array($split[0],$split[2]);
	else
		return '<s:AllCaps>' . $split[0] . '</s> ' . $split[2];
	//	<s:SmCaps></s>
	//	<s:AllCaps></s>
	
}

?>
