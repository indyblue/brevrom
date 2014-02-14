<?php

// $opt values:
// 1 - Capit, Deo Gratias
// 2 - Lect. Brev. (Brief Lesson), Tu autem (full)
// 3 - Lect. Brev. ... Tu Autem (short)
// 'H' - second ref, hymn
// 'BR' - second ref, brief resp
// 'Lx' - lesson x.
// $byref values:
// 0 - printed normally
// 'bookmark' - prints detailed reference to 'bookmark'.
function lc($file, $byref=0, $opt=1, $file2='') {
	$dir = $_GET['root'] . "/00/LittleChapter/";

	$pieces = file_load($dir.$file);
	
	$cv = trim($pieces[0]);
	$txtL = trim($pieces[1]);
	$txtE = trim($pieces[2]);
	$title = '';
	$conclL = '<t> <s:VR>R. </s><s:NH>Deo grátias.</s>';
	$conclE = '<t> <s:VR>R. </s><s:NH>Thanks be to God.</s>';
	$ref2 = '';

	if($opt==1) {
		$title = 'Capit. (Little Chapt.)';
	} elseif($opt==2) {
		if($file2=='') 
			$title = 'Lectio Brevis (Brief Lesson)';
		else
			$title = $file2;
		$conclL = ' Tu autem Dómine, miserére nobis.'. $conclL;
		$conclE = ' But thou, O Lord, have mercy upon us.'. $conclE;
	} elseif($opt==3) {
		if($file2=='') 
			$title = 'Lectio Brevis (Brief Lesson)';
		else
			$title = $file2;
		$conclL = ' Tu autem...';
		$conclE = ' But thou...';
	} 
	elseif(substr($opt,0,1)=='L') {
		$rn = array('','i','ii','iii','iv','v','vi','vii','viii','ix');
		$i = substr($opt,1,1);
		$title = 'Lectio (Lesson) '. $rn[$i];
		// "Tu autem" is added except for office of the dead,
		// which is signified by a "d" suffix as the 3rd char
		if(strpos($opt,'d')===false) {
			$conclL = ' Tu autem Dómine, miserére nobis.'. $conclL;
			$conclE = ' But thou, O Lord, have mercy upon us.'. $conclE;
		}
	} elseif($opt=='h' || $opt=='H') {
		if($file2) {
			$dir2 = $_GET['root'] . "/00/Hymn/";
			$pieces = file_load($dir2.'L/'.$file2);
			$ref2L = 'et hymnus, <snr>'. trimP($pieces[3]) . '</s>, ';
			$pieces = file_load($dir2.'E/'.$file2);
			$ref2E = 'and hymn, <snr>'. trimP($pieces[3]) . '</s>, ';
		} else {
			$ref2L = 'et hymnus ';
			$ref2E = 'and hymn ';
		}
	} elseif($opt=='br' || $opt=='BR') {
		$dir2 = $_GET['root'] . "/00/VR/";
		$pieces = file_load($dir2.$file2);
		$ref2L = 'et resp. br., <snr>'. 
			start_phrase($pieces[1],15) . '</s>, ';
		$pieces = file_load($dir2.E($file2));
		$ref2E = 'and br. resp., <snr>'. 
			start_phrase($pieces[1],15) . '</s>, ';
	} else {
		$conclL = '';
		$conclE = '';
	}


	if($byref) {
		$bkref = '<snr>p. '. bkref($byref) . '</s>';
		rubp('Capit <snr>'. start_phrase($txtL,15) . '</s>, ('. $cv .'), '. $ref2L . $bkref,
			'Little Chapt. <snr>'. start_phrase($txtE,15) . '</s>, ('. $cv .'), '. $ref2E . $bkref);
	} else {
		echo "  <p:RubricHSm>". $title ."<t>". $cv ."</p>\n".
			"  <table> <tr> <td:A1>\n".
			"   <p:BodyLDrop>". caps_first_word($txtL) . $conclL . "</p>\n".
			"  </td> <td:B1>\n".
			"   <p:BodyEDrop>". caps_first_word($txtE) . $conclE . "</p>\n".
			"  </td> </tr> </table>\n";
	}

}

?>
