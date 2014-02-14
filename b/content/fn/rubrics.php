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
//       +20 - P.T. ...
//       +40 - Extra. T.P. ...
function csref($cs=0, $ps=2, $opt=2) {
	$csE = array(
	0 => '',
	'csApPT' => 'Apostles / Martyr(s) in P.T.',
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
	'csApPT' => 'Apostolorum / Martyrum T.P.',
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

	$ptL = ''; $ptE = '';
	$L2 = '.'; $E2 = '.';
	if($opt>40) {
		$opt -= 40;
		$ptL = 'Extra tempus paschale, ';
		$ptE = 'Outside Paschaltide, ';
	} if($opt>20) {
		$opt -= 20;
		$ptL = 'Tempore paschali, ';
		$ptE = 'In Paschaltide, ';
	} if($opt>10) {
		$opt -= 10;
		$L2 = ', præter sequentia.';
		$E2 = ', except the following.';
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
		$Lps . $ptL . $L1 . $csL[$cs] . $pgref . $L2, 
		$Eps . $ptE . $E1 . $csE[$cs] . $pgref . $E2);
}

// reference to ordinary
// $ord - bookmark for common of saints
//       (if 0, only psalm text inserted)
// $ps:  0 - [nothing]
//       1 - ferial psalms/antiphons
//       2 - Sunday psalms/antiphons
//       3 - Sunday psalms
//       4 - little hours feria
//       4.1 - little hours pss & ant of Sunday 
//       5 - little hours pss of Sunday, ant from Lauds
//       6 - little hours feast
//       6.1 - little hours sunday, prime ps 53 etc.
// $opt: 1 - All from ordinary
//       2 - All else from ordinary
//       3 - little hours from ordinary
//       4 - sext/none from ordinary
//       +10 - ...except as follows
// 		+20 - In ferial office,...
//       +40 - P.T. ...
//       +80 - Extra. T.P. ...
function ordref($ord=0, $ps=0, $opt=11) {
$ordL = array(
	0 => '',
	'OrOrdinary' => 'Divini Officii',
	'OrMatins' => 'ad Matutinum',
	'OrLauds' => 'ad Laudes',
	'OrPrime' => 'ad Primam',
	'OrTerce' => 'ad Tertiam',
	'OrSext' => 'ad Sextam',
	'OrNone' => 'ad Nonam',
	'OrVespers' => 'ad Vesperas',
	'OrCompline' => 'ad Completorium',
	'OrAdvent' => 'Adventus',
	'OrChristmas' => 'Nativitatis',
	'OrEpiphany' => 'Epiphaniæ',
	'OrSeptuagesima' => 'Septuagesimæ',
	'OrLent' => 'Quadragesimæ',
	'OrPassion' => 'Passionis',
	'OrEaster' => 'Paschatis',
	'OrAscension' => 'Ascensionis',
	'OrPerAnnum' => 'per Annum',
);

$ordE = array(
	0 => '',
	'OrOrdinary' => 'of the Divine Office',
	'OrMatins' => 'of Matins',
	'OrLauds' => 'of Lauds',
	'OrPrime' => 'of Prime',
	'OrTerce' => 'of Terce',
	'OrSext' => 'of Sext',
	'OrNone' => 'of None',
	'OrVespers' => 'of Vespers',
	'OrCompline' => 'of Compline',
	'OrAdvent' => 'of Advent',
	'OrChristmas' => 'of Nativitytide',
	'OrEpiphany' => 'of Epiphanytide',
	'OrSeptuagesima' => 'of Septuagesima',
	'OrLent' => 'of Lent',
	'OrPassion' => 'of Passiontide',
	'OrEaster' => 'of Eastertide',
	'OrAscension' => 'of Ascensiontide',
	'OrPerAnnum' => 'Throughout the Year',
);

	if(!array_key_exists($ord,$ordE))
	trigger_error('all_from refers to unknown bookmark: ' 
	. bkref($ord) . '.', E_USER_ERROR);

	$Lps = ''; $Eps = ''; $lh='';
	if($ps==1) {
		$Lps = 'Ant. et psalmi de feria currenti. ';
		$Eps = 'Ant. and psalms of the current feria. ';
	} elseif($ps==2) {
		$Lps = 'Ant. et psalmi de dominica. ';
		$Eps = 'Ant. and psalms of Sunday. ';
	} elseif($ps==3) {
		$Lps = 'Psalmi de dominica. ';
		$Eps = 'Psalms of Sunday. ';
	} elseif($ps==4) {
		$Lps = 'Ad Horas minores, ant. et psalmi de feria currenti. ';
		$Eps = 'At the little Hours, ant. and psalms of the current feria. ';
		$lh = 'LH';
	} elseif($ps==4.1) {
		$Lps = 'Ad Horas minores, ant. et psalmi de dominica. ';
		$Eps = 'At the little Hours, ant. and psalms of Sunday. ';
		$lh = 'LH';
	} elseif($ps==5) {
		$Lps = 'Ad Horas minores, psalmi de dominica; Antiphonæ 1, 2, 3 &amp; 5 e Laudibus. ';
		$Eps = 'At the little Hours, psalms of Sunday. Antiphons 1, 2, 3 &amp; 5 of Lauds, respectively. ';
		$lh = 'LH';
	} elseif($ps==6 || $ps==-6) {
		$Lps = 'Ad Horas minores, psalmi de dominica, ad Primam tamen ut in festis; Antiphonæ 1, 2, 3 &amp; 5 e Laudibus. ';
		$Eps = 'At the little Hours, psalms of Sunday, but at Prime as in feasts. Antiphons 1, 2, 3 &amp; 5 of Lauds, respectively. ';
		if($ps<0) {
			//long form of previous rubric, used on Dec. 24
			$Lps = 'Ad Horas minores, psalmi de dominica; sed ad Primam, loco psalmi 117 <snr>Confitémini</s>, dicitur ps. 53 <snr>Deus, in nómine</s>. Quod observatur in omnibus Officiis in quibus ponitur rubrica: ' . $Lps;
			$Eps = 'At the Little Hours, psalms of Sunday; but at Prime, in place of psalm 117 <snr>Give praise</s>, is said ps. 53 <snr>Save me</s>. Which is observed in all Offices in which appears the following rubric: ' . $Eps;
		}
		$lh = 'LH';
	} elseif($ps==6.1) {
		$Lps = 'Ad Horas minores, psalmi de dominica, ad Primam tamen pss. 53, 118i et 118ii; Antiphonæ 1, 2, 3 &amp; 5 e Laudibus. ';
		$Eps = 'At the little Hours, psalms of Sunday, but at Prime, pss. 53, 118i and 118ii. Antiphons 1, 2, 3 &amp; 5 of Lauds, respectively. ';
		$lh = 'LH';
	}

	$L2 = '.'; $E2 = '.';
	$ptL = ''; $ptE = '';
	if($opt>80) {
		$opt -= 30;
		$ptL = 'Extra tempus paschale, ';
		$ptE = 'Outside Paschaltide, ';
	} if($opt>40) {
		$opt -= 40;
		$ptL = 'Tempore paschali, ';
		$ptE = 'In Paschaltide, ';
	} if($opt>20) {
		$opt -= 20;
		$ptL = 'In Officio feriali, ';
		$ptE = 'In the ferial Office, ';
	} if($opt>10) {
		$opt -= 10;
		$L2 = ', præter sequentia.';
		$E2 = ', except the following.';
	}

	$L1 = ''; $E1 = '';
	if($opt==1) {
		$L1 = 'Omnia de Ordinarium ';
		$E1 = 'All from the Orindary ';
	} elseif($opt==2) {
		$L1 = 'Reliqua Ordinarium ';
		$E1 = 'All else from the Ordinary ';
	} elseif($opt==3) {
		$L1 = 'Ad Horas minores ut in Ordinarium ';
		$E1 = 'Little Hours as in the Ordinary  ';
		$lh = 'LH';
	} elseif($opt==4) {
		$L1 = 'Ad Sextam &amp; Nonam ut in Ordinarium ';
		$E1 = 'Sext &amp; None as in the Ordinary  ';
		$lh = 'S';
	}
	$pgref = ', <snr>p. '. bkref($ord . $lh) .'</s>';

	if($ord===0) {
		$L1 = ''; $E1 = '';
		$L2 = ''; $E2 = '';
		$pgref = '';
	}

	rubp(
		$Lps . $ptL . $L1 . $ordL[$ord] . $pgref . $L2, 
		$Eps . $ptE . $E1 . $ordE[$ord] . $pgref . $E2);
}

