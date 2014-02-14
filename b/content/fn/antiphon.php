<?php

//$incs is the include pattern:
// 0 - not displayed
// 1 - for no astrisk no number
// * - for astrisk but no number
// + - for astrisk, no number, no "Ant."
// # - for number but no astrisk
// 2 - for both astrisk & number
// M - Ad Magnif.Ant. + astrisk
// B - Ad Bened.Ant. + astrisk

//PT option
//0 - nothing added
//1 - 'Alleluia' added
//2 - '(P.T. Alleluia)' added

function ant($file, $incs='*', $PT=0, $nameL='', $nameE='') {
	$dir = "/www/b/content/00/Antiphon/";

	$Lpieces = file_load($dir.$file);
	$Epieces = file_load($dir.E($file));
	
	$iLfile = (int)(count($Lpieces));
	$iEfile = (int)(count($Epieces));
	$iSpec = (int)(strlen($incs));
	
	//echo 'File contains ' . $iFile . ', and ' . $iSpec . ' are specified.';
	if($iLfile<$iSpec || $iEfile<$iLfile)
		trigger_error('Antiphon count problem (' . $file . '). Latin: ' . $iLfile . ', English: ' . $iEfile . ' Function call: ' . $iSpec, E_USER_ERROR);
	
	echo '   <table>
';
	if($PT==1) {
		$PTL = ' Allelúja.';
		$PTE = ' Alleluia.';
	} elseif($PT==2) {
		$PTL = ' <sr>(T.P.</s> Allelúja.<sr>)</s>';
		$PTE = ' <sr>(P.T.</s> Alleluia.<sr>)</s>';
	}

	for($i=0;$i<$iSpec;$i++) {
		$L = $Lpieces[$i];
		$E = $Epieces[$i];
		$inc = substr($incs,$i,1);
		$subst = array(' *','*','‡');
		$ant = '';
		$ante = '';

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
			}
			if(!$ast) {
				$L = str_replace($subst,'',$L);
				$E = str_replace($subst,'',$E);
			}
			if(strlen($nameL)>0) {
				if(strlen($nameE)==0)
					trigger_error('Latin substitute name given for ant. ' . $file . ', but no English name given.', E_USER_ERROR);
				$L = str_replace('<sr>N.</s>',$nameL,$L);
				$E = str_replace('<sr>N.</s>',$nameE,$E);
			}
	echo '    <tr><td:A1>
	  <p:BodyL>' . $ant . $L .'</p>
	     </td><td:B1>
			<p:BodyE>'. ($ante?$ante:$ant) . $E .'</p>
			</td></tr>
';
		}
	}
	echo '   </table>
';
}
?>

