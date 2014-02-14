   <p:Rubric>All from Common of <?php 

$ref1 = ', <snr>p. ';
$ref2 = '</s>.';

if($link=='csAp')
	echo 'Apostles' . $ref1 . bkref($link) .$ref2;
elseif($link=='csApPT')
	echo 'Apostles/Martyr(s) in P.T.' . $ref1 . bkref($link) .$ref2;
elseif($link=='csP')
	echo 'Popes' . $ref1 . bkref($link) .$ref2;
elseif($link=='csM')
	echo 'One Martyr' . $ref1 . bkref($link) .$ref2;
elseif($link=='csMm')
	echo 'Several Martyrs' . $ref1 . bkref($link) .$ref2;
elseif($link=='csCB')
	echo 'Confessor Bishop' . $ref1 . bkref($link) .$ref2;
elseif($link=='csC')
	echo 'Confessors' . $ref1 . bkref($link) .$ref2;
elseif($link=='csV')
	echo 'Virgins' . $ref1 . bkref($link) .$ref2;
elseif($link=='csHW')
	echo 'Holy Women' . $ref1 . bkref($link) .$ref2;
elseif($link=='csChurch')
	echo 'Dedication of a Church' . $ref1 . bkref($link) .$ref2;
elseif($link=='csBVM')
	echo 'Blessed Virgin Mary' . $ref1 . bkref($link) .$ref2;
else 	trigger_error('all_else refers to unknown bookmark: ' 
	. bkref($link) . '.', E_USER_ERROR);
?>, except that which is given here as proper.</p>
