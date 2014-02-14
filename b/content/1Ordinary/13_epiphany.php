<?php
	space();
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
	PrV('qui_apparuisti_hodie.php',0);
	rubp('In omni Officio, tam de tempore quam de Sanctis, dicitur cotidie sequens:', 'In all Offices, of the Season and of Saints, the following is said daily:');
	lc('is60_6.php',0,3);
	space();

	hour('T');
	lc('is60_1.php');
	brS('PrTemp/reges_tharsis_et_insulae_munera_offerent.php',1);
	vrS('PrTemp/omnes_de_saba_venient.php',1);
	space();

	hour('S');
	lc('is60_4.php');
	brS('PrTemp/omnes_de_saba_venient.php',1);
	vrS('PrTemp/adorate_dominum.php',1);
	space();

	hour('N');
	lc('is60_6.php');
	brS('PrTemp/adorate_dominum.php',1);
	vrS('PrTemp/adorate_deum.php',1);
	space();


	hour('V');
	lc('is60_1.php');
	head('De hymno et versu','The hymn and verse',3);
	hymn('crudelis_herodes_deum.php',0);
	vrS('PrTemp/reges_tharsis_et_insulae_munera_offerent.php');
	rubp('Antiphona ad <snr>Magníficat</s>, ut in Proprio de Tempore.', 'Antiphon at the <snr>Magnificat</s>, as in the Proper of Seasons.');	
	rubp('Oratio ut supra ad Laudes','Prayer as above at Lauds');

?>
