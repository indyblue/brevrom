<?php

	space('Body');
	hour('M');
	vrS('Ord/domine_labia_mea_aperies.php');
	vr('deus_in_adjutorium.php');
	bookmark('Ps94');
	ant('ave_maria.php');
	psalm('094.php');
	rubrics('head/HymnVerse.php');
	hymn('quem_terra_pontus_sidera.php');
	space('Body');
	ant('csBVML.php','20000');

	rubp('Isti tres Psalmi sequentes dic. diebus Dominicis, Feria II et V ad Nocturn','The three following psalms are said on Sunday, Monday, and Thursday at the Nocturn.',1);
	ant('loBVMm.php','200000000');
	psref(8);
	ant('offDefMatins.php','020000000');
	psref(18,2);
	ant('offDefMatins.php','002000000');
	psref(23);

	rubp('Isti tres Psalmi sequentes dic. Feria III et VI ad Nocturnum.','The three following psalms are said on Tuesday and Friday at the Nocturn.',1);
	ant('offDefMatins.php','000200000');
	psref(44,2);
	ant('offDefMatins.php','000020000');
	psref(45);
	ant('offDefMatins.php','000002000');
	psref(86);

	rubp('Isti tres Psalmi sequentes dic. Feria IV et Sabbato ad Nocturnum.','The three following psalms are said on Wednesday and Saturday at the Nocturn.',1);
	ant('offDefMatins.php','000000200');
	psref(95);
	ant('offDefMatins.php','000000020');
	psref(96);
	ant('offDefMatins.php','000000002');
	rubp('In Advent.','In Advent.',1);
	ant('offDefMatins.php','0000000002');
	psref(97);

	space('Body');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	vr('pater_silent_vr.php');

	head('I,III. Extra et post Adventum.','I,III. From Christmas until Advent.',-3);
	head('Absolutio.','The Absolution',-3);
	reading('bvm/precibus.php',0,10);
	vr('jube_domine.php');
	reading('bvm/nos_cum_prole.php',0,10);
	lc('ecclus24_11-13.php','L1');
	rm('offDef8.php',0,2,1,1)
?>
