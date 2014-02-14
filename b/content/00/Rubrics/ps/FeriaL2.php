<?php
if($link=='') rubp('Psalmi de feria currenti.', 'Psalms of the current feria.');
$preL = 'Ad Laudes, p';
$preE = 'At Lauds, p';
$feria = 'feria';
if($link<0) {
	$link = abs($link);
	$preL = 'P';
	$preE = 'P';
}
if($link==1) $link='D';
if($link==7) {
	$link='S';
	$feria = 'sabbato';
}

$link = 'ps'.$link.'L2';

rubp($preL . 'salmi (cum ant.) de '. $feria .' 2° loco, <snr>p. '.bkref($link).'</s>.', $preE . 'salms (and antiphons) of Lauds II, <snr>p. '.bkref($link).'</s>.');
?>
