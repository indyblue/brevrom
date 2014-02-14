<?php
	lc('1tim1_17.php');

	rubrics('head/PTnot.php');
	brS('Ord/christe_fili_dei_vivi_miserere_nobis.php');
	vrS('Ord/exsurge_christe_adjuva_nos.php');
	rubp('Tempore Passionis omittitur <snr>Glória Patri</s>.','In Passiontide omit the <snr>Glória Patri</s>.');
	rubp('','Advent Season, and on Christmas Eve');
	PrV('qui_venturus_es_in_mundum.php',1);
	rubp('','In the Christmas Season, Feasts of BVM, and Saturday Office of BVM');
	PrV('qui_natus_es_de_maria_virgine.php',1);
	rubp('','In the Epiphany Season');
	PrV('qui_apparuisti_hodie.php',1);

	rubrics('head/PT.php');
	brS('Ord/christe_fili_dei_vivi_miserere_nobis_PT.php',1);
	vrS('Ord/exsurge_christe_adjuva_nos.php',1);
	rubp('','In Ascensiontide');
	PrV('qui_scandis_super_sidera.php',1);
	rubp('','In the Octave of Pentecost:');
	PrV('qui_sedes_ad_dexteram_patris.php',1);
	space();
	vr('dv_de_short2.php');
	vr('oremus.php');
	prayer('Ord/prime01.php',1);
	vr('dv_de_short2.php');
	vrS('benedicamus_domino.php');

	head('De lectione Martyrologii','The reading of the Martyrology',3);
	vrS('Ord/pretiosa_in_conspectu_domini.php');
	prayer('Ord/prime02.php',1);
	
	vrS('Ord/deus_in_adjutorium_meum_intende.php');
	rubp('Et dicitur ter; ultimo additur:',
		'Which is said thrice, then followed by:');
	vrS('Ord/gloria_patri.php');
	vrS('Ord/kyrie_eleison.php');
	vr('pater_silent_vr.php');
	vrS('Ord/respice_in_servos_tuos_domine.php');
	vrS('Ord/gloria_patri.php');
	vr('oremus.php');
	prayer('Ord/prime03.php',1);

	head('Lectio brevis','Brief lesson',3);
	vr('jube_domine.php');
	vr('bened_dies_et.php');
	lc('is33_2.php',0,2,'In Advent:');
	lc('hebr1_11-12.php',0,2,'Christmas Season:');
	lc('is60_6.php',0,2,'Epiphany Season:');
	lc('is55_6.php',0,2,'Lent:');
	lc('is50_6-7.php',0,2,'Passiontide:');
	lc('col3_1-2.php',0,2,'Easter Season:');
	lc('acts1_11.php',0,2,'Ascensiontide:');
	lc('acts2_11.php',0,2,'Octave of Pentecost:');
	lc('2thess3_5.php',0,2,'All other times:');

	vrS('Ord/adjutorium+nostrum_in_nomine_domini.php');
	vrS('Ord/benedicite.php');
	vr('prime_bened.php');

?>

