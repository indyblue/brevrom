<?php

function caps_first_word($sline) {
	return first_word($sline);
}

function first_word($sline,$minlen=2,$retarr=0) {
	$split = mb_split(' ',$sline,3);
	$i = mb_strlen($split[0]);
	if(count($split)==1) array_push($split,"");
	if(count($split)==2) array_push($split,"");
	if($i>$minlen) 
		$split[2] = $split[1] .' '. $split[2];
	elseif($i=$minlen) {
		if(mb_ereg_match('\w',mb_substr($split[0],$minlen-1,1))) 
			$split[2] = $split[1] .' '. $split[2];
		else
			$split[0] .= ' '. $split[1];
	} else 
			$split[0] .= ' '. $split[1];

	if($retarr>0)
		return array($split[0],$split[2]);
	elseif($retarr<0)
		return $split[0];
	else
		return mb_strtoupper($split[0]) . ' ' . $split[2];
	//	return '<s:AllCaps>' . $split[0] . '</s> ' . $split[2];
	//	<s:SmCaps></s>
	//	<s:AllCaps></s>
	
}

function start_phrase($sline,$minlen=10,$retarr=0) {
	$split = mb_split(' ',$sline);
	$retstr = '';
	$len = 0;
	for($i=0;$len<$minlen;$i++) {
		$retstr .= ' '. $split[$i];
		$len = mb_strlen($retstr);
	}
	return trimP($retstr);
}

function trimP($string) {
	return trim($string," \t—-.,;:!?");
}

?>
