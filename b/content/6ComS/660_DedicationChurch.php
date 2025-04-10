<?php
	bookmark('csChurch');

	space('Body');
	img('CS/01_dedication_of_church.png',100);
	space('RubricH');
	head('Commune Dedicationis Ecclesiæ',
		'Common of the Dedication of a Church',1,
		'Common of Saints','Dedication of a Church');

	hour('1V');
	rubrics('cs/1Vespers.php');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV147.php');
	lc('apoc21_2.php','csChurchVlc','h','caelestis_urbs_jerusalem.php');
	vrS('haec_est_domus_domini_firmiter_aedificata.php',2);
	ant('sanctificavit_dominus_tabernaculum_suum.php','M',2);
	rubrics('cs/1Compline.php');

		$matins = $_GET['matins'];
if($matins) {
space();
	hour('M');
	ant('domum_dei_decet_sanctitudo_sponsum_ejus_christum_adoremus_in_ea.php','I');
	rubrics('head/HymnVerse.php');
	hymn('caelestis_urbs_jerusalem.php');
}
	space();
	hour('L');
	ant('csChurchL.php','20000',2);
	rubrics('ps/SuL1.php');
	ant('csChurchL.php','02222',2);
	lc('apoc21_2.php');
	rubrics('head/HymnVerse.php');
	hymn('alto_ex_olympi_vertice.php');
	vrS('haec_est_domus_domini_firmiter_aedificata.php',2);
	ant('zachaee_festinans_descende.php','B',2);

	rubrics('head/Prayer.php',1);
	head('In anniversario Dedicationis ecclesiæ','On the anniversary of the Dedication of a church',-4);
	prayer('csChurchAnniversary1.php');
	head('In ipso die Dedicationis ecclesiæ','On actual day of the Dedication of a church',-4);
	prayer('csChurchDedication1.php');

	space();
	bookmark('csChurchLH');
	hour('H');
	rubrics('cs/LittleHours.php');

	space();
	hour('T');
	lc('apoc21_2.php');
	rubrics('head/PTnot.php');
	brS('domum_tuam_domine_decet_sanctitudo.php');
	vrS('locus_iste_sanctus_est_in_quo_orat_sacerdos.php');
	rubrics('head/PT.php');
	brS('domum_tuam_domine_decet_sanctitudo.php',1);
	vrS('locus_iste_sanctus_est_in_quo_orat_sacerdos.php',0,1);

	space();
	hour('S');
	lc('apoc21_3.php');
	rubrics('head/PTnot.php');
	brS('locus_iste_sanctus_est_in_quo_orat_sacerdos.php');
	vrS('haec_est_domus_domini_firmiter_aedificata.php');
	rubrics('head/PT.php');
	brS('locus_iste_sanctus_est_in_quo_orat_sacerdos.php',1);
	vrS('haec_est_domus_domini_firmiter_aedificata.php',0,1);

	space();
	hour('N');
	lc('apoc21_4.php');
	rubrics('head/PTnot.php');
	brS('haec_est_domus_domini_firmiter_aedificata.php');
	vrS('bene_fundata_est_domus_domini.php');
	rubrics('head/PT.php');
	brS('haec_est_domus_domini_firmiter_aedificata.php',1);
	vrS('bene_fundata_est_domus_domini.php',0,1);

	space();
	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV147.php');
	bookmark('csChurchVlc');
	lc('apoc21_2.php');
	rubrics('head/HymnVerse.php');
	hymn('caelestis_urbs_jerusalem.php');
	vrS('domum_tuam_domine_decet_sanctitudo.php',2);
	ant('o_quam_metuendus_est_locus_iste.php','M',2);
	rubrics('cs/Compline.php');

?>
