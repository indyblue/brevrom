<?php
// this function is used in the psalter, for constructing headings
// and other parts which come before the psalms at the beginning
// of the hours.
function dayhoursup($d, $h, $size=1) {
	$long = $_GET['long'];
	$dayL = array('','Domínica','Feria secúnda','Feria tértia',
		'Feria quárta','Feria quínta','Feria sexta','Sábbato');
	$dayE = array('','Sunday','Monday','Tuesday',
		'Wednesday','Thursday','Friday','Saturday');
	$hourL = array('M' => 'ad Matutínum', 'L' => 'ad Laudes', 
		'L1' => 'ad Laudes I', 'L2' => 'ad Laudes II', 
		'P' => 'ad Primam', 'T' => 'ad Tértiam', 
		'S' => 'ad Sextam', 'N' => 'ad Nonam', 
		'V' => 'ad Vésperas', '1V' => 'ad I Vésperas',
		'2V' => 'ad II Vésperas', 'C' => 'ad Completórium');
	$hourE = array('M' => 'at Matins', 'L' => 'at Lauds', 
		'L1' => 'at Lauds I', 'L2' => 'at Lauds II', 
		'P' => 'at Prime', 'T' => 'at Terce', 
		'S' => 'at Sext', 'N' => 'at None', 
		'V' => 'at Vespers', '1V' => 'at I Vespers',
		'2V' => 'at II Vespers', 'C' => 'at Compline');

	// if $size<0, only the header is printed
	$short = false;
	if($size<0) {
		$size = abs($size);
		$short = true;
	}
	$h1 = 'Psalter';
	$h2 = 2;

  space();
	//prints the heading for the hour
	head($dayL[$d] .' '. $hourL[$h], 
		$dayE[$d] .' '. $hourE[$h], 
		$size, $h1, $h2);

}
?>
