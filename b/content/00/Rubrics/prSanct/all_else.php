   <p:Rubric>All else from Common of <?php 

$ref1 = ', <snr>p. ';
$ref2 = '</s>.';

if(strpos($link,'sApPT'))
	echo 'Apostles/Martyr(s) in P.T.' . $ref1 . bkref($link) .$ref2;
elseif(strpos($link,'sAp'))
	echo 'Apostles' . $ref1 . bkref($link) .$ref2;
elseif(strpos($link,'sP'))
	echo 'Popes' . $ref1 . bkref($link) .$ref2;
elseif(strpos($link,'sMm'))
	echo 'Several Martyrs' . $ref1 . bkref($link) .$ref2;
elseif(strpos($link,'sM'))
	echo 'One Martyr' . $ref1 . bkref($link) .$ref2;
elseif(strpos($link,'sChurch'))
	echo 'Dedication of a Church' . $ref1 . bkref($link) .$ref2;
elseif(strpos($link,'sCB'))
	echo 'Confessor Bishop' . $ref1 . bkref($link) .$ref2;
elseif(strpos($link,'sC'))
	echo 'Confessors' . $ref1 . bkref($link) .$ref2;
elseif(strpos($link,'sV'))
	echo 'Virgins' . $ref1 . bkref($link) .$ref2;
elseif(strpos($link,'sHW'))
	echo 'Holy Women' . $ref1 . bkref($link) .$ref2;
elseif(strpos($link,'sBVM'))
	echo 'Blessed Virgin Mary' . $ref1 . bkref($link) .$ref2;
else 	trigger_error('all_else refers to unknown bookmark: ' 
	. bkref($link) . '.', E_USER_ERROR);
?></p>
