<?php
	space();
	head('Tempore Nativitatis','Christmas Season',1,'Ordinary','Christmas');
	hour('L');
	lc('tit2_11-12.php');
	head('De hymno et versu','The hymn and verse',3);
	hymn('a_solis_ortus_cardine.php',0);
	vrS('PrTemp/verbum_caro_factum_est.php');
	ant('PrTemp/0101b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/0101.php');

	space();
	hour('P');
	rubp('In omni Officio tam de Tempore quam de Sanctis, in responsorio brevi dicitur cotidie, nisi proprius habeatur, sequens:',
		'In all Offices, of the Season and of Saints, unless a proper verse is specified, in the brief response the following is said daily:');
	PrV('qui_natus_es_de_maria_virgine.php',1);
	rubp('In omni Officio, tam de tempore quam de Sanctis, dicitur cotidie sequens:',
		'In all Offices, of the Season and of Saints, the following is said daily:');
	lc('hebr1_11-12.php',0,3);

	space();
	hour('T');
	lc('tit2_11-12.php');
	brS('PrTemp/verbum_caro_factum_est.php',1);
	vrS('PrTemp/ipse_invocabit_me.php',1);

	space();
	hour('S');
	lc('hebr1_10.php');
	brS('PrTemp/notum_fecit_dominus.php',1);
	vrS('PrTemp/viderunt_omnes_fines_terrae.php',1);

	space();
	hour('N');
	lc('hebr1_11-12.php');
	brS('PrTemp/viderunt_omnes_fines_terrae.php',1);
	vrS('PrTemp/verbum_caro_factum_est.php',1);

	space();
	hour('V');
	lc('tit2_11-12.php');
	head('De hymno et versu','The hymn and verse',3);
	hymn('jesu_redemptor_omnium_quem.php');
	vrS('PrTemp/notum_fecit_dominus.php',1);
	ant('PrTemp/0101m2.php','M');
	rubp('Oratio ut supra ad Laudes','Prayer as above at Lauds');

?>
