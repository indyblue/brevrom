<?php

/* 
<?php rubrics('asIn.php','csApLCLauds','Lauds','Little Chapter'); ?> 
*/
function hour($h, $size=2) {
	$h1 = 0;
	$h2 = 0;
	$hourL = array('M' => 'ad Matutínum', 'L' => 'ad Laudes', 
		'P' => 'ad Primam', 'T' => 'ad Tértiam', 
		'S' => 'ad Sextam', 'N' => 'ad Nonam', 
		'V' => 'ad Vésperas', '1V' => 'ad I Vésperas',
		'2V' => 'ad II Vésperas', 'C' => 'ad Completórium',
		'H' => 'ad Horas');
	$hourE = array('M' => 'at Matins', 'L' => 'at Lauds', 
		'P' => 'at Prime', 'T' => 'at Terce', 
		'S' => 'at Sext', 'N' => 'at None', 
		'V' => 'at Vespers', '1V' => 'at I Vespers',
		'2V' => 'at II Vespers', 'C' => 'at Compline',
		'H' => 'at the Little Hourss');
	if($size=='O') {
		$size = 1;
		$h1 = 'Ordinary';
		$h2 = 2;
	}
	head($hourL[$h], $hourE[$h], $size, $h1, $h2);
}

function feria($d, $class=3, $size=2) {
	$h1 = 0;
	$h2 = 0;
	$dayL = array(2 => 'Feria Secunda',
		3 => 'Feria Tertia', 
		4 => 'Feria Quarta', 
		5 => 'Feria Quinta', 
		6 => 'Feria Sexta', 
		7 => 'Sabbato');
	$dayE = array(2 => 'Monday',
		3 => 'Tuesday', 
		4 => 'Wednesday', 
		5 => 'Thursday', 
		6 => 'Friday', 
		7 => 'Saturday');
	$clnameL = array('Commemoratio', 'I classis', 'II classis', 'III classis',
		23 => 'II vel III classis');
	$clnameE = array('Commemoration', 'I class', 'II class', 'III class',
		23 => 'II or III class');
	$clname = array('Commem.', 'I cl.', 'II cl.', 'III cl.');
	head($dayL[$d], $dayE[$d], $size, $h1, $h2);
	if($class<0) {
		$class = -$class;
		head('Quatuor Temporum','Ember Day',4);
	}
	head($clnameL[$class],$clnameE[$class], 5);
}

function head_sect($date, $class, $nameL, $nameE, $descr='', $head1=0, $head2=0) {
	//put latin switch in local variable
	$L = $_GET['L'];

	//set class
	if($class==1) $clname = 'I class';
	elseif($class==2) $clname = 'II class';
	elseif($class==3) $clname = 'III class';
	elseif($class==0) $clname = 'Commem.';
	else trigger_error('Invalid class for '. $date
	  	.' ('. $nameE .')', E_USER_ERROR);
	
	//process date
	if(is_array($date)) {
		$Ldate = $date[0];
		$Edate = $date[1];
	} elseif($date>100) {
		$date = convert_date($date);
		$Ldate = $date[0];
		$Edate = $date[1];
	} else {
		$Ldate = $date;
		$Edate = $date;
	}

	//process description
	if(is_array($descr)) {
		$Ldescr = $descr[0];
		$Edescr = $descr[1];
	} else {
		$Ldescr = $descr;
		$Edescr = $descr;
	}

	//  <p:Hidden1>' . $Edate . ' - ' .$nameE .'</p>
	if($head1)
		hidden($head1,1);
	//a value of 1 defaults to printing the date
	if($head2==1)
		hidden(($L==1?$Ldate:$Edate));
	elseif($head2)
		hidden($head2);

	echo '
  <p:Head1' . 
  ($class==1&&$class==2?'':'NI') . '>' . ($_GET['L']==1?$nameL:$nameE) .'</p>
  <p:Head5>' . ($_GET['L']==1?$nameE:$nameL) .'</p>
  <p:Head4>'. $descr . ($descr?' - ':'') . $clname . ' - ' . ($_GET['L']==1?$Edate:$Edate) .'</p>
';

}

function head_temp($class, $nameL, $nameE, $descr='', $head1=0, $head2=0) {
	//put latin, parallel switchs in local variables
	$L = $_GET['L'];
	$par = $_GET['par'];

	$clnameL = array('Commemoratio', 'I classis', 'II classis', 'III classis');
	$clnameE = array('Commemoration', 'I class', 'II class', 'III class');
	$clname = array('Commem.', 'I cl.', 'II cl.', 'III cl.');
	
	if($head1)
		hidden($head1,1);
	if($head2)
		hidden($head2);

	head($nameL,$nameE,1);
	if(is_array($descr)) {
		if(strlen($descr[0].$descr[1]) > 40) 
			head($clname[$class] .' '. $descr[0], 
				$clname[$class] .' '. $descr[1], 14);
		else 
			head('', $clname[$class] .' '. $descr[0] 
				.' — '. $clname[$class] .' '. $descr[1], 4);
	}
	else
		if($L) head($clnameL[$class],'', 4);
		else head('', $clnameE[$class], 4);

}

function head($L, $E, $size=3, $h1=0, $h2=0) {
	$Llang = $_GET['L'];
	$par=0;

	if($size<0 || $_GET['par']) {
		$par=1;
		if(!is_string($size))
			$size = abs($size);
	}

	//inter-linear option
	$interl = false;
	if($size>=10) {
		$size = $size - 10;
		$interl = true;
	}
	if(strlen($L)==0) {
		$par = 0;
		$Llang = 0;
	} elseif(strlen($E)==0) {
		$par = 0;
		$Llang = 1;
	}

	if($h1) {
		if($h1==1) $h1 = $L;
		elseif($h1==2) $h1 = $E;
		hidden($h1,1);
	}
	if($h2) {
		if($h2==1) $h2 = $L;
		elseif($h2==2) $h2 = $E;
		hidden($h2,2);
	}
	if(!$par) {
		echo '  <p:Head'. $size .'>' . ($Llang==1?$L:$E) ."</p>\n";
	} 	elseif($size<2 || $interl) { 
		echo '  <p:Head'. $size .'>' . ($Llang==1?$L:$E) ."</p>\n".
			'  <p:Head5>' . ($Llang==1?$E:$L) ."</p>\n";
	} 	else { 
		echo "\n  <tableH><tr><td:A1>\n".
			'   <p:Head'. $size .'>'. $L ."</p>\n".
			"   </td><td:B2>\n".
			'   <p:Head'. $size .'>'. $E ."</p>\n".
			"  </td></tr></table>\n";
	}

}

function hidden($txt, $level=2) {
	echo '<h:Hidden'.	$level .'>' . $txt ."</h>\n";
}

// this function is used in the psalter, for constructing headings
// and other parts which come before the psalms at the beginning
// of the hours.
function dayhour($d, $h, $size=1) {
	$long = $_GET['long'];
	$dayL = array('','Domínica','Feria secúnda','Feria tértia',
		'Feria quárta','Feria quínta','Feria sexta','Sábbato');
	$dayE = array('','Sunday','Monday','Tuesday',
		'Wednesday','Thursday','Friday','Saturday');
	$hourL = array('M' => 'ad Matutínum', 'L' => 'ad Laudes', 
		'L1' => 'ad Laudes I', 'L2' => 'ad Laudes II', 
		'P' => 'ad Primam', 'T' => 'ad Tértiam', 
		'S' => 'ad Sextam', 'N' => 'ad Nonam', 
		'V' => 'ad Vésperas', '1V' => 'ad I Vésperas',
		'2V' => 'ad II Vésperas', 'C' => 'ad Completórium');
	$hourE = array('M' => 'at Matins', 'L' => 'at Lauds', 
		'L1' => 'at Lauds I', 'L2' => 'at Lauds II', 
		'P' => 'at Prime', 'T' => 'at Terce', 
		'S' => 'at Sext', 'N' => 'at None', 
		'V' => 'at Vespers', '1V' => 'at I Vespers',
		'2V' => 'at II Vespers', 'C' => 'at Compline');

	// if $size<0, only the header is printed
	if($size<0) {
		$size = abs($size);
		$short = true;
	}
	$h1 = 'Psalter';
	$h2 = 2;

	//prints the heading for the hour
	head($dayL[$d] .' '. $hourL[$h], 
		$dayE[$d] .' '. $hourE[$h], 
		$size, $h1, $h2);

	// this section prints short form of opening versicle,
	// hymns and groups of antiphons where appropriate.
	// Matins and Compline begin differently from all other hours,
	// and thus are handled differently.
	if($short);
	elseif($h=='M') {
		vr('domine_labia_short.php');
	} elseif($h=='C') {
		if($long==0) rubp('','The hour begins as in the Ordinary, <snr>p. ' . bkref('orCompline') .'.</s>');
		else require $_GET['root'] . '/2Psalter/08_compline_s1.php';
	} else {
		// all other hours begin with this versicle
		vr('deus_in_adjutorium_short.php');
		// at the little hours, the hymn immediately follows 
		// the versicle
		if(csv_match($h,'P,T,S,N')) {
			rubrics('head/HymnVerse.php');
			if($h=='P') hymn('jam_lucis_orto_sidere.php');
			elseif($h=='T') hymn('nunc_sancte_nobis_spiritus.php');
			elseif($h=='S') hymn('rector_potens_verax_deus.php');
			elseif($h=='N') hymn('rerum_deus_tenax_vigor.php');
			space(4);
			// if the day is not Sunday, a block of seasonal antiphons
			// are printed after the hymn
			$hn = array('P'=>2, 'T'=>3, 'S'=>4, 'N'=>5);
			bookmark('LHant'. $d . $h);
			if($d>1) multiant($d,$hn[$h]);
		}
	}
}

/*
	rubrics('ps/hour_continues.php');
	dayhourE(2,'L1');


*/
// this function is used in the psalter, for constructing 
// the ending of hours; all parts which come after the psalms.
function dayhourE($d, $h, $size=1) {
	$long = $_GET['long'];
	if($h=='M');
	elseif(csv_match($h,'L,L1')) {
		rubp('Cant. <snr>Benedíctus p. '. bkref('benedictus') .'</s>','');
		vr('oratio_L_ps.php');
	} elseif($h=='L2') {
		rubrics('ps/hour_continues2.php');
	} elseif(csv_match($h,'V,1V,2V')) {
		rubp('Cant. <snr>Magníficat p. '. bkref('magnificat') .'</s>','');
		vr('oratio_V_ps.php');
	} elseif($h=='C') {
		if($long==0) rubp('','The hour continues in the Ordinary, with the hymn <snr>Te lucis ante términum</s>, <snr>p. ' . bkref('te_lucis_ante_terminum') .'.</s>');
		else require $_GET['root'] . '/2Psalter/08_compline_s2.php';
	} elseif($h=='P') {
		if($d>1) rubp('','Or the appropriate seasonal antiphon is repeated, <snr>p. '. bkref('LHant'. $d . $h) .'</s>.');
		if($long==0) rubp('','The hour continues in the Ordinary, with the capit. <snr>Regi sæculórum</s>, <snr>p. ' . bkref('1tim1_17') .'.</s>');
		else require $_GET['root'] . '/2Psalter/03_prime_s.php';
	} elseif(csv_match($h,'T,S,N')) {
		if($d>1) rubp('','Or the appropriate seasonal antiphon is repeated, <snr>p. '. bkref('LHant'. $d . $h) .'</s>.');
		if($d==7) 
			rubrics('ps/hour_continues_sat.php');
		else {
			rubrics('ps/hour_continues.php');
			if($h=='T') {
				if($d==1) {
					lc('1john4_16.php');
					brS('Ord/inclina_cor_meum_deus_in_testimonia_tua.php');
					vrS('Ord/ego_dixi_domine_miserere_mei.php');
				} else {
					lc('jer17_14.php');
					brS('Ord/sana_animam_meam_quia_peccavi_tibi.php');
					vrS('Ord/adjutor_meus_esto_ne_derelinquas_me.php');
				}
			} elseif($h=='S') {
				if($d==1) {
					lc('gal6_2.php');
					brS('Ord/in_aeternum_domine_permanet_verbum_tuum.php');
					vrS('Ord/dominus_regit_me_et_nihil_mihi_deerit.php');
				} else {
					lc('rom13_8.php');
					brS('Ord/benedicam_dominum_in_omni_tempore.php');
					vrS('Ord/dominus_regit_me_et_nihil_mihi_deerit.php');
				}
			} elseif($h=='N') {
				if($d==1) {
					lc('1cor6_20.php');
					brS('Ord/clamavi_in_toto_corde_meo_exaudi_me_domine.php');
					vrS('Ord/ab_occultis_meis_munda_me_domine.php');
				} else {
					lc('1pet1_17.php');
					brS('Ord/redime_me_domine_et_miserere_mei.php');
					vrS('Ord/ab_occultis_meis_munda_me_domine.php');
				}
			}
		}
	}
}

?>
