   <text:p text:style-name="Rubric">All else from Common of <?php 

$ref1 = ', <text:span text:style-name="NonRubric">p. <text:bookmark-ref text:reference-format="page" text:ref-name="';
$ref2 = '"/></text:span>.';

if($link=='csAp')
	echo 'Apostles' . $ref1 . $link .$ref2;
elseif($link=='csApPT')
	echo 'Apostles/Martyr(s) in P.T.' . $ref1 . $link .$ref2;
elseif($link=='csP')
	echo 'Popes' . $ref1 . $link .$ref2;
elseif($link=='csM')
	echo 'One Martyr' . $ref1 . $link .$ref2;
elseif($link=='csMm')
	echo 'Several Martyrs' . $ref1 . $link .$ref2;
elseif($link=='csCB')
	echo 'Confessor Bishop' . $ref1 . $link .$ref2;
elseif($link=='csC')
	echo 'Confessors' . $ref1 . $link .$ref2;
elseif($link=='csV')
	echo 'Virgins' . $ref1 . $link .$ref2;
elseif($link=='csHW')
	echo 'Holy Women' . $ref1 . $link .$ref2;
elseif($link=='csChurch')
	echo 'Dedication of a Church' . $ref1 . $link .$ref2;
elseif($link=='csBVM')
	echo 'Blessed Virgin Mary' . $ref1 . $link .$ref2;
else 	trigger_error('all_else refers to unknown bookmark: ' 
	. $link . '.', E_USER_ERROR);
?></text:p>
