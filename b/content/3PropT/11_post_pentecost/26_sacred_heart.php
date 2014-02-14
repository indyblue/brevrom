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
	hymn('en_ut_superba_criminum.php',0);
	vrS('PrTemp/tollite_jugum_meum_super_vos_et_discite_a_me.php');
	ant('PrTemp/post_pentecost/26m1.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/26.php');
	rubrics('prSanct/ComplineSun.php');
	space();

	hour('L');
	ant('prTemp/post_pentecost/26L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/post_pentecost/26L.php','02222');	
	lc('eph3_8-9.php');
	rubrics('head/HymnVerse.php');	
	hymn('cor_arca_legem_continens.php');
	vrS('PrTemp/haurietis_aquas_in_gaudio.php');
	ant('PrTemp/post_pentecost/26b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/26.php');
	space();

	ordref(0,6,0);
	PrV('qui_corde_fundis_gratiam.php');
	space();

	hour('T');
	lc('eph3_8-9.php');
	brS('PrTemp/tollite_jugum_meum_super_vos_et_discite_a_me.php');
	vrS('Ord/ego_dixi_domine_miserere_mei.php');
	space();

	hour('S');
	lc('eph3_14-17.php');
	brS('Ord/ego_dixi_domine_miserere_mei.php');
	vrS('PrTemp/memoriam_fecit_mirabilium_suorum_miserator_dominus.php');
	space();

	hour('N');
	lc('eph3_17-19.php');
	brS('PrTemp/memoriam_fecit_mirabilium_suorum_miserator_dominus.php');
	vrS('PrTemp/haurietis_aquas_in_gaudio.php');
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubp('Pss. ut ad I Vesperas festis sanctissimi Corporis Christi, <snr>p. '. bkref('1VCorpusChristi') .'</s>.', 'Psalms as at I Vesperas of the feast of the most holy Body of Christ, <snr>p. '. bkref('1VCorpusChristi') .'</s>.');
	lc('eph3_8-9.php');
	hymn('en_ut_superba_criminum.php',1);
	vrS('PrTemp/haurietis_aquas_in_gaudio.php');
	ant('PrTemp/post_pentecost/26m2.php','M');
	rubrics('prSanct/ComplineSun.php');

?>
