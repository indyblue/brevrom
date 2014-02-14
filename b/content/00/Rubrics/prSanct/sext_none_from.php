   <p:Rubric>Sext &amp; None from Common of <?php 

$ref1 = ', <snr>p. ';
$ref2 = '</s>.';

if($link=='csApS')
	echo 'Apostles' . $ref1 . bkref($link) .$ref2;
elseif($link=='csApPTS')
	echo 'Apostles/Martyr(s) in P.T.' . $ref1 . bkref($link) .$ref2;
elseif($link=='csPS')
	echo 'Popes' . $ref1 . bkref($link) .$ref2;
elseif($link=='csMS')
	echo 'One Martyr' . $ref1 . bkref($link) .$ref2;
elseif($link=='csMmS')
	echo 'Several Martyrs' . $ref1 . bkref($link) .$ref2;
elseif($link=='csCBS')
	echo 'Confessor Bishop' . $ref1 . bkref($link) .$ref2;
elseif($link=='csCS')
	echo 'Confessors' . $ref1 . bkref($link) .$ref2;
elseif($link=='csVS')
	echo 'Virgins' . $ref1 . bkref($link) .$ref2;
elseif($link=='csHWS')
	echo 'Holy Women' . $ref1 . bkref($link) .$ref2;
elseif($link=='csChurchS')
	echo 'Dedication of a Church' . $ref1 . bkref($link) .$ref2;
elseif($link=='csBVMS')
	echo 'Blessed Virgin Mary' . $ref1 . bkref($link) .$ref2;
else 	trigger_error('all_else refers to unknown bookmark: ' 
	. bkref($link) . '.', E_USER_ERROR);
echo ', '. $location .'</p>'

?>
