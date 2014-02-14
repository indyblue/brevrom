<?php

$wen = 'respective';
$wlt = 'respectivæ dominicæ et hebdomadæ';

if($link===1) {
	$wen = 'first';
	$wlt = 'dominicæ et hebdomadæ I';
}
$pgref = '<snr>p. '.bkref('PostPentMonths').'</s>';

rubp('Si tamen hæc dominica mense augusto occurrat, sumuntur antiphona ac lectiones '.$wlt.' mensis augusti, '.$pgref.', omissis ceteris de libris Regum.', 'If this Sunday occurs in the month of August, the antiphon and also lessons are taken from the '.$wen.' Sunday and week of August, '.$pgref.', omitting the rest of the books of Kings.');

?>
