<?php 
	space();
	hidden('Christmas',1);
	hidden('Dec. 25',2);
	head_temp(182,'in Nativitate Domini', 'the Nativity of the Lord',1225);

	hour('1V');
	ant('prTemp/nativity/25V1.php','20000');
	rubrics('ps/SuV116.php');	
	ant('prTemp/nativity/25V1.php','02222');	
	lc('tit3_4.php');
	hymn('jesu_redemptor_omnium_quem.php',1);
	vrS('prTemp/crastina_die_delebitur_iniquitas_terrae.php');
	ant('prTemp/nativity/25m1.php','M');
	rubrics('prSanct/ComplineSun.php');
	space();

	hour('L');
	ant('prTemp/nativity/25L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/nativity/25L.php','02222');	
	lc('hebr1_1-2.php');
	hymn('a_solis_ortus_cardine.php',1);
	vrS('prTemp/notum_fecit_dominus.php',1);
	ant('prTemp/nativity/25b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/nativity/25.php');
	space();

	ordref(0,6,0);

	hour('P');
	PrV('qui_natus_es_de_maria_virgine.php',2,
		array(', et ad absolutionem capituli lectio brevis <snr>Ipsi períbunt</s>, quæ dicitur cotidie usque ad diem 5 januarii inclusive, juxta rubricas.', ', and at the end of the hour the brief lesson <snr>They shall perish</s>, which are said every day until January 5 inclusive, according to the rubrics.'));
	space();

	rubp('Tertia dicitur hora sua, qua finita, celebratur tertia Missa de die Nativitatis.', 'Terce is said at its usual hour; when it is finished, the third Mass of Christmas is celebrated.');
	hour('T');
	lc('hebr1_1-2.php');
	brS('prTemp/verbum_caro_factum_est.php',1);
	vrS('prTemp/ipse_invocabit_me.php',1);
	space();

	hour('S');
	lc('hebr1_10.php');
	brS('prTemp/notum_fecit_dominus.php',1);
	vrS('prTemp/viderunt_omnes_fines_terrae.php',1);
	space();

	hour('N');
	lc('hebr1_11-12.php');
	brS('prTemp/viderunt_omnes_fines_terrae.php',1);
	vrS('prTemp/verbum_caro_factum_est.php',1);
	space();

	bookmark('PsNativityV');
	hour('2V');
	ant('prTemp/nativity/25V2.php','20000');
	psalm(109);
	ant('prTemp/nativity/25V2.php','12000');	
	psalm(110);
	ant('prTemp/nativity/25V2.php','01200');	
	psalm(111);
	ant('prTemp/nativity/25V2.php','00120');	
	psalm(129);
	ant('prTemp/nativity/25V2.php','00012');	
	psalm(131);
	ant('prTemp/nativity/25V2.php','00001');	
	rubp('<snr>¶</s> Psalmi præcedentes cum suis antiphonis dicuntur, per totam octavam Nativitatis, ad Vesperas cujuslibet Officii, præterquam diei octavi Nativitatis (diebus 31 decembris et 1 januarii); a Capitulo fit de Officio currenti, nisi faciendum sit de sequenti Officio nobiliori.', '<snr>¶</s> The preceding psalms with their antiphons are said for all of the octave of the Nativity, at Vespers of every Office, except the octave day of the Nativity (that is, except on December 31 and January 1); from the Little Chapter on, the Office of the day is said, unless an Office of higher rank on the following day supercedes it.');
	space();
	lc('hebr1_1-2.php');
	space('line');
	rubp('Dominica infra octavam:', 'Sunday within the octave:');
	lc('gal4_1-2.php');
	space('line');
	hymn('jesu_redemptor_omnium_quem.php',1);
	vrS('prTemp/notum_fecit_dominus.php',1);
	ant('prTemp/nativity/25m2.php','M');
	rubrics('head/Prayer.php');
	prayer('prTemp/nativity/25.php');
	rubrics('prSanct/ComplineSun.php');

?>


