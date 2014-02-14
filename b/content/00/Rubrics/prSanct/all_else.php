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
	trigger_error('all_else refers to unknown bookmark: ' 
	. bkref($link) . '.', E_USER_ERROR);

if($location==2 && ($link=='csAp' || $link=='csMm' || $link=='csM')) {
	echo '   <p:Rubric>In Paschaltide, all else from Common of '.
		$cs['csApPT'] . ', <snr>p. '. bkref('csApPT') .'</s>.</p>';
	echo '   <p:Rubric>Otherwise, all else from Common of '. 
		$cs[$link] . ', <snr>p. '. bkref($link) .'</s>.</p>';
} else {
	echo '   <p:Rubric>All else from Common of '. $cs[$link] . 
		', <snr>p. '. bkref($link) .'</s>.</p>';
}
?>
