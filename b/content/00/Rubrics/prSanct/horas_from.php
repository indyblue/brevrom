<?php 

$cs = array(
	'csApPTLH' => 'Apostles/Martyr(s) in P.T.',
	'csApLH' => 'Apostles',
	'csPLH' => 'Popes',
	'csMmLH' => 'Several Martyrs',
	'csMLH' => 'One Martyr',
	'csChurchLH' => 'Dedication of a Church',
	'csCBLH' => 'Confessor Bishop',
	'csCLH' => 'Confessors',
	'csVLH' => 'Virgins',
	'csHWLH' => 'Holy Women',
	'csBVMLH' => 'Blessed Virgin Mary');

if(!$cs[$link])
	trigger_error('all_else refers to unknown bookmark: ' 
	. bkref($link) . '.', E_USER_ERROR);

if($location==1)
	rubrics('ps/LittleHoursFeast.php');
elseif($location>1)
	rubrics('ps/Feria.php','At the Little Hours, ');

echo '   <p:Rubric>All else as in Common of '. $cs[$link] . 
	', <snr>p. '. bkref($link) .'</s>'. $content .'.</p>';
?>

