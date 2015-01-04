<?php 
	space();
	hidden('Christmas',1);
	hidden('Sunday within Octave',2);
	head_temp(2,'Dominica infra Oct. Nativitatis', 'Sunday within the Oct. of the Nativity');

	hour('1V');
	rubrics('ant_et_pss_de_nativitate.php');
	lc('gal4_1-2.php');
	hymn('jesu_redemptor_omnium_quem.php',1);
	vrS('prTemp/verbum_caro_factum_est.php',1);
	ant('prTemp/nativity/oct_sun_b.php','M');
	rubp('Et non fit com. oct. Nativ.', 'And no commem. is made of the oct. of the Nativity.');
	rubrics('prSanct/ComplineSun.php');
	space();

	hour('L');
	ant('prTemp/nativity/25L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/nativity/25L.php','02222');	
	lc('gal4_1-2.php');
	hymn('a_solis_ortus_cardine.php',1);
	vrS('prTemp/notum_fecit_dominus.php',1);
	ant('prTemp/nativity/oct_sun_b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/nativity/oct_sun.php');
	rubp('Et non fit com. oct. Nativ.', 'And no commem. is made of the oct. of the Nativity.');
	space();

	ordref(0,4.1,0);

	hour('T');
	lc('gal4_1-2.php');
	brS('prTemp/verbum_caro_factum_est.php',1);
	vrS('prTemp/ipse_invocabit_me.php',1);
	space();

	hour('S');
	lc('gal4_4-5.php');
	brS('prTemp/notum_fecit_dominus.php',1);
	vrS('prTemp/viderunt_omnes_fines_terrae.php',1);
	space();

	hour('N');
	lc('gal4_7.php');
	brS('prTemp/viderunt_omnes_fines_terrae.php',1);
	vrS('prTemp/verbum_caro_factum_est.php',1);
	space();

	hour('2V');
	rubrics('ant_et_pss_de_nativitate.php');
	lc('gal4_1-2.php');
	hymn('jesu_redemptor_omnium_quem.php',1);
	vrS('prTemp/notum_fecit_dominus.php',1);
	ant('prTemp/nativity/oct_sun_m.php','M');
	rubrics('prSanct/ComplineSun.php');

?>



