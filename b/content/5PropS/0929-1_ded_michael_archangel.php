<?php

	space();
	img('Saints/0929_dedication_st_michael.png',100);
	headSt(929,1,'in Dedicatione S. Michaelis Archangeli','the Dedication of St. Michael the Archangel');

	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('apoc1_1.php','ps0929Vlc','h','te_splendor_et_virtus_patris.php');
	vrS('prSanct/stetit_angelus_juxta_aram_templi.php');
	ant('prSanct/0929m1.php','M');
	rubrics('prSanct/ComplineSun.php');
	space();

	hour('L');
	ant('prSanct/0929L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prSanct/0929L.php','02222');
	lc('apoc1_1.php');
	rubrics('head/HymnVerse.php');
	hymn('christe_sanctorum_decus_angelorum.php');
	vrS('prSanct/stetit_angelus_juxta_aram_templi.php');
	ant('prSanct/0929b.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/0929.php');
	space();

	csref(0,3);
	hour('T');
	lc('apoc1_1.php');
	brS('prSanct/stetit_angelus_juxta_aram_templi.php');
	vrS('prSanct/ascendit_fumus_aromatum_in_conspectu_domini.php');
	space();

	hour('S');
	lc('apoc5_11.php');
	brS('prSanct/ascendit_fumus_aromatum_in_conspectu_domini.php');
	vrS('prSanct/in_conspectu_angelorum_psallam_tibi_deus_meus.php');
	space();

	hour('N');
	lc('apoc12_7.php');
	brS('prSanct/in_conspectu_angelorum_psallam_tibi_deus_meus.php');
	vrS('prSanct/adorate_deum_omnes_angeli_ejus.php');
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV137.php');
	bookmark('ps0929Vlc');
	lc('apoc1_1.php');
	rubrics('head/HymnVerse.php');
	hymn('te_splendor_et_virtus_patris.php');
	vrS('prSanct/in_conspectu_angelorum_psallam_tibi_deus_meus.php');
	ant('prSanct/0929m2.php','M');
	rubrics('head/Prayer.php');
	prayer('prSanct/0929.php');
	rubrics('prSanct/ComplineSun.php');

?>
