<?php

function style_first_letter($sline,$style) {
	if(strpos($sline,'<')!==false)
		return $sline;
	else
		return '<'. $style .'>'. mb_substr($sline,0,1) .
			'</s>'. mb_substr($sline,1);
}

?>
