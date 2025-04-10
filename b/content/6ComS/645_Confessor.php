<?php
	bookmark('csC');
	space();
	img('separator3.png',100);
	space('RubricH');
	head('Commune Confessoris non Pontificis',
		'Common of Confessors',1,
		'Common of Saints','Confessors');


	hour('1V');
	rubrics('cs/1Vespers.php');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV.php');
	lc('ecclus31_8.php','csCVlc','h','iste_confessor_domini_colentes.php');
	vrS('amavit_eum_dominus_et_ornavit_eum.php',2);
	ant('similabo_eum_viro_sapienti.php','M',2);
	rubrics('cs/1Compline.php');

		$matins = $_GET['matins'];
if($matins) {
space();
	hour('M');
	ant('regem_confessorum_dominum_venite_adoremus.php','I');
	rubrics('head/HymnVerse.php');
	hymn('iste_confessor_domini_colentes.php');
}
	space();
	hour('L');
	ant('csCL.php','20000',2);
	rubrics('ps/SuL1.php');
	ant('csCL.php','02222',2);
	lc('ecclus31_8.php');
	rubrics('head/HymnVerse.php');
	hymn('jesu_corona_celsior.php');
	vrS('justum_deduxit_dominus_per_vias_rectas.php',2);
	ant('euge_serve_bone_et_fidelis-tui.php','B',2);
	rubrics('head/Prayer.php',1);
	prayer('csConfessor1.php');
	head('Alia oratio','Alternate prayer',-4);
	prayer('csConfessor2.php');
	head('Pro Doctore non Pontifice','For a Doctor, not a Bishop',-4);
	prayer('csConfessorDoctor.php');
  	head('Pro Abbate','For an Abbot',-4);
	prayer('csConfessorAbbot.php');
	space();

	bookmark('csCLH');
	hour('H');
	rubrics('cs/LittleHours.php');
	space();

	hour('T');
	lc('ecclus31_8.php');
	rubrics('head/PTnot.php');
	brS('amavit_eum_dominus_et_ornavit_eum.php');
	vrS('os_justi_meditabitur_sapientiam.php');
	rubrics('head/PT.php');
	brS('amavit_eum_dominus_et_ornavit_eum.php',1);
	vrS('os_justi_meditabitur_sapientiam.php',0,1);
	space();

	bookmark('csCS');
	hour('S');
	lc('ecclus39_6.php');
	rubrics('head/PTnot.php');
	brS('os_justi_meditabitur_sapientiam.php');
	vrS('lex_dei_ejus_in_corde_ipsius.php');
	rubrics('head/PT.php');
	brS('os_justi_meditabitur_sapientiam.php',1);
	vrS('lex_dei_ejus_in_corde_ipsius.php',0,1);
	space();

	hour('N');
	lc('wis10_10.php');
	rubrics('head/PTnot.php');
	brS('lex_dei_ejus_in_corde_ipsius.php');
	vrS('justum_deduxit_dominus_per_vias_rectas.php');
	rubrics('head/PT.php');
	brS('lex_dei_ejus_in_corde_ipsius.php',1);
	vrS('justum_deduxit_dominus_per_vias_rectas.php',0,1);
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	bookmark('csCVlc');
	lc('ecclus31_8.php');
	rubrics('head/HymnVerse.php');
	hymn('iste_confessor_domini_colentes.php');
	vrS('justum_deduxit_dominus_per_vias_rectas.php',2);
	ant('hic_vir_despiciens_mundum_et_terrena_triumphans.php','M',2);
	head('Pro Doctore','For a Doctor',-4);
	ant('csConfessorDoctorAnt.php','M',2);
	rubrics('cs/Compline.php');
?>
