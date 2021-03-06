<?php

// style:
// 0 - standard short notation 
// 1 - short notation, no Gloria (Passiontide
// 10 - standard (or PT) long notation
// 11 - long notation, no Gloria
function brS($file,$PT=0,$style=0,$requiem=0) {
	$dir = $_GET['root'] . "/00/VR/";

	$Lpieces = file_load($dir.$file);
	$Epieces = file_load($dir.E($file));
	
	$iLfile = (int)(count($Lpieces));
	$iEfile = (int)(count($Epieces));
	if($iLfile<2 || $iEfile<$iLfile)
		trigger_error('VR line count problem (' . $file . '). Latin: ' . $iLfile . ', English: ' . $iEfile, E_USER_ERROR);

	if($requiem) {
		$Lre = file_load($dir.'requiem_aeternam.php');
		$Ere = file_load($dir.'E/requiem_aeternam.php');
		$Lgl = str_replace(array(' * ','.'),array(' ',': '),$Lre[0]) .
			str_replace(' * ',' ',$Lre[1]);
		$Egl = str_replace(array(' * ','.'),array(' ',': '),$Ere[0]) .
			str_replace(' * ',' ',$Ere[1]);
	} else {
		$Lgl = 'Glória Patri.';
		$Egl = 'Glory be.';
	}
	
	$vr1 = '<s:VR>R. br. </s>';
	$vr2 = '<s:VR>V. </s>';
	$vrR = '<s:VR>R. </s>';
	$vrEtL = '<s:VR>Et repetitur: </s>';
	$vrEtE = '<s:VR>And repeat: </s>';

	$L1 = br_divide($Lpieces,$PT);
	$L2 = $Lpieces[1];
	$E1 = br_divide($Epieces,$PT);
	$E2 = $Epieces[1];
	if(is_string($style)) {
		$tmp = file_load($dir.'prime/'.$style);
		$L2 = $tmp[0];
		$E2 = $tmp[1];
	}

	if($PT) {
		$L1[2] = 'Allelúja, Allelúja.';
		$E1[2] = 'Alleluia, Alleluia.';
		$subst = array(' *','*');
		$L1 = str_replace($subst,'',$L1);
		$E1 = str_replace($subst,'',$E1);
	}
	$L13 = '';
	$E13 = '';
	if(count($L1)==4 && count($E1==4)) {
		$L13 = ' * '. $L1[3];
		$E13 = ' * '. $E1[3];
	}
	if($style<10) echo '   <table><tr><td:A1>
    <p:BodyL>'. $vr1 . $L1[0] . $L1[1] .' * '. $L1[2] . $L13 .' '. 
	style_first_letter($L1[0],'s:BoldRC') .'. '. 
	$vr2 . $L2 .' '. 
	style_first_letter($L1[2],'s:BoldRC') .' '.
	($style==0?style_first_letter($Lgl,'s:BoldRC') .' ':'') . 
	style_first_letter($L1[0],'s:BoldRC') .'.</p>
   </td><td:B1>
    <p:BodyE>'. $vr1 . $E1[0] . $E1[1] .' * '. $E1[2] . $E13 .' '. 
	style_first_letter($E1[0],'s:BoldRC') .'. '. 
	$vr2 . $E2 .' '. 
	style_first_letter($E1[2],'s:BoldRC') .' '.
	($style==0?style_first_letter($Egl,'s:BoldRC') .' ':'') . 
	style_first_letter($E1[0],'s:BoldRC') .'.</p>
   </td></tr>
   </table>' . "\n";

	else {
		echo '   <table><tr><td:A1>
    <p:BodyL>'. $vr1 . $L1[0] . $L1[1] .' * '. $L1[2] . $L13 .'</p>
   </td><td:B1>
    <p:BodyE>'. $vr1 . $E1[0] . $E1[1] .' * '. $E1[2] . $E13 .'</p>
   </td></tr><tr><td:A1>
    <p:BodyL>'. $vrEtL . $L1[0] . $L1[1] .' * '. $L1[2] . $L13 .'</p>
   </td><td:B1>
    <p:BodyE>'. $vrEtL . $E1[0] . $E1[1] .' * '. $E1[2] . $E13 .'</p>
   </td></tr><tr><td:A1>
    <p:BodyL>'. $vr2 . $L2 .'</p>
   </td><td:B1>
    <p:BodyE>'. $vr2 . $E2 .'</p>
   </td></tr><tr><td:A1>
    <p:BodyL>'. $vrR . $L1[2] .'</p>
   </td><td:B1>
    <p:BodyE>'. $vrR . $E1[2] .'</p>
   </td></tr><tr><td:A1>' . "\n";
		if($style==10) 
			echo '    <p:BodyL>'. $vr2 . 'Glória Patri, et Fílio, et Spirítui Sancto.</p>
   </td><td:B1>
    <p:BodyE>'. $vr2 . 'Glory be to the Father, and to the Son, and to the Holy Spirit.</p>
   </td></tr><tr><td:A1>
    <p:BodyL>'. $vrR . $L1[0] . $L1[1] .' * '. $L1[2] . $L13 .'</p>
   </td><td:B1>
    <p:BodyE>'. $vrR . $E1[0] . $E1[1] .' * '. $E1[2] . $E13 .'</p>' . "\n";
		else
			echo '    <p:BodyL>'. $vr2 . $L1[0] . $L1[1] .'.</p>
   </td><td:B1>
    <p:BodyE>'. $vr2 . $E1[0] . $E1[1] .'.</p>
   </td></tr><tr><td:A1>
    <p:BodyL>'. $vrR . $L1[2] . $L13 .'</p>
   </td><td:B1>
    <p:BodyE>'. $vrR . $E1[2] . $E13 .'</p>' . "\n";

		echo '   </td> </tr> </table>' . "\n";
	}
}

function rm($file,$PT=0,$short=0,$requiem=0) {
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
		trigger_error('<pre>VR line count problem (' . var_dump($file,1) . '). Latin: ' . $iLfile . ', English: ' . $iEfile .'</pre>', E_USER_ERROR);

	if($requiem) {
		$Lre = file_load($dir.'requiem_aeternam.php');
		$Ere = file_load($dir.'E/requiem_aeternam.php');
		$Lgl = str_replace(array(' * ','.'),array(' ',': '),$Lre[0]) .
			str_replace(' * ',' ',$Lre[1]);
		$Egl = str_replace(array(' * ','.'),array(' ',': '),$Ere[0]) .
			str_replace(' * ',' ',$Ere[1]);
	} else {
		$Lgl = 'Glória Patri.';
		$Egl = 'Glory be.';
	}

	$vr1 = '<s:VR>V. </s>';
	$vr2 = '<s:VR>R. </s>';

	$L1 = br_divide($Lpieces,$PT);
	$L2 = $Lpieces[1];
	$E1 = br_divide($Epieces,$PT);
	$E2 = $Epieces[1];
	if($PT) {
		$L1[2] = 'Allelúja, Allelúja.';
		$E1[2] = 'Alleluia, Alleluia.';
	}
	$L13 = '';
	$E13 = '';
	if(count($L1)==4 && count($E1)==4) {
		if (count($Lpieces)==4 && count($Epieces)==4) {
			// I think the only instance of this is in the Off. Def.,
			// 9th response after 3 nocturns.
			$short = 2;
			$E3 = $Epieces[2];
			$L3 = $Lpieces[2];
		}
		// There should always be a Gloria if there are two asterisks
		if($short==1) trigger_error('Matins Resp. problem (' . $file . 
			') There should be a Gloria, but none is specified.', E_USER_ERROR);

		$L13 = ' * '. $L1[3];
		$E13 = ' * '. $E1[3];
	} else {
		if($short==2) trigger_error('Matins Resp. problem (' . $file . 
			') exceptional form specified, but resp doesn’t conform.', E_USER_ERROR);
	}

	echo '   <table>
   <tr><td:A1>
<p:BodyL>'. $vr2 . $L1[0] . $L1[1] .' * '. $L1[2] . $L13 .' '. 
	$vr1 . $L2 .' ' . style_first_letter(trimP($L1[2]),'s:BoldR') .'. ';
	if($short==2) {
		echo $vr1 . $L3 .' ' . style_first_letter(trimP($L1[3]),'s:BoldR') .'. ';
		echo $vr1 . $Lgl .' '. style_first_letter($L1[2],'s:BoldR') .' '. $L1[3];
	}
	if($short==0 && count($L1)==3)
		echo $vr1 . $Lgl .' '. style_first_letter(trimP($L1[2]),'s:BoldR') .'. ';
	elseif($short==0 && count($L1)==4)
		echo $vr1 . $Lgl .' '. style_first_letter(trimP($L1[3]),'s:BoldR') .'. ';
	elseif($short==1);
	echo '</p>
   </td><td:B1>
<p:BodyE>'. $vr2 . $E1[0] . $E1[1] .' * '. $E1[2] . $E13 .' '. 
	$vr1 . $E2 .' ' . style_first_letter(trimp($E1[2]),'s:BoldR') .'. ';
	if($short==2) {
		echo $vr1 . $E3 .' ' . style_first_letter(trimP($E1[3]),'s:BoldR') .'. ';
		echo $vr1 . $Egl .' '. style_first_letter($E1[2],'s:BoldR') .' '. $E1[3];
	}
	if($short==0 && count($L1)==3)
		echo $vr1 . $Egl .' '. style_first_letter(trimp($E1[2]),'s:BoldR') .'. ';
	if($short==0 && count($L1)==4)
		echo $vr1 . $Egl .' '. style_first_letter(trimp($E1[3]),'s:BoldR') .'. ';
	elseif($short==1);
	echo '</p>
   </td></tr>
   </table>'."\n";

	if($short==3) {
		// special case for Little Office of BVM:
		rubp('Quando dicitur <snr>Te Deum</s>, assumitur in fine hujus Responsorii:', 'When the <snr>Te Deum</s> is said, at the end of the Responsory is added:');
		echo '   <table>
   <tr><td:A1>
<p:BodyL>'. $vr1 . $Lgl .' '. style_first_letter(trimP($L1[2]),'s:BoldR') .'.</p>
   </td><td:B1>
<p:BodyE>'. $vr1 . $Egl .' '. style_first_letter(trimp($E1[2]),'s:BoldR') .'.</p>
   </td></tr>
	</table>'."\n";
	}

}

function br_divide($pieces,$PT) {
	$first = first_word($pieces[0],4,1);
	$second = first_word($pieces[1],4,1);
	// PT = 1: no astrisk is needed...the split is at the Alleluia's
	if(!$PT) {
		$ret = array_map('trim',explode('*',$first[1]));
		if(count($ret)<2)
			trigger_error('BrResp error, the line "'. $pieces[0] .'" does not have an astrisk.', E_USER_ERROR);
	
		array_unshift($ret,$first[0]);
		for($i=2;$i<count($ret);$i++) {
			$ret[$i] = style_first_letter($ret[$i],1);
		}
		// mb_substr(mb_strtoupper($ret[2]),0,1) . mb_substr($ret[2],1);
	} else
		$ret = array($first[0],$first[1],'');

	
	if($first[0] == $second[0]) {
		$split = mb_split('\s',$ret[1],2);
		if(count($split)>1) {
			$ret[0] .= ' '. $split[0];
			$ret[1] = $split[1];
		}
	}
	$i = mb_strlen($ret[0])-1;
	if(mb_ereg_match('\W',mb_substr($ret[0],$i))) {
		$ret[1] = mb_substr($ret[0],$i) .' '. $ret[1];
		$ret[0] = mb_substr($ret[0],0,$i);
	} else 
		$ret[1] = ' '. $ret[1];
	return $ret;
}




?>

