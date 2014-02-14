<?php

/* 
<?php rubrics('asIn.php','csApLCLauds','Lauds','Little Chapter'); ?> 
*/
function hour($h, $size=2) {
	$hourL = array('M' => 'ad Matutínum', 'L' => 'ad Laudes', 
		'P' => 'ad Primam', 'T' => 'ad Tértiam', 
		'S' => 'ad Sextam', 'N' => 'ad Nonam', 
		'V' => 'ad Vésperas', '1V' => 'ad I Vésperas',
		'2V' => 'ad II Vésperas', 'C' => 'ad Completórium');
	$hourE = array('M' => 'at Matins', 'L' => 'at Lauds', 
		'P' => 'at Prime', 'T' => 'at Terce', 
		'S' => 'at Sext', 'N' => 'at Nonam', 
		'V' => 'at Vespers', '1V' => 'at I Vespers',
		'2V' => 'at II Vespers', 'C' => 'at Compline');
	head($hourL[$h], $hourE[$h], $size);
}

function head($L, $E, $size=3, $h1=0, $h2=0) {
	if($h1!==0) {
		if($h1==1) $h1 = $L;
		elseif($h1==2) $h1 = $E;
		echo '  <p:Hidden1>' . $h1 .'</p>
';
	}
	if($h2!==0) {
		if($h2==1) $h2 = $L;
		elseif($h2==2) $h2 = $E;
		echo '  <p:Hidden2>' . $h2 .'</p>
';
	}
	if($size<4) {
		echo '  <text:p text:style-name="Head'. $size .'">' . ($_GET['L']==1?$L:$E) .'</p>
';
		if($size<2) 
			echo '  <text:p text:style-name="Head5">' . ($_GET['L']==1?$E:$L) .'</p>
';
	}
	else echo '
  <tableH>
   <tr><td:A1>
   <p:Head'. $size .'><sr>'. $L .'</s></p>
   </td><td:B2>
   <p:Head'. $size .'><sr>'. $E .'</s></p>
  </td></tr></table>
';


}

?>
