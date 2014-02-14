<?php

function style_first_letter($sline,$style) {
	$i=0;
	while(mb_substr($sline,$i,1)=='<') {
		$i = mb_strpos($sline,'>',$i)+1;
	}

	return mb_substr($sline,0,$i) . 
			'<'. $style .'>'. mb_substr($sline,$i,1) .
			'</s>'. mb_substr($sline,$i+1);

//		return $sline;
//	else
//		return '<'. $style .'>'. mb_substr($sline,0,1) .
//			'</s>'. mb_substr($sline,1);
}

?>
