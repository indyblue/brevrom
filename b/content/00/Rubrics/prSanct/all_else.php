   <p:Rubric>All else from Common of <?php 

$ref1 = ', <s:NonRubric>p. <text:bookmark-ref text:reference-format="page" text:ref-name="';
$ref2 = '"/></s>.';

if(strpos($link,'sApPT'))
	echo 'Apostles/Martyr(s) in P.T.' . $ref1 . $link .$ref2;
elseif(strpos($link,'sAp'))
	echo 'Apostles' . $ref1 . $link .$ref2;
elseif(strpos($link,'sP'))
	echo 'Popes' . $ref1 . $link .$ref2;
elseif(strpos($link,'sMm'))
	echo 'Several Martyrs' . $ref1 . $link .$ref2;
elseif(strpos($link,'sM'))
	echo 'One Martyr' . $ref1 . $link .$ref2;
elseif(strpos($link,'sChurch'))
	echo 'Dedication of a Church' . $ref1 . $link .$ref2;
elseif(strpos($link,'sCB'))
	echo 'Confessor Bishop' . $ref1 . $link .$ref2;
elseif(strpos($link,'sC'))
	echo 'Confessors' . $ref1 . $link .$ref2;
elseif(strpos($link,'sV'))
	echo 'Virgins' . $ref1 . $link .$ref2;
elseif(strpos($link,'sHW'))
	echo 'Holy Women' . $ref1 . $link .$ref2;
elseif(strpos($link,'sBVM'))
	echo 'Blessed Virgin Mary' . $ref1 . $link .$ref2;
else 	trigger_error('all_else refers to unknown bookmark: ' 
	. $link . '.', E_USER_ERROR);
?></p>
