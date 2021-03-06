<?php

//$option:
//0 - nothing added
//1 - 'Alleluia' added
//2 - '(P.T. Alleluia)' added
//3 - 'ut supra' added to short form
//6 - no V/R. 

function vr($file, $option=0) {
	$dir = $_GET['root'] . "/00/VR/long/";
		require $dir.$file;
}
function vrS($file, $option=0, $option2=0) {
	$dir = $_GET['root'] . "/00/VR/";

	if(is_array($file)) {
		$Lpieces = $file[0];
		$Epieces = $file[1];
	} else {
		$Lpieces = file_load($dir.$file);
		$Epieces = file_load($dir.E($file));
	}
	
	$iLfile = (int)(count($Lpieces));
	$iEfile = (int)(count($Epieces));
	if($iLfile<2 || $iEfile<$iLfile)
		trigger_error('VR line count problem (' . $file . '). Latin: ' . $iLfile . ', English: ' . $iEfile, E_USER_ERROR);

	$PTL = '';
	$PTE = '';
	if($option==1) {
		$PTL = ' Allelúja.';
		$PTE = ' Alleluia.';
	} elseif($option==2) {
		$PTL = ' <sr>(T.P.</s> Allelúja.<sr>)</s>';
		$PTE = ' <sr>(P.T.</s> Alleluia.<sr>)</s>';
	}

		$preL = ''; $preE = '';
		if($option2==='L' || $option2==='l') {
			$preL = '<sr>Ad Laudes </s>';
			$preE = '<sr>At Lauds </s>';
		} elseif($option2==='V' || $option2==='v') {
			$preL = '<sr>Ad Vesperas </s>';
			$preE = '<sr>At Vespers </s>';
		} elseif($option2==='1V' || $option2==='1v') {
			$preL = '<sr>Ad I Vesperas </s>';
			$preE = '<sr>At I Vespers </s>';
		} elseif($option2==='2V' || $option2==='2v') {
			$preL = '<sr>Ad II Vesperas </s>';
			$preE = '<sr>At II Vespers </s>';
		} 

	echo "   <table>\n";
	
	for($i=0;$i<$iLfile-1;$i+=2) {
		$L1 = $Lpieces[$i];
		$L2 = $Lpieces[$i+1];
		$E1 = $Epieces[$i];
		$E2 = $Epieces[$i+1];
		$subst = array(' *');

		if($option==6)
			echo "   <tr><td:A1>\n".
				'    <p:BodyL>'. style_first_letter($L1,'sb') ."</p>\n".
				"   </td><td:B1>\n".
				'    <p:BodyE>'. style_first_letter($E1,'sb') ."</p>\n".
				"   </td></tr><tr><td:A1>\n".
				'    <p:BodyL>'. style_first_letter($L2,'sb') ."</p>\n".
				"   </td><td:B1>\n".
				'    <p:BodyE>'. style_first_letter($E2,'sb') ."</p>\n".
				"   </td></tr>\n";
		elseif($option==3 || $option2===1) {
			$L0 = first_word($L1,6,1);
			$E0 = first_word($E1,6,1);
			$PTL = '';
			$PTE = '';
			if($option2===1) {
				$PTL = '... allelúja.';
				$PTE = '... alleluia.';
			} elseif($option==3) {
				$PTL = '<sr>, ut supra.</s>';
				$PTE = '<sr>, as above.</s>';
			}

			echo "   <tr><td:A1>\n".
				'    <p:BodyL>'. $preL .'<s:VR>V. </s>'. trimP($L0[0]) . $PTL ."</p>\n".
				"   </td><td:B1>\n".
				'    <p:BodyE>'. $preE .'<s:VR>V. </s>'. trimP($E0[0]) . $PTE ."</p>\n".
				"   </td></tr>\n";
		} else {
			$L1 = str_replace($subst,'',$L1) . $PTL;
			$E1 = str_replace($subst,'',$E1) . $PTE;
			$L2 = str_replace($subst,'',$L2) . $PTL;
			$E2 = str_replace($subst,'',$E2) . $PTE;

			echo "   <tr><td:A1>\n".
				'    <p:BodyL>'. $preL .'<s:VR>V. </s>'. 
					$L1 .'<t> <s:VR>R. </s>'. $L2 ."</p>\n".
				"   </td><td:B1>\n".
				'    <p:BodyE>'. $preE .'<s:VR>V. </s>'. 
					$E1 .'<t> <s:VR>R. </s>'. $E2 ."</p>\n".
				"   </td></tr>\n";
		}
	}
	echo '   </table>
';
}

// $option:
//   0 - Ad Primam, in resp. br.
//   1 - Ad Primam, in resp. br.
//   2 - In resp. br.
//   array($L,$E) - prefix text
function PrV($file, $option=1, $posttxt=0) {
	$dir = $_GET['root'] . "/00/VR/prime/";

	$pieces = file_load($dir.$file);
	$ifile = (int)(count($pieces));
	if($ifile<2)
		trigger_error('Prime V line count problem (' . $file . '): ' . $ifile, E_USER_ERROR);

	$preL = '';
	$preE = '';
	if($option==1) {
		$preL = 'Ad Primam, in resp. br. ';
		$preE = 'At Prime, in the br. resp. ';
	} elseif($option==2) {
		$preL = 'In resp. br. ';
		$preE = 'In the br. resp. ';
	} elseif(is_array($option)) {
		$preL = $option[0];
		$preE = $option[1];
	}
	$Lpost = ''; $Epost = '';
	if(is_array($posttxt)) {
		$Lpost = $posttxt[0];
		$Epost = $posttxt[1];
	}

	$V = '<s:VR>V. </s>';

	rubp($preL . $V .'<snr>'. $pieces[0] .'</s>'. $Lpost, 
		$preE . $V .'<snr>'. $pieces[1] .'</s>'. $Epost);
/*
	echo "  <table><tr><td:A1>\n".
		'   <p:BodyL>'. $preL . $V . $pieces[0] . $Lpost ."</p>\n".
		"  </td><td:B1>\n".
		'   <p:BodyE>'. $preE . $V . $pieces[1] . $Epost ."</p>\n".
		"  </td></tr></table>\n";
*/
}

?>

