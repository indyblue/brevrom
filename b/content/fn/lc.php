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
// 'bookmark' - prints detailed reference to bookmark.
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
		$conclE = '<t> <s:VR>R. </s>Thanks be to God.';
	} elseif($opt==2) {
		$title = 'Lect. Brev. (Brief Lesson)';
		$conclL = ' Tu autem Dómine, miserére nobis.<t> <s:VR>R. </s>Deo grátias.';
		$conclE = ' But thou, O Lord, have mercy upon us.<t> <s:VR>R. </s>Thanks be to God.';
	} elseif($opt==3) {
		$title = 'Lect. Brev. (Brief Lesson)';
		$conclL = ' Tu autem...';
		$conclE = ' But thou...';
	} 
	elseif($opt='L1') $title = 'lesson i';
	elseif($opt='L2') $title = 'lesson ii';
	elseif($opt='L3') $title = 'lesson iii';
	elseif($opt='L4') $title = 'lesson iv';
	elseif($opt='L5') $title = 'lesson v';
	elseif($opt='L6') $title = 'lesson vi';
	elseif($opt='L7') $title = 'lesson vii';
	elseif($opt='L8') $title = 'lesson viii';
	elseif($opt='L9') $title = 'lesson ix';
		
	elseif($opt=='h') {
		$dir2 = "/www/b/content/00/Hymn/L/";
		$pieces = file_load($dir2.$file2);
		$ref2 = 'and hymn, <snr>'. $pieces[4] . '</s>, ';
	} elseif($opt=='br') {
		$dir2 = "/www/b/content/00/VR/";
		$pieces = file_load($dir2.$file2);
		$ref2 = 'and br. resp., <snr>'. 
			start_phrase($pieces[1],15) . '</s>, ';
	}

	if($byref) {
		echo "   <p:Rubric>Capit.: <snr>". start_phrase($txtL,15) 
			."</s>, (". $cv ."), ". $ref2 ."<snr>p. ". bkref($byref) . "</s></p>\n";
	} else
		echo "  <p:RubricHSm>". $title ."<t>". $cv ."</p>\n".
			"  <table> <tr> <td:A1>\n".
			"   <p:BodyLDrop>". caps_first_word($txtL) .
			($r==1?'<t> <s:VR>R. </s>Deo grátias.':'') . "</p>\n".
			"  </td> <td:B1>\n".
			"   <p:BodyEDrop>". caps_first_word($txtE) .
			($r==1?'<t> <s:VR>R. </s>Thanks be to God.':'') . "</p>\n".
			"  </td> </tr> </table>\n";

}

?>
