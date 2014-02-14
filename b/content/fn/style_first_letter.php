<?php

// if $style is 1, then convert first character to uppercase
function style_first_letter($sline,$style) {
	if(substr($sline,0,1)=='<')
		return $sline;
	elseif($style==1) 
		return mb_strtoupper(mb_substr($sline,0,1)) .
			mb_substr($sline,1);
	else
		return '<'. $style .'>'. mb_substr($sline,0,1) .
			'</s>'. mb_substr($sline,1);
	
/*
// This was a failed attempt to nest style information:
// failed, because OOo does not nest character styles,
// but character style is superceded by the innermost
// style. I don't know why I'm keeping it...
	$i=0;
	while(mb_substr($sline,$i,1)=='<') {
		$i = mb_strpos($sline,'>',$i)+1;
	}

	return mb_substr($sline,0,$i) . 
			'<'. $style .'>'. mb_substr($sline,$i,1) .
			'</s>'. mb_substr($sline,$i+1);
 */
}

?>
