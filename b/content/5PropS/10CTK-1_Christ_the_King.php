<?php

	img('01_sunday_vespers.tif',100);
	space('RubricH');
	headSt('Last Sunday in October',1,'D.N. Jesu Christi Regis','Christ the King');

	hour('1V');
	rubrics('prSanct/all2Vespers.php');
	vrS('prSanct/data_est_mihi_omnis_potestas.php');
	ant('prSanct/10CTKm1.php','M');
	rubp('Et non fit com. dominicæ occurrentis.','Commem. is not made of the Sunday.');
	rubrics('prSanct/ComplineSun.php');
	space();

	hour('L');
	ant('prSanct/10CTKL.php','20000');
	rubrics('ps/SuL1.php');
	ant('prSanct/10CTKL.php','02222');
	lc('col1_12.php');
	rubrics('head/HymnVerse.php');
	hymn('vexilla_christus_inclyta.php');
	vrS('prSanct/multiplicabitur_ejus_imperium.php');
	ant('prSanct/10CTKb.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/10CTK.php');
	rubp('Et non fit com. dominicæ occurrentis.','Commem. is not made of the Sunday.');
	space();

	csref(0,3);
	PrV('qui_primatum_in_omnibus_tenes.php');
	space();

	hour('T');
	lc('col1_12.php');
	brS('prSanct/data_est_mihi_omnis_potestas.php');
	vrS('prSanct/afferte_domino_familiae_populorum.php');
	space();

	hour('S');
	lc('col1_16.php');
	brS('prSanct/afferte_domino_familiae_populorum.php');
	vrS('prSanct/adorabunt_eum_omnes_reges_terrae.php');
	space();

	hour('N');
	lc('col1_19.php');
	brS('prSanct/adorabunt_eum_omnes_reges_terrae.php');
	vrS('prSanct/multiplicabitur_ejus_imperium.php');
	space();

	hour('2V');
	ant('prSanct/10CTKV.php','20000');
	rubrics('ps/SuV116.php');
	ant('prSanct/10CTKV.php','02222');
	lc('col1_12.php');
	rubrics('head/HymnVerse.php');
	hymn('te_saeculorum_principem.php');
	vrS('prSanct/multiplicabitur_ejus_imperium.php');
	ant('prSanct/10CTKm2.php','M');
	rubrics('head/Prayer.php');
	prayer('prSanct/10CTK.php');
	rubp('Et non fit com. dominicæ occurrentis.','Commem. is not made of the Sunday.');
	rubrics('prSanct/ComplineSun.php');
?>
