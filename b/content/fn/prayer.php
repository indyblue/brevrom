<?php
function prayer($file, $nameL='', $nameE='') {
	$dir = "/www/b/content/00/Prayer/";

	$Lpieces = file_load($dir.$file);
	$Epieces = file_load($dir.E($file));

	$L = $Lpieces[0];
	$E = $Epieces[0];

	if(strlen($nameL)>0) {
		if(strlen($nameE)==0)
			trigger_error('Latin substitute name given for ant. ' . $file . ', but no English name given.', E_USER_ERROR);
		$L = str_replace(array('<sr>N.</s>','<sr>P.</s>'),$nameL,$L);
		$E = str_replace(array('<sr>N.</s>','<sr>P.</s>'),$nameE,$E);
	} elseif(strpos($L,'P.')!==false) {
		$L = str_replace('<sr>P.</s>','<sr>N.</s> et <sr>N.</s>',$L);
		$E = str_replace('<sr>P.</s>','<sr>N.</s> and <sr>N.</s>',$E);
	}
	echo 'test'. strpos($L,'P.');
	echo '<table><tr><td:A1>
<p:BodyLDrop>'. caps_first_word($L) .'</p>
</td><td:B1>
<p:BodyEDrop>'. caps_first_word($E) .'</p>
</td></tr></table>
';

}
?>
