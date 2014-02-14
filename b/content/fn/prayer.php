<?php
function prayer($file, $nameL='', $nameE='', &$ret=0) {
	$dir = $_GET['root'] . "/00/Prayer/";

	$Lpieces = file_load($dir.$file);
	$Epieces = file_load($dir.E($file));

	$L = $Lpieces[0];
	$E = $Epieces[0];

	$amen = '';
	if($nameL===0) {
		$nameL = '';
	} elseif($nameL===1) {
		$nameL = '';
		$amen = '<t> <s:VR>R.</s> Amen.';
	} elseif($nameL===2 
		|| (isset($_GET['prayer_ending']) 
			&& $_GET['prayer_ending']===1)) {
		$nameL = '';
		$ArrayLS = Array(
			'/Per\s*(eúmdem){0,1}\s*Dóminum.*(ejúsdem){0,1}/',
			'/Qui\s*tecum\s*vivit.*(ejúsdem){0,1}/',
			'/Qui\s*vivis.*(ejúsdem){0,1}/');
		$ArrayLL = Array(
			'Per \1 Dóminum nostrum, Jesum Christum, Fílium tuum, qui tecum vivit et regnat, in unitáte \2 Spíritus Sancti Deus, per ómnia sǽcula sæculórum.',
			'Qui tecum vivit et regnat in unitáte \1 Spíritus Sancti, Deus per ómnia sǽcula sæculórum.',
			'Qui vivis et regnas cum Deo Patre, in unitáte \1 Spíritus Sancti Deus, per ómnia sǽcula sæculórum.');
		$L = preg_replace($ArrayLS,$ArrayLL,$L);
		$ArrayES = Array(
			'/Through\s*(the\s*same){0,1}\s*(our Lord){0,1}.*(same){0,1}.*/',
			'/Who liveth.*(same){0,1}/',
			'/Who livest.*(same){0,1}/');
		$ArrayEL = Array(
			'Through \1 our Lord Jesus Christ, thy Son, who liveth and reigneth with thee in the unity of the \2 Holy Spirit, one God, world without end.',
			'Who liveth and reigneth with thee in the unity of the Holy Spirit, one God, world without end.',
			'Who livest and reignest with God the Father in the unity of the Holy Spirit, one God, world without end.');
		$E = preg_replace($ArrayES,$ArrayEL,$E);
		// Through our Lord.
		// Through our Lord...in the unity of the same Holy Spirit.
		// Through the same.
		// Who livest.
		// Who liveth.
		$amen = '<t> <s:VR>R.</s> Amen.';
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
	$ret = array($L,$E);
	echo '<table><tr><td:A1>
<p:BodyLDrop>'. caps_first_word($L) . $amen .'</p>
</td><td:B1>
<p:BodyEDrop>'. caps_first_word($E) . $amen .'</p>
</td></tr></table>
';

}
?>
