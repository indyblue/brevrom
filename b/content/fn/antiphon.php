<?php

//$incs is the include pattern:
// 0 - not displayed
// 1 - for no astrisk no number
// * - for astrisk but no number
// + - for astrisk, no number, no "Ant."
// # - for number but no astrisk
// 2 - for both astrisk & number
// M - Ad Magnif.Ant. + astrisk
// m - Ad Magnif [short], ut supra.
// B - Ad Bened.Ant. + astrisk
// N - adds appropriate "Nocturn" before antiphon
// P - P.T. Ant. + astrisk
// p - P.T. Ant., no astrisk
// e - Extra T.P. Ant., no astrisk
// I - Invit.

//PT option
//0 - nothing added
//1 - 'Alleluia' added
//2 - '(P.T. Alleluia)' added

function ant($file, $incs='*', $PT=0, $nameL='', $nameE='',$sm=0) {
	$dir = $_GET['root'] . "/00/Antiphon/";

	$Lpieces = file_load($dir.$file);
	$Epieces = file_load($dir.E($file));
	
	$iLfile = (int)(count($Lpieces));
	$iEfile = (int)(count($Epieces));
	$iSpec = (int)(strlen($incs));
	
	//echo 'File contains ' . $iFile . ', and ' . $iSpec . ' are specified.';
	if($iLfile<$iSpec || $iEfile<$iLfile)
		trigger_error('Antiphon count problem (' . $file . '). Latin: ' . $iLfile . ', English: ' . $iEfile . ' Function call: ' . $iSpec, E_USER_ERROR);
	
	$table = 0;

	if($PT==1) {
		$PTL = ' Allelúja.';
		$PTE = ' Alleluia.';
	} elseif($PT==2) {
		$PTL = ' <sr>(T.P.</s> Allelúja.<sr>)</s>';
		$PTE = ' <sr>(P.T.</s> Alleluia.<sr>)</s>';
	}

	if($file=='Psalter/alleluia.php') $sm=1;
	if($sm) $sm='Sm';
	else $sm='';

	for($i=0;$i<$iSpec;$i++) {
		$L = $Lpieces[$i];
		$E = $Epieces[$i];
		$inc = substr($incs,$i,1);
		$subst = array(' *','*','‡');
		$ant = '';
		$ante = '';
		$short = 0;

		//if Alleluias are to be added, check to make sure
		//that there aren't already alleluia's in this ant.
		//checks english first, and then throws an error
		//if the english has one and latin doesn't
		if($PT>0 && stristr($E,'alleluia')===false) {
			if(mb_stristr($L,'allelúja')!==false)
				trigger_error('Antiphon alleluia discrepancy: ' . $file, E_USER_ERROR);
			$L .= $PTL;
			$E .= $PTE;
		}

		if($inc) {
			if($inc==1) {
				$ast=0; $ant='<sr>Ant.</s> ';
			} elseif($inc=='*') {
				$ast=1; $ant='<sr>Ant.</s> ';
			} elseif($inc=='+') {
				$ast=1; $ant='';
			} elseif($inc=='#') {
				$ast=0; $ant='<sr>Ant '. ($i+1) .'.</s> ';
			} elseif($inc==2) {
				$ast=1; $ant='<sr>Ant '. ($i+1) .'.</s> ';
			} elseif($inc=='B') {
				$ast=1; $ant='<sr>Ad Bened.Ant.</s> '; $ante = '<sr>Benedictus Ant.</s> ';
			} elseif($inc=='M') {
				$ast=1; $ant='<sr>Ad Magnif.Ant.</s> '; $ante = '<sr>Magnificat Ant.</s> ';
			} elseif($inc=='m') {
				$short=1; $ast=0; $ant='<sr>Ad Magnif.Ant.</s> '; $ante = '<sr>Magnificat Ant.</s> ';
			} elseif($inc=='P') {
				$ast=1; $ant='<sr>T.P. Ant.</s> '; $ante = '<sr>P.T. Ant.</s> ';
			} elseif($inc=='p') {
				$ast=0; $ant='<sr>T.P. Ant.</s> '; $ante = '<sr>P.T. Ant.</s> ';
			} elseif($inc=='e') {
				$ast=0; $ant='<sr>Extra T.P. Ant.</s> '; $ante = '<sr>Outside P.T. Ant.</s> ';
			} elseif($inc=='I') {
				$ast=1; $ant='<sr>Invit.</s> '; $ante = '<sr>Invit.</s> ';
			} elseif($inc=='N') {
				if($table==1) {
					echo "   </table>\n";
					$table = 0;
				}
				if($i==0) {
					head('In I Nocturno','I Nocturn',-2);
					$ast=1; $ant='<sr>Ant '. ($i+1) .'.</s> ';
				} elseif($i==3) {
					head('In II Nocturno','II Nocturn',-2);
					$ast=1; $ant='<sr>Ant '. ($i+1) .'.</s> ';
				} elseif($i==6) {
					if(strpos($file,'4Wed')>0) {
						if(strpos($file,'0M2')>0) 
							head('In III Nocturno (II)','III Nocturn (II)',-2);
						else
							head('In III Nocturno (I)','III Nocturn (I)',-2);
					} else
						head('In III Nocturno','III Nocturn',-2);
					$ast=1; $ant='<sr>Ant '. ($i+1) .'.</s> ';
				} else
					trigger_error('Misplaced nocturn: ' . $file, E_USER_ERROR);
			}
					
			if(!$ast) {
				$L = str_replace($subst,'',$L);
				$E = str_replace($subst,'',$E);
			}
			if($short) {
				$L = first_word($L,8,-1) . ', <sr>ut supra.</s>';
				$E = first_word($E,8,-1) . ', <sr>as above.</s>';
			}
			if(strlen($nameL)>0) {
				if(strlen($nameE)==0)
					trigger_error('Latin substitute name given for ant. ' . $file . ', but no English name given.', E_USER_ERROR);
				$L = str_replace('<sr>N.</s>',$nameL,$L);
				$E = str_replace('<sr>N.</s>',$nameE,$E);
			}
			if($table==0) {
				echo "   <table>\n";
				$table = 1;
			}
	echo '  <tr><td:A1>
   <p:BodyL'. $sm .'>' . $ant . $L .'</p>
  </td><td:B1>
   <p:BodyE'. $sm .'>'. ($ante?$ante:$ant) . $E .'</p>
  </td></tr>';
		}
	}
	echo "</table>\n";
}

function multiant($day, $hour, $incs='*') {
	$dayF = array('','1Sun','2Mon','3Tue',
		'4Wed','5Thu','6Fri','7Sat');
	$hourF = array('','1L2','2P','3T','4S','5N');
	$natL = array('','',
		'Feria II ante vigiliam Nativ. Domini:',
		'Feria III ante vigiliam Nativ. Domini:',
		'Feria IV ante vigiliam Nativ. Domini:',
		'Feria V ante vigiliam Nativ. Domini:',
		'Feria VI ante vigiliam Nativ. Domini:',
		'Sabbato ante vigiliam Nativ. Domini:');
	$natE = array('','',
		'Monday before the vigil of the Nativity of our Lord:',
		'Tuesday before the vigil of the Nativity of our Lord:',
		'Wednesday before the vigil of the Nativity of our Lord:',
		'Thursday before the vigil of the Nativity of our Lord:',
		'Friday before the vigil of the Nativity of our Lord:',
		'Saturday before the vigil of the Nativity of our Lord:');
	$hwL = array('','',
		'Feria II in Hebdomadæ Sanctæ:',
		'Feria III in Hebdomadæ Sanctæ:',
		'Feria IV in Hebdomadæ Sanctæ:',
		'Feria V in Cena Domini:',
		'Feria VI in Passione et Morte Domini:',
		'Sabbato sancto:');
	$hwE = array('','',
		'Monday of Holy Week:',
		'Tuesday of Holy Week:',
		'Wednesday of Holy Week:',
		'Thursday of the Lord’s Supper:',
		'Friday of the Passion and Death of our Lord:',
		'Holy Saturday:');

	// Matins
	if($hour==0) {
		$n = stripos($incs,'n');
		if($n===false) {
			ant('Psalter/'. $dayF[$day] .'/0M.php',$incs);
			space('Line');
			rubp('In Adventu:','In Advent:',0,1);
			ant('prTemp/adventDM.php',$incs,0,'','',1);
			space('Line');
		} else {
			// if a nocturn, some manipulation has to be done
			// to avoid duplicating the Nocturn heading
			$tmp = str_ireplace('n','0',$incs);
			$one = stripos($incs,'1');
			if($one!==false) {
				ant('Psalter/'. $dayF[$day] .'/0M.php',$tmp);
				space('Line');
				rubp('In Adventu:','In Advent:',0,1);
				ant('prTemp/adventDM.php',$tmp,0,'','',1);
				space('Line');
			}
			$tmp = str_ireplace('1','0',$incs);
			ant('Psalter/'. $dayF[$day] .'/0M.php',$tmp);
			space('Line');
			rubp('In Adventu:','In Advent:',0,1);
			$tmp = str_ireplace('n','2',$tmp);
			ant('prTemp/adventDM.php',$tmp,0,'','',1);
			space('Line');
		}
	} elseif($hour==1) {
		ant('Psalter/'. $dayF[$day] .'/1L2.php',$incs);
		space('Line');
		rubp($natL[$day],$natE[$day],0,1);
		ant('prTemp/advent' . $dayF[$day] .'.php',$incs,0,'','',1);
		rubp($hwL[$day],$hwE[$day],0,1);
		ant('prTemp/passion' . $dayF[$day] .'.php',$incs,0,'','',1);
		space('Line');
	} else {
		    if($hour==2) $incs = '+0000';
		elseif($hour==3) $incs = '0+000';
		elseif($hour==4) $incs = '00+00';
		elseif($hour==5) $incs = '0000+';

		space('Line');
		rubp('In Officio feriali:','In the ferial Office:');
		rubp('Infra hebd. I Adventus:','In the first week of Advent:',0,1);
		ant('prTemp/advent01.php',$incs,0,'','',1);
		rubp('Infra hebd. II Adventus:','In the second week of Advent:',0,1);
		ant('prTemp/advent02.php',$incs,0,'','',1);
		rubp('Infra hebd. III Adventus:','In the third week of Advent:',0,1);
		ant('prTemp/advent03.php',$incs,0,'','',1);
		rubp($natL[$day],$natE[$day],0,1);
		ant('prTemp/advent' . $dayF[$day] .'.php',$incs,0,'','',1);
		rubp('Tempore Quadragesimæ:','In the Season of Lent:',0,1);
		ant('prTemp/lentLH.php',$incs,0,'','',1);
		rubp('Infra Hebd I Passionis:','In the first week of Passiontide:',0,1);
		ant('prTemp/passion1LH.php',$incs,0,'','',1);
		if($day<5) {
			rubp($hwL[$day],$hwE[$day],0,1);
			ant('prTemp/passion' . $dayF[$day] .'.php',$incs,0,'','',1);
		}
		space('Line');
		ant('Psalter/alleluia.php','P');
		ant('Psalter/'. $dayF[$day] .'/'. $hourF[$hour] .'.php');

	}
	
}

?>

