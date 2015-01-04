<?php 
	space();
	hidden('Season of Septuagesima',1);
	hidden('Quinquagesima',2);
	head_temp(2,'Dominica in Quinquagesima', 'Quinquagesima Sunday');

	hour('1V');
	rubrics('ps/SaVant.php');	
	lc('1cor13_1.php');
	hymn('jam_sol_recedit_igneus.php',1);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php');
	ant('prTemp/septuagesima/50m1.php','M');
	space();

	hour('L');
	ant('prTemp/septuagesima/50L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/septuagesima/50L.php','02222');	
	lc('1cor13_1.php');
	hymn('aeterne_rerum_conditor.php',1);
	vrS('prTemp/domine_refugium_factus_es_nobis.php');
	ant('prTemp/septuagesima/50b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/septuagesima/50.php');
	space();

	ordref(0,6.1,0);

	hour('T');
	lc('1cor13_1.php');
	brS('Ord/inclina_cor_meum_deus_in_testimonia_tua.php');
	vrS('Ord/ego_dixi_domine_miserere_mei.php');
	space();

	hour('S');
	lc('1cor13_8-9.php');
	brS('Ord/in_aeternum_domine_permanet_verbum_tuum.php');
	vrS('Ord/dominus_regit_me_et_nihil_mihi_deerit.php');
	space();

	hour('N');
	lc('1cor13_13.php');
	brS('Ord/clamavi_in_toto_corde_meo_exaudi_me_domine.php');
	vrS('Ord/ab_occultis_meis_munda_me_domine.php');
	space();


	hour('2V');
	rubrics('ps/SuVant.php');	
	lc('1cor13_1.php');
	hymn('lucis_creator_optime.php',1);
	vrS('Ord/dirigatur_domine_oratio_mea.php');
	ant('prTemp/septuagesima/50m2.php','M');
	rubrics('head/Prayer.php');
	prayer('prTemp/septuagesima/50.php');
	space();

	feria(2,4);
	ant('prTemp/septuagesima/50f2m.php','M');
	space();

	feria(3,4);
	ant('prTemp/septuagesima/50f3m.php','M');
	space();

	rubp('Post Completorium feriæ III hebdomadæ Quinquagesimæ explicit tempus Septuagesimæ, et incipit tempus quadragesimale.', 'After Tuesday Compline of the week of Quinquagesima, the season of Septuagesima is ended, and the season of Lent begins.');

?>
