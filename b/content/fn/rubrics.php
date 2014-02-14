<?php

/* 
<?php rubrics('asIn.php','csApLCLauds','Lauds','Little Chapter'); ?> 
*/
function rubrics($file, $link='', $location='I Vespers', $content='Psalms and antiphons') {
	$dir = $_GET['root'] . "/00/Rubrics/";
		require $dir.$file;
}

function rubf($fname, $link='') {
	$pieces = file_load($fname);
	if(count($pieces)<2) 
		trigger_error('Rubrics in '. $fname .' does not have at least two lines.', E_USER_ERROR);
	rubp($pieces[0], $pieces[1]);
}

function rubp($Ltxt, $Etxt, $par=0, $sm=0) {
	if($_GET['par']) $par=1;
	if($par==0 && strlen($Ltxt)>0 && strlen($Etxt)>0) {
		if($_GET['L']==1) {
			if(strlen($Ltxt . $Etxt)<50 && strlen($Etxt)>0);
			// else $Etxt = '';
		} else { 
			if(strlen($Ltxt . $Etxt)<50 && strlen($Ltxt)>0) $Ltxt='';
			else $Ltxt = '';
		}
	}
	
	if($sm) $sm='Sm';
	else $sm='';

	if(strlen($Ltxt)==0) echo '
<p:BodyE'. $sm .'><sr>'. $Etxt .'</s></p>
';
	elseif(strlen($Etxt)==0) echo '
<p:BodyL'. $sm .'><sr>'. $Ltxt .'</s></p>
';
	else echo '
  <table>
   <tr><td:A1>
   <p:BodyL'. $sm .'><sr>'. $Ltxt .'</s></p>
   </td><td:B1>
   <p:BodyE'. $sm .'><sr>'. $Etxt .'</s></p>
  </td></tr></table>
';
}

// reference to common of saints
// $cs - bookmark for common of saints
//       (if 0, only psalm text inserted)
// $ps:  0 - [nothing]
//       1 - ferial psalms/antiphons
//       2 - little hours feria
//       3 - little hours feast
// $opt: 1 - All from common
//       2 - All else from common
//       3 - little hours from common
//       4 - sext/none from common
//       +10 - ...except as follows
function csref($cs=0, $ps=2, $opt=2) {
	$csE = array(
	0 => '',
	'csApPT' => 'Apostles/Martyr(s) in P.T.',
	'csAp' => 'Apostles',
	'csP' => 'Supreme Pontiffs',
	'csMm' => 'Several Martyrs',
	'csM' => 'One Martyr',
	'csChurch' => 'Dedication of a Church',
	'csCB' => 'Confessor Bishop',
	'csC' => 'Confessors',
	'csV' => 'Virgins',
	'csHW' => 'Holy Women',
	'csBVM' => 'Bl. Virgin Mary');

	$csL = array(
	0 => '',
	'csApPT' => 'Apostolorum/Martyrum T.P.',
	'csAp' => 'Apostolorum',
	'csP' => 'Summorum Pontificum',
	'csMm' => 'Plurimorum Martyrum',
	'csM' => 'Unius Martyris',
	'csChurch' => 'Dedicationis Ecclesiæ',
	'csCB' => 'Confessoris Pontificis',
	'csC' => 'Confessoris non Pontificis',
	'csV' => 'Virginum',
	'csHW' => 'non Virginum',
	'csBVM' => 'B. Mariæ Virginis');

	if(!array_key_exists($cs,$csE))
	trigger_error('all_from refers to unknown bookmark: ' 
	. bkref($cs) . '.', E_USER_ERROR);

	$Lps = ''; $Eps = ''; $lh='';
	if($ps==1) {
		$Lps = 'Ant. et psalmi de feria currenti. ';
		$Eps = 'Ant. and psalms of the current feria. ';
	} elseif($ps==2) {
		$Lps = 'Ad Horas minores, ant. et psalmi de feria currenti. ';
		$Eps = 'At the little Hours, ant. and psalms of the current feria. ';
		$lh = 'LH';
	} elseif($ps==3) {
		$Lps = 'Ad Horas minores, psalmi de dominica, ad Primam tamen ut in festis; Antiphonæ 1, 2, 3 &amp; 5 e Laudibus. ';
		$Eps = 'At the little Hours, psalms of Sunday, but at Prime as in feasts. Antiphons 1, 2, 3 &amp; 5 of Lauds, respectively. ';
		$lh = 'LH';
	}

	if($opt>10) {
		$opt -= 10;
		$L2 = ', præter sequentia.';
		$E2 = ', except the following.';
	} else {
		$L2 = '.'; $E2 = '.';
	}

	if($opt==1) {
		$L1 = 'Omnia de Commune ';
		$E1 = 'All from the Common of ';
	} elseif($opt==2) {
		$L1 = 'Reliqua Commune ';
		$E1 = 'All else from the Common of ';
	} elseif($opt==3) {
		$L1 = 'Ad Horas minores ut in Commune ';
		$E1 = 'Little Hours as in the Common of  ';
		$lh = 'LH';
	} elseif($opt==4) {
		$L1 = 'Ad Sextam &amp; Nonam ut in Commune ';
		$E1 = 'Sext &amp; None as in the Common of  ';
		$lh = 'S';
	}
	$pgref = ', <snr>p. '. bkref($cs . $lh) .'</s>';

	if($cs===0) {
		$L1 = ''; $E1 = '';
		$L2 = ''; $E2 = '';
		$pgref = '';
	}

	rubp(
		$Lps . $L1 . $csL[$cs] . $pgref . $L2, 
		$Eps . $E1 . $csE[$cs] . $pgref . $E2);
	}

