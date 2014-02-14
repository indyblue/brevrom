<?php

//$option:
// 2 - no V/R. 

function vr($file, $option=0) {
	$dir = "/www/b/content/00/VR/long/";
		require $dir.$file;
}
function vrS($file, $option=0) {
	$dir = "/www/b/content/00/VR/";

	$Lpieces = file_load($dir.$file);
	$Epieces = file_load($dir.E($file));
	
	$iLfile = (int)(count($Lpieces));
	$iEfile = (int)(count($Epieces));
	if($iLfile<2 || $iEfile<$iLfile)
		trigger_error('VR line count problem (' . $file . '). Latin: ' . $iLfile . ', English: ' . $iEfile, E_USER_ERROR);
	
	echo '   <table>
';
	
	for($i=0;$i<$iLfile-1;$i+=2) {
		$L1 = $Lpieces[$i];
		$L2 = $Lpieces[$i+1];
		$E1 = $Epieces[$i];
		$E2 = $Epieces[$i+1];
		$subst = array(' *','*');

		if($option==2)
		echo '   <tr><td:A1>
    <p:BodyL>'. style_first_letter($L1,'sb') .'</p>
   </td><td:B1>
    <p:BodyE>'. style_first_letter($E1,'sb') .'</p>
   </td></tr>
   <tr><td:A1>
    <p:BodyL>'. style_first_letter($L2,'sb') .'</p>
   </td><td:B1>
    <p:BodyE>'. style_first_letter($E2,'sb') .'</p>
   </td></tr>
';
		else {
			$L1 = str_replace($subst,'',$L1);
			$E1 = str_replace($subst,'',$E1);
			echo '   <tr><td:A1>
    <p:BodyL><s:VR>V. </s>'. $L1 .' <s:VR>R. </s>'. $L2 .'</p>
   </td><td:B1>
    <p:BodyE><s:VR>V. </s>'. $E1 .' <s:VR>R. </s>'. $E2 .'</p>
   </td></tr>
';
		}
	}
	echo '   </table>
';
}
?>

