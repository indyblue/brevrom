<?php

/* 
<?php rubrics('asIn.php','csApLCLauds','Lauds','Little Chapter'); ?> 
*/
function hour($h, $size=2) {
	$hourL = array('M' => 'ad Matutínum', 'L' => 'ad Laudes', 
		'P' => 'ad Primam', 'T' => 'ad Tértiam', 
		'S' => 'ad Sextam', 'N' => 'ad Nonam', 
		'V' => 'ad Vésperas', '1V' => 'ad I Vésperas',
		'2V' => 'ad II Vésperas', 'C' => 'ad Completórium');
	$hourE = array('M' => 'at Matins', 'L' => 'at Lauds', 
		'P' => 'at Prime', 'T' => 'at Terce', 
		'S' => 'at Sext', 'N' => 'at None', 
		'V' => 'at Vespers', '1V' => 'at I Vespers',
		'2V' => 'at II Vespers', 'C' => 'at Compline');
	if($size=='O') {
		$size = 1;
		$h1 = 'Ordinary';
		$h2 = 2;
	}
	head($hourL[$h], $hourE[$h], $size, $h1, $h2);
}

function dayhour($d, $h, $size=1) {
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
	if($h=='M');
	elseif($h=='C');
	else {
		// all other hours begin with this versicle
		vr('deus_in_adjutorium_short.php');
		// at the little hours, the hymn immediately follows 
		// the versicle
		if(csv_match($h,'P,T,S,N')) {
			if($h=='P') hymn('jam_lucis_orto_sidere.php');
			elseif($h=='T') hymn('nunc_sancte_nobis_spiritus.php');
			elseif($h=='S') hymn('rector_potens_verax_deus.php');
			elseif($h=='N') hymn('rerum_deus_tenax_vigor.php');
			// if the day is not Sunday, a block of seasonal antiphons
			// are printed after the hymn
			$hn = array('P'=>2, 'T'=>3, 'S'=>4, 'N'=>5);
			if($d>1) multiant($d,$hn[$h]);
		}
	}
}

function head($L, $E, $size=3, $h1=0, $h2=0) {
	if($h1) {
		if($h1==1) $h1 = $L;
		elseif($h1==2) $h1 = $E;
		echo '  <p:Hidden1>' . $h1 .'</p>
';
	}
	if($h2) {
		if($h2==1) $h2 = $L;
		elseif($h2==2) $h2 = $E;
		echo '  <p:Hidden2>' . $h2 .'</p>
';
	}
	if($size<4) {
		echo '  <text:p text:style-name="Head'. $size .'">' . ($_GET['L']==1?$L:$E) .'</p>
';
		if($size<2) 
			echo '  <text:p text:style-name="Head5">' . ($_GET['L']==1?$E:$L) .'</p>
';
	}
	else echo '
  <tableH>
   <tr><td:A1>
   <p:Head'. $size .'>'. $L .'</p>
   </td><td:B2>
   <p:Head'. $size .'>'. $E .'</p>
  </td></tr></table>
';


}

?>
