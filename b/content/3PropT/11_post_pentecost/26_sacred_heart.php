<?php 
	space();
	hidden('After Pentecost',1);
	hidden('Sacred Heart',2);
	img('Tempore/t10_sacred_heart.png',100);
	head_temp(1,'in Festo Sacratissimi Cordis Jesu', 'The Feast of the Most Sacred Heart of Jesus',array('Feria Sexta', 'Friday'));

	hour('1V');
	bookmark('1VCorpusChristi');
	ant('prTemp/post_pentecost/26V.php','20000');
	psalm(109);
	ant('prTemp/post_pentecost/26V.php','12000');
	psalm(110);
	ant('prTemp/post_pentecost/26V.php','01200');
	psalm(111);
	ant('prTemp/post_pentecost/26V.php','00120');
	psalm(115);
	ant('prTemp/post_pentecost/26V.php','00012');
	psalm(129);
	ant('prTemp/post_pentecost/26V.php','00001');
	lc('eph3_8-9.php');
	rubrics('head/HymnVerse.php');	
	hymn('en_ut_superba_criminum.php');
	vrS('prTemp/tollite_jugum_meum_super_vos_et_discite_a_me.php');
	ant('prTemp/post_pentecost/26m1.php','M');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_pentecost/26.php');
	rubrics('prSanct/ComplineSun.php');
	space();

/*
	hour('L');
	ant('prTemp/post_pentecost/26L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/post_pentecost/26L.php','02222');	
	lc('1cor11_23-24.php');
	rubrics('head/HymnVerse.php');	
	hymn('verbum_supernum_prodiens.php');
	vrS('prTemp/posuit_fines_tuos_pacem.php',1);
	ant('prTemp/post_pentecost/26b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_pentecost/26.php');
	space();

	ordref(0,6,0);

	hour('T');
	lc('1cor11_23-24.php');
	brS('prTemp/panem_caeli_dedit_eis.php',1);
	vrS('prTemp/cibavit_illos_ex_adipe_frumenti.php',1);
	space();

	hour('S');
	lc('1cor11_26.php');
	brS('prTemp/cibavit_illos_ex_adipe_frumenti.php',1);
	vrS('prTemp/educas_panem_de_terra.php',1);
	space();

	hour('N');
	lc('1cor11_27.php');
	brS('prTemp/educas_panem_de_terra.php',1);
	vrS('prTemp/posuit_fines_tuos_pacem.php',1);
	space();

	hour('2V');
	rubp('Omnia ut ad I Vesperas, <snr>p. '. bkref('1VCorpusChristi') .'</s> præter:', 'All as at I Vesperas, <snr>p. '. bkref('1VCorpusChristi') .'</s> except:');
	ant('prTemp/post_pentecost/26m2.php','M');
	rubrics('prSanct/ComplineSun.php');
	rubp('In Officio feriæ: Oratio <snr>Deus, in te, p. '. bkref('1_post_pentecost') .'</s>', 'In the ferial Office: Prayer <snr>O God, the strength, p.'. bkref('1_post_pentecost') .'</s>');


*/
?>
