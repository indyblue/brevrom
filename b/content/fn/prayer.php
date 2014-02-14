<?php
function prayer($file, $nameL='', $nameE='') {
	$dir = $_GET['root'] . "/00/Prayer/";

	$Lpieces = file_load($dir.$file);
	$Epieces = file_load($dir.E($file));

	$L = $Lpieces[0];
	$E = $Epieces[0];

	$amen = '';
	if($nameL===1) {
		$nameL = '';
		$amen = '<t> <s:VR>R.</s> Amen.';
	} elseif($nameL===2) {
		$nameL = '';
/*
		$ejusdem = '';
		$ArrayLS = Array(
			'/Per Dóminum\.\.\.in unitáte ejúsdem Spíritus Sancti\./',
			'/Per Dóminum\./',
			'/Per eúmdem Dóminum\./',
			'/Qui tecum vivit\./',
			'/Qui vivis\./');
		$ArrayLL = Array(
			'Per Dóminum nostrum, Jesum Christum, Fílium tuum, qui tecum vivit et regnat, in unitáte ejúsdem Spíritus Sancti Deus, per ómnia sǽcula sæculórum.',
			'Per Dóminum nostrum, Jesum Christum, Fílium tuum, qui tecum vivit et regnat, in unitáte Spíritus Sancti Deus, per ómnia sǽcula sæculórum.',
			'Per eúmdem Dóminum nostrum, Jesum Christum, Fílium tuum, qui tecum vivit et regnat, in unitáte Spíritus Sancti Deus, per ómnia sǽcula sæculórum.',
			'Qui tecum vivit et regnat in unitáte Spíritus Sancti, Deus per ómnia sǽcula sæculórum.',
			'Qui vivis et regnas cum Deo Patre, in unitáte Spíritus Sancti Deus, per ómnia sǽcula sæculórum.');
		$L = preg_replace($regex,$repl,$txtContent);
		// Through our Lord.
		// Through our Lord...in the unity of the same Holy Spirit.
		// Through the same.
		// Who livest.
		// Who liveth.
*/
		$amen = '<t> <s:VR>R.</s> Amen.';
	}

	if(strlen($nameL)>0) {
		if(strlen($nameE)==0)
			trigger_error('Latin substitute name given for ant. ' . $file . ', but no English name given.', E_USER_ERROR);
		$L = str_replace(array('<sr>N.</s>','<sr>P.</s>'),$nameL,$L);
		$E = str_replace(array('<sr>N.</s>','<sr>P.</s>'),$nameE,$E);
	} elseif(strpos($L,'P.')!==false) {
		$L = str_replace('<sr>P.</s>','<sr>N.</s> et <sr>N.</s>',$L);
		$E = str_replace('<sr>P.</s>','<sr>N.</s> and <sr>N.</s>',$E);
	}
	echo '<table><tr><td:A1>
<p:BodyLDrop>'. caps_first_word($L) . $amen .'</p>
</td><td:B1>
<p:BodyEDrop>'. caps_first_word($E) . $amen .'</p>
</td></tr></table>
';

}
?>
