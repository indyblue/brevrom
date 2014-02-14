<?php 

	space('Body');
	img('separator3.png',100);
	space('RubricH');
	bookmark('csMm');
	head('Commune Plurimorum Martyrum',
		'Common of Several Martyrs',1,
		'Common of Saints','Several Martyrs');
	head('extra Tempus Paschale','outside Paschaltide',3);

	hour('1V');
	rubrics('cs/1Vespers.php');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('wis3_1.php','csMmVlc','h','sanctorum_meritis_inclyta_gaudia.php');
	vrS('laetamini_in_domino_et_exultate_justi.php');
	rubrics('head/Magnificat.php');
	ant('istorum_est_enim_regnum_caelorum.php','M');
	rubrics('cs/1Compline.php');

	space();
	hour('L');
	rubrics('head/Psalms.php');
	ant('csMmL.php','20000');
	rubrics('ps/SuL1.php');
	ant('csMmL.php','02222');
	bookmark('csMmLlc');
	lc('wis3_1.php');
	bookmark('csMmLh');
	rubrics('head/HymnVerse.php');
	hymn('rex_gloriose_martyrum.php');
	vrS('exultabunt_sancti_in_gloria.php');
	ant('vestri_capilli_capitis_omnes_numerati_sunt.php','B');

	rubrics('head/Prayer.php',1);
	rubrics('asIn.php','csPope','Common of Supreme Pontiff','For Several Martyr Popes, prayer');
	space();
	head('Pro pluribus Martyribus Pontificibus','For several Martyrs Bishops',-4);
	prayer('csMartyrsBishops1.php');
	head('Si non fuerint Pontifices','If they are not Bishops',-4);
	prayer('csMartyrs1.php');
	head('Alia oratio','Alternate prayer',-4);
	prayer('csMartyrs2.php');

	space();
	bookmark('csMmLH');
	hour('H');
	rubrics('cs/LittleHours.php');

	space();
	hour('T');
	lc('wis3_1.php');
	brS('laetamini_in_domino_et_exultate_justi.php');
	vrS('exsultent_justi_in_conspectu_dei.php');

	space();
	hour('S');
	lc('wis10_17.php');
	brS('exsultent_justi_in_conspectu_dei.php');
	vrS('justi_autem_in_perpetuum_vivent.php');

	space();
	hour('N');
	lc('wis3_7.php');
	brS('justi_autem_in_perpetuum_vivent.php');
	vrS('exultabunt_sancti_in_gloria.php');

	space();
	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV115.php');
	bookmark('csMmVlc');
	lc('wis3_1.php');
	rubrics('head/HymnVerse.php');
	hymn('sanctorum_meritis_inclyta_gaudia.php');
	vrS('exultabunt_sancti_in_gloria.php');
	ant('gaudent_in_caelis_animae_sanctorum.php','M');
	rubrics('cs/Compline.php');

?>
