<?php 
	space();
	hidden('Christmas',1);
	hidden('Jan. 1',2);
	head_temp(1,'in Octava Nativitatis Domini', 'the Octave of the Nativity of the Lord',101);

	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/ComBVM.php');
	lc('tit2_11-12.php');
	hymn('jesu_redemptor_omnium_quem.php',1);
	vrS('prTemp/verbum_caro_factum_est.php',1);
	ant('prTemp/nativity/0101m1.php','M');
	rubp('Et non fit com. oct. Nativ.', 'And no commem. is made of the oct. of the Nativity.');
	rubrics('prSanct/ComplineSun.php');
	space();

	bookmark('pt0101L');
	hour('L');
	ant('prTemp/nativity/0101L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/nativity/0101L.php','02222');	
	lc('tit2_11-12.php');
	hymn('a_solis_ortus_cardine.php',1);
	vrS('prTemp/verbum_caro_factum_est.php',1);
	ant('prTemp/nativity/0101b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/nativity/0101.php');
	space();

	ordref(0,6,0);
	PrV('qui_natus_es_de_maria_virgine.php',1);
	space();

	hour('T');
	lc('tit2_11-12.php');
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

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/ComBVM.php');
	lc('tit2_11-12.php');
	hymn('jesu_redemptor_omnium_quem.php',1);
	vrS('prTemp/notum_fecit_dominus.php',1);
	ant('prTemp/nativity/0101m2.php','M');
	rubrics('prSanct/ComplineSun.php');

?>
