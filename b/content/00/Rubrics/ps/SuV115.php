<?php
$p = 115;
$lpsL = '';
$lpsE = '';
if($p>0) {
	$lpsL = ', sed loco ultimi ps. '.$p.' <snr>p. '. bkref('Ps'.$p) .'</s>';
	$lpsE = ', except in the last place ps. '.$p.' <snr>p. '. bkref('Ps'.$p) .'</s>';
}

rubp('Psalmi de dominica, <snr>p. '. bkref('PsSuV') .'</s>'. $lpsL, 'Psalms of Sunday Vespers, <snr>p. '. bkref('PsSuV') .'</s>'. $lpsE);
?>

