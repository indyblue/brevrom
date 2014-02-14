<?php 

$cs = array(
	'csApPT' => 'Apostles/Martyr(s) in P.T.',
	'csAp' => 'Apostles',
	'csP' => 'Popes',
	'csMm' => 'Several Martyrs',
	'csM' => 'One Martyr',
	'csChurch' => 'Dedication of a Church',
	'csCB' => 'Confessor Bishop',
	'csC' => 'Confessors',
	'csV' => 'Virgins',
	'csHW' => 'Holy Women',
	'csBVM' => 'Blessed Virgin Mary');

if(!$cs[$link])
	trigger_error('all_from refers to unknown bookmark: ' 
	. bkref($link) . '.', E_USER_ERROR);

echo '   <p:Rubric>All from Common of '. $cs[$link] . 
	', <snr>p. '. bkref($link) .'</s>.</p>';
?>
