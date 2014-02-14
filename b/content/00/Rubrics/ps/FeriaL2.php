<?php
if($link=='') rubp('Psalmi de feria currenti.', 'Antiphons and psalms of the current feria.');
$preL = 'Ad Laudes, p';
$preE = 'At Lauds, p';
$feria = 'feria';
if($link<0) {
	$link = abs($link);
	$preL = 'P';
	$preE = 'P';
}
if($link==1) $link='D';
$link = 'ps'.$link.'L2';
if($link==7) $feria = 'sabbato';
rubp($preL . 'salmi (cum ant.) de '. $feria .' 2° loco, <snr>p. '.bkref($link).'</s>.', $preE . 'salms (and proper antiphons) of Lauds II, <snr>p. '.bkref($link).'</s>.');
?>
