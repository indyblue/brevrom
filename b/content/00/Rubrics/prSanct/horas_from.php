   <p:Rubric>Little Hours from Common of <?php 

$ref1 = ', <snr>p. ';
$ref2 = '</s>.';

if($link=='csApLH')
	echo 'Apostles' . $ref1 . bkref($link) .$ref2;
elseif($link=='csApPTLH')
	echo 'Apostles/Martyr(s) in P.T.' . $ref1 . bkref($link) .$ref2;
elseif($link=='csPLH')
	echo 'Popes' . $ref1 . bkref($link) .$ref2;
elseif($link=='csMLH')
	echo 'One Martyr' . $ref1 . bkref($link) .$ref2;
elseif($link=='csMmLH')
	echo 'Several Martyrs' . $ref1 . bkref($link) .$ref2;
elseif($link=='csCBLH')
	echo 'Confessor Bishop' . $ref1 . bkref($link) .$ref2;
elseif($link=='csCLH')
	echo 'Confessors' . $ref1 . bkref($link) .$ref2;
elseif($link=='csVLH')
	echo 'Virgins' . $ref1 . bkref($link) .$ref2;
elseif($link=='csHWLH')
	echo 'Holy Women' . $ref1 . bkref($link) .$ref2;
elseif($link=='csChurchLH')
	echo 'Dedication of a Church' . $ref1 . bkref($link) .$ref2;
elseif($link=='csBVMLH')
	echo 'Blessed Virgin Mary' . $ref1 . bkref($link) .$ref2;
else 	trigger_error('all_else refers to unknown bookmark: ' 
	. bkref($link) . '.', E_USER_ERROR);
echo ', '. $location .'</p>'

?>
