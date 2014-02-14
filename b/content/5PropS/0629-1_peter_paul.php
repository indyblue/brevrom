<?php

	space(); 
	img('Saints/0629_ss_peter_and_paul.tif',100);
	space('RubricH'); 
	feast_saint(629,11,'Sanctorum Petri et Pauli',
		'Saints Peter and Paul.','A+');

	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('acts12_1-3.php');
	hymn('decora_lux_aeternitatis_auream.php',1);
	vrS('in_omnem_terram_exivit_sonus_eorum.php');
	ant('prSanct/0629m1.php','M');

	space();
	hour('L');
	ant('prSanct/0629L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prSanct/0629L.php','02222');
	lc('acts12_1-3.php');
	rubrics('head/HymnVerse.php');
	hymn('beate_pastor_petre_clemens_accipe2.php');
	vrS('annuntiaverunt_opera_dei.php');
	ant('prSanct/0629b.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/0629.php');

	space();
	csref(0,3);

	hour('T'); 
	lc('acts12_1-3.php');
	brS('in_omnem_terram_exivit_sonus_eorum.php');
	vrS('constitues_eos_principes_super_omnem_terram.php');
	
	space();
	hour('S'); 
	lc('acts12_5.php'); 
	brS('constitues_eos_principes_super_omnem_terram.php');
	vrS('nimis_honorati_sunt_amici_tui_deus.php');

	space();
	hour('N'); 
	lc('acts12_11.php');
	brS('nimis_honorati_sunt_amici_tui_deus.php');
	vrS('annuntiaverunt_opera_dei.php');

	space();
	hour('2V'); 
	rubrics('ps/ComAp+a.php');
	lc('acts12_1-3.php');
	rubrics('head/HymnVerse.php');
	hymn('decora_lux_aeternitatis_auream.php',0);
	vrS('annuntiaverunt_opera_dei.php');
	ant('prSanct/0629m2.php','M');
	rubrics('prSanct/ComplineSun.php'); 

?>

