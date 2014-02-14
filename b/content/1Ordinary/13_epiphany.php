<?php
	bookmark('OrEpiphany');
	head('Tempore Epiphaniæ','Epiphany Season',1,'Ordinary','Epiphany');
	hour('L');
	lc('is60_1.php');
	head('De hymno et versu','The hymn and verse',3);
	hymn('o_sola_magnarum_urbium.php',0);
	vrS('PrTemp/adorate_deum.php',1);
	rubp('Antiphona ad <snr>Benedíctus</s>, ut in Proprio de Tempore.', 'Antiphon at the <snr>Benedictus</s>, as in the Proper of Seasons.');
	head('Ante dominicam I post Epiphaniam', 'Before the first Sunday after Epiphany',4);
	rubrics('head/Prayer.php');
	prayer('PrTemp/epiphany/06.php');
	head('Post dominicam I post Epiphaniam', 'After the first Sunday after Epiphany',4);
	rubrics('head/Prayer.php');
	prayer('PrTemp/epiphany/e01.php');

	space();
	hour('P');
	rubp('In omni Officio tam de Tempore quam de Sanctis, in responsorio brevi dicitur cotidie, nisi proprius habeatur, sequens:', 'In all Offices, of the Season and of Saints, unless a proper verse is specified, in the brief response the following is said daily:');
	PrV('qui_natus_es_de_maria_virgine.php',1);
	rubp('In omni Officio, tam de tempore quam de Sanctis, dicitur cotidie sequens:', 'In all Offices, of the Season and of Saints, the following is said daily:');
	lc('hebr1_11-12.php',0,3);

	space();
	hour('T');
	lc('is60_1.php');
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
	lc('is60_1.php');
	head('De hymno et versu','The hymn and verse',3);
	hymn('jesu_redemptor_omnium_quem.php');
	vrS('PrTemp/notum_fecit_dominus.php',1);
	ant('PrTemp/nativity/0101m2.php','M');
	rubp('Oratio ut supra ad Laudes','Prayer as above at Lauds');

?>
