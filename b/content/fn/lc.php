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
	$dir = "/www/b/content/00/LittleChapter/";

	$pieces = file_load($dir.$file);
	
	$cv = trim($pieces[0]);
	$txtL = trim($pieces[1]);
	$txtE = trim($pieces[2]);
	$title = '';
	$conclL = '';
	$conclE = '';
	$ref2 = '';

	if($opt==1) {
		$title = 'Capit. (Little Chapt.)';
		$conclL = '<t> <s:VR>R. </s>Deo grátias.';
		$conclE = '<t> <s:VR>R. </s>Thanks be to God.';
	} elseif($opt==2) {
		if($file2=='') 
			$title = 'Lectio Brevis (Brief Lesson)';
		else
			$title = $file2;
		$conclL = ' Tu autem Dómine, miserére nobis.<t> <s:VR>R. </s>Deo grátias.';
		$conclE = ' But thou, O Lord, have mercy upon us.<t> <s:VR>R. </s>Thanks be to God.';
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
		$title = 'lesson '. $rn[$i];
		// "Tu autem" is added except for office of the dead,
		// which is signified by a "d" suffix as the 3rd char
		if(strpos($opt,'d')===false) {
			$conclL = ' Tu autem Dómine, miserére nobis.<t> <s:VR>R. </s>Deo grátias.';
			$conclE = ' But thou, O Lord, have mercy upon us.<t> <s:VR>R. </s>Thanks be to God.';
		}
	}		
	elseif($opt=='h' || $opt=='H') {
		$dir2 = "/www/b/content/00/Hymn/L/";
		$pieces = file_load($dir2.$file2);
		$ref2 = 'and hymn, <snr>'. trimP($pieces[3]) . '</s>, ';
	} elseif($opt=='br' || $opt=='BR') {
		$dir2 = "/www/b/content/00/VR/";
		$pieces = file_load($dir2.$file2);
		$ref2 = 'and br. resp., <snr>'. 
			start_phrase($pieces[1],15) . '</s>, ';
	}

	if($byref) {
		echo "   <p:Rubric>Capit.: <snr>". start_phrase($txtL,15) 
			."</s>, (". $cv ."), ". $ref2 ."<snr>p. ". bkref($byref) . "</s></p>\n";
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
