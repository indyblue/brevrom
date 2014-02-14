<?php

// $opt values:
// 1 - Capit, Deo Gratias
// $byref values:
// 0 - printed normally
// 'bookmark' - prints detailed reference to bookmark.
function lc($file, $byref=0, $opt=1) {
	$dir = "/www/b/content/00/LittleChapter/";

	$pieces = file_load($dir.$file);
	
	$cv = trim($pieces[0]);
	$txtL = trim($pieces[1]);
	$txtE = trim($pieces[2]);
	if($opt==1)
		$title = 'Capit. (Little Chapt.)';

	if($byref) 
		echo "   <p:Rubric>Capit.: <snr>". start_phrase($txtL,15) 
			."</s>, (". $cv .") <snr>p. ". bkref($byref) . "</s></p>\n";
	else
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
