<?php 

$cs = array(
	'csApPTS' => 'Apostles/Martyr(s) in P.T.',
	'csApS' => 'Apostles',
	'csPS' => 'Popes',
	'csMmS' => 'Several Martyrs',
	'csMS' => 'One Martyr',
	'csChurchS' => 'Dedication of a Church',
	'csCBS' => 'Confessor Bishop',
	'csCS' => 'Confessors',
	'csVS' => 'Virgins',
	'csHWS' => 'Holy Women',
	'csBVMS' => 'Blessed Virgin Mary');

if(!$cs[$link])
	trigger_error('sext_none_from refers to unknown bookmark: ' 
	. bkref($link) . '.', E_USER_ERROR);

echo '   <p:Rubric>Sext &amp; None from Common of '. $cs[$link] . 
	', <snr>p. '. bkref($link) .'</s>.</p>';
?>
