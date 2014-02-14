<?php

	img('Saints/1101_all_saints.tif',100);
	space('RubricH');
	headSt(1101,1,'in Festo Omnium Sanctorum','Feast of All Saints');

	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('apoc7_2.php','ps1101Vlc','h','placare_christe_servulis.php');
	vrS('prSanct/laetamini_in_domino_et_exultate_justi.php');
	ant('prSanct/1101m1.php','M');
	rubrics('prSanct/ComplineSun.php');
	space();

	hour('L');
	ant('prSanct/1101L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prSanct/1101L.php','02222');
	lc('apoc7_2.php');
	rubrics('head/HymnVerse.php');
	hymn('salutis_aeternae_dator.php');
	vrS('prSanct/exultabunt_sancti_in_gloria.php');
	ant('prSanct/1101b.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/1101.php');
	space();

	csref(0,3);
	hour('T');
	lc('apoc7_2.php');
	brS('prSanct/laetamini_in_domino_et_exultate_justi.php');
	vrS('prSanct/exultent_justi_in_conspectu_dei.php');
	space();

	hour('S');
	lc('apoc7_9.php');
	brS('prSanct/exultent_justi_in_conspectu_dei.php');
	vrS('prSanct/justi_autem_in_perpetuum_vivent.php');
	space();

	hour('N');
	lc('apoc7_12.php');
	brS('prSanct/justi_autem_in_perpetuum_vivent.php');
	vrS('prSanct/exultabunt_sancti_in_gloria.php');
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV115.php');
	bookmark('ps1101Vlc');
	lc('apoc7_2.php');
	rubrics('head/HymnVerse.php');
	hymn('placare_christe_servulis.php');
	vrS('prSanct/exultabunt_sancti_in_gloria.php');
	ant('prSanct/1101m2.php','M');
	rubrics('head/Prayer.php');
	prayer('prSanct/1101.php');
	rubrics('prSanct/ComplineSun.php');
?>
