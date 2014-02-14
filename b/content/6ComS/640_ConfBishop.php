<?php
	space();
	img('separator3.tif',100);
	space('RubricH');
  	bookmark('csCB');
	head('Commune Confessoris Pontificis',
		'Common of Bishop Confessor',1,
		'Common of Saints','Bishop Confessor');

	space();
	hour('1V');
	rubrics('cs/1Vespers.php');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	rubrics('asIn.php','csCBVlc','II Vespers','Little Chapter &amp; Hymn <snr>Iste Conféssor Dómini, coléntes</s>');
	vrS('amavit_eum_dominus_et_ornavit_eum.php',2);
	ant('sacerdos_et_pontifex_et_virtutum_optifex.php','M',2);
	head('Pro Doctore','For a Doctor',4);
	ant('csConfessorDoctorAnt.php','M',2);
	rubrics('cs/1Compline.php');

	space();
	bookmark('csCBL');
	hour('L');
	ant('csCBL.php','20000',2);
	rubrics('ps/SuL1.php');
	ant('csCBL.php','02222',2);
	bookmark('csCBLlc');
	lc('ecclus44_16.php');
	rubrics('head/HymnVerse.php');
	hymn('jesu_redemptor_omnium_perpes.php');
	vrS('justum_deduxit_dominus_per_vias_rectas.php',2);
	ant('euge_serve_bone_et_fidelis.php','B',2);
	rubrics('head/Prayer.php',1);
	rubrics('asIn.php','csPope','Common of Supreme Pontiff','For a Pope, prayer');
	head('Pro Confessore Pontifice','For a Confessor Bishop',4);
	prayer('csConfessorBishop1.php');
	head('Alia oratio','Alternate prayer',4);
	prayer('csConfessorBishop2.php');
	head('Pro Doctore Pontifice','For a Doctor Bishop',4);
	prayer('csConfessorDoctor.php');

	space();
	bookmark('csCBLH');
	rubrics('head/LittleHours.php');
	rubrics('cs/LittleHours.php');

	space();
	hour('T');
	lc('ecclus44_16.php');
	rubrics('head/PTnot.php');
	brS('amavit_eum_dominus_et_ornavit_eum.php');
	vrS('elegit_eum_dominus_sacerdotem_sibi.php');
	rubrics('head/PT.php');
	brS('amavit_eum_dominus_et_ornavit_eum.php',1);
	vrS('elegit_eum_dominus_sacerdotem_sibi.php',0,1);

	space();
	hour('S');
	lc('ecclus44_20.php');
	rubrics('head/PTnot.php');
	brS('elegit_eum_dominus_sacerdotem_sibi.php');
	vrS('tu_es_sacerdos_in_aeternum.php');
	rubrics('head/PT.php');
	brS('elegit_eum_dominus_sacerdotem_sibi.php',1);
	vrS('tu_es_sacerdos_in_aeternum.php',0,1);

	space();
	hour('N');
	lc('ecclus45_19.php');
	rubrics('head/PTnot.php');
	brS('tu_es_sacerdos_in_aeternum.php');
	vrS('justum_deduxit_dominus_per_vias_rectas.php');
	rubrics('head/PT.php');
	brS('tu_es_sacerdos_in_aeternum.php',1);
	vrS('justum_deduxit_dominus_per_vias_rectas.php',0,1);

	space();
	bookmark('csCBV');
	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV131.php');
	bookmark('csCBVlc');
	lc('ecclus44_16.php');
	rubrics('head/HymnVerse.php');
	hymn('iste_confessor_domini_colentes.php');
	vrS('justum_deduxit_dominus_per_vias_rectas.php',2);
	ant('amavit_eum_dominus_et_ornavit_eum.php','M',2);
	head('Pro solis Summis Pontificibus','For a sole Supreme Pontiff',4);
	ant('dum_esset_summus_pontifex.php','M',2);
	head('Pro Doctore','For a Doctor',4);
  	ant('csConfessorDoctorAnt.php','M',2);
	rubrics('cs/Compline.php');
?>
