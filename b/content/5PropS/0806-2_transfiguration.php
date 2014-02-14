<?php

	space(); 
	img('Saints/0806_transfiguration.tif',100);
	space('RubricH'); 
	headst('806',12,'in Transfiguratione D.N.J.C.',
		'The Transfiguration of our Lord Jesus Christ');

	hour('1V');
	rubrics('prSanct/Sun1Vespers.php'); 
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('phil3_20-21.php','ps0806Vlc','h','quicumque_christum_quaeritis.php');
	vrS('prSanct/gloriosus_apparuisti_in_conspectu_domini.php');
	ant('prSanct/0806m1.php','M');

	space();
	hour('L');
	ant('prSanct/0806L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prSanct/0806L.php','02222');
	lc('phil3_20-21.php');
	rubrics('head/HymnVerse.php');
	hymn('lux_alma_jesu_mentium.php');
	vrS('prSanct/corona_aurea_super_caput_ejus.php');
	ant('prSanct/0806b.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/0806.php');
	feast_saint(806,-1,"Ss. Xysti II Papæ, Felicissimi et Agapiti",
		"Ss. Sixtus II, Pope, Felicissimus and Agapitus","M+");

	space();
	rubrics('ps/LittleHoursFeria.php'); 
	PrV('qui_apparuisti_hodie.php'); 

	hour('T'); 
	lc('phil3_20-21.php');
	brS('prSanct/gloriosus_apparuisti_in_conspectu_domini.php',1);
	vrS('gloria_et_honore_coronasti_eum_domine.php',1);
	
	space();
	hour('S'); 
	lc('2cor3_18.php'); 
	brS('gloria_et_honore_coronasti_eum_domine.php',1);
	vrS('magna_est_gloria_ejus_in_salutari_tuo.php',1);

	space();
	hour('N'); 
	lc('apoc21_10-11_23.php');
	brS('magna_est_gloria_ejus_in_salutari_tuo.php',1);
	vrS('prSanct/corona_aurea_super_caput_ejus.php',1);

	space();
	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	bookmark('ps0806Vlc');
	lc('phil3_20-21.php');
	rubrics('head/HymnVerse.php');
	hymn('quicumque_christum_quaeritis.php');
	vrS('prSanct/gloriosus_apparuisti_in_conspectu_domini.php');
	ant('prSanct/0806m2.php','M');
	rubrics('prSanct/ComplineSun.php'); 

?>

