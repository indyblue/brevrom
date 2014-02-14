<?php
	space('P181');
	space();
	img('separator3.tif',100);
	space('RubricH');
	bookmark('csAp');
	head('Commune Apostolorum',
		'Common of Apostles',1,
		'Common of Saints','Apostles');
	head('extra Tempus Paschale','outside Paschaltide',3);
	
	hour('1V');
	rubrics('cs/1Vespers.php');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('eph2_19.php','csApLlc','h','exsultet_orbis_gaudiis.php');
	vrS('in_omnem_terram_exivit_sonus_eorum.php');
	ant('tradent_enim_vos_in_conciliis.php','M');
	rubrics('cs/1Compline.php');

	space();
	hour('L');
	ant('csApL.php','20000');
	rubrics('ps/SuL1.php');
	ant('csApL.php','02222');
	bookmark('csApLlc');
	lc('eph2_19.php');
	rubrics('head/HymnVerse.php');
	hymn('exsultet_orbis_gaudiis.php',0);
	vrS('annuntiaverunt_opera_dei.php');
	ant('vos_qui_reliquistis_omnia.php','B');

	space();
	bookmark('PsComApLH');
	hour('H');
	rubrics('cs/LittleHours.php');

	space();
	hour('T');
	lc('eph2_19.php');
	brS('in_omnem_terram_exivit_sonus_eorum.php');
	vrS('constitues_eos_principes_super_omnem_terram.php');

	space();
	hour('S');
	lc('acts5_12.php');
	brS('constitues_eos_principes_super_omnem_terram.php');
	vrS('nimis_honorati_sunt_amici_tui_deus.php');

	space();
	hour('N');
	lc('acts5_41.php');
	brS('nimis_honorati_sunt_amici_tui_deus.php');
	vrS('annuntiaverunt_opera_dei.php');

	space();
	hour('2V');
	bookmark('PsComAp');
	ant('csApV.php','20000');
	psalm('109.php');
	space('Spacer');
	ant('csApV.php','12000');
	psalm('112.php');
	space('Spacer');
	ant('csApV.php','01200');
	psalm('115.php');
	space('Spacer');
	ant('csApV.php','00120');
	psalm('125.php');
	space('Spacer');
	ant('csApV.php','00012');
	psalm('138');
	space('Spacer');
	ant('csApV.php','00001');
	lc('eph2_19.php');
	rubrics('head/HymnVerse.php');
	hymn('exsultet_orbis_gaudiis.php',0);
	vrS('annuntiaverunt_opera_dei.php');
	ant('estote_fortes_in_bello.php','M');
	rubrics('cs/Compline.php');
?>
