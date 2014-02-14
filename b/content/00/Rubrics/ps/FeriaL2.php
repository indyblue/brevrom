<?php
if($link=='') rubp('Psalmi de feria currenti.', 'Antiphons and psalms of the current feria.');
elseif($link==1) $link='D';
$link = 'ps'.$link.'L2';
rubp('Ad Laudes, psalmi (cum ant.) de feria 2° loco, <snr>p. '.bkref($link).'</s>.', 'At Lauds, psalms (and proper antiphons) of Lauds II, <snr>p. '.bkref($link).'</s>.');
?>
