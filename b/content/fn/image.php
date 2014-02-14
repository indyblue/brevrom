<?php

function img($fname='separator4.tif', $pct='33') {
	$dir = "/www/b/Images/";
	$tmp = getimagesize($dir . $fname);
	if($tmp[0]==0)
		trigger_error('File '. $fname .' does not appear to be an image. Width returned 0.', E_USER_ERROR);
	$width = $tmp[0];
	$height = $tmp[1];
	echo '<p:Head3><draw:frame text:anchor-type="as-char" svg:width="' . $width .'" style:rel-width="' . $pct . '%" svg:height="' . $height . '" style:rel-height="scale"><draw:image xlink:href="../Images/' . $fname . '" xlink:type="simple" xlink:show="embed" xlink:actuate="onLoad"/></draw:frame></p>
';
}

?>
