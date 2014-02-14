<?php

	space('Body');
	img('separator3.tif',100);
	space('RubricH');
	bookmark('csHW');
	head('Commune non Virginum',
		'Common of Holy Women',1,
		'Common of Saints','Holy Women');


	hour('1V');
	rubrics('cs/1Vespers.php');
	rubrics('ps/antLauds.php');
	rubrics('ps/ComBVM.php');
	rubrics('asIn.php','csHWVlc','II Vespers','Little Chapter &amp; Hymn <snr>Fortem viríli péctore</s>');
	vrS('specie_tua_et_pulcritudine_tua.php',2);
	ant('simile_est_regnum_caelorum_homini_negotiatori.php','M',2);
	space('Line');
	head('Si fuerint plures Martyres non Virgines','If there are several Martyrs not Virgins',4);
	vrS('gloria_et_honore_coronasti_eum_domine.php',2);
	ant('istorum_est_enim_regnum_caelorum.php','M',2);
  	space('Line');
	rubrics('cs/1Compline.php');

	space();
	hour('L');
	ant('csHWL.php','20000');
	rubrics('ps/SuL1.php');
	ant('csHWL.php','02222');
	rubrics('asIn.php','csHWVlc','II Vespers','Little Chapter &amp; Hymn');
	vrS('diffusa_est_gratia_in_labiis_tuis.php',2);
	rubrics('head/Benedictus.php',2);
	ant('date_ei_de_fructu_manuum_suarum.php','B',2);

	rubrics('head/Prayer.php',1);
	head('Pro Martyre tantum','For one Martyr',4);
	prayer('csHolyWomanMartyr1.php');
	head('Pro nec Virg. nec Mart.','For a Holy Woman, not a Martyr',4);
	prayer('csHolyWoman1.php');
	space('Line');
	head('Si fuerint plures Martyres non Virgines','If there are several Martyrs not Virgins',4);
	vrS('gloria_et_honore_coronasti_eum_domine.php',2);
	ant('istorum_est_enim_regnum_caelorum.php','B',2);
	prayer('csHolyWomenMartyrs1.php');

	space();
	bookmark('csHWLH');
	rubrics('head/LittleHours.php');
	rubrics('cs/LittleHours.php');

	space();
	hour('T');
	head('Pro Martyre tantum','For one Martyr',4);
	lc('ecclus51_1.php');
	head('Pro nec Virg. nec Mart.','For a Holy Woman, not a Martyr',4);
	lc('prov31_10.php');
	rubrics('head/PTnot.php');
	brS('specie_tua_et_pulcritudine_tua.php');
	vrS('adjuvabit_eam_deus_vultu_suo.php');
	rubrics('head/PT.php');
	brS('specie_tua_et_pulcritudine_tua.php',1);
	vrS('adjuvabit_eam_deus_vultu_suo.php',0,1);

	space();
	hour('S');
	head('Pro Martyre tantum','For one Martyr',4);
	lc('ecclus51_4.php');
	head('Pro nec Virg. nec Mart.','For a Holy Woman, not a Martyr',4);
	lc('prov31_20.php');
	rubrics('head/PTnot.php');
	brS('adjuvabit_eam_deus_vultu_suo.php');
	vrS('elegit_eam_deus_et_praeelegit_eam.php');
	rubrics('head/PT.php');
	brS('adjuvabit_eam_deus_vultu_suo.php',1);
	vrS('elegit_eam_deus_et_praeelegit_eam.php',0,1);

	space();
	hour('N');
	head('Pro Martyre tantum','For one Martyr',4);
	lc('ecclus51_8.php');
	head('Pro nec Virg. nec Mart.','For a Holy Woman, not a Martyr',4);
	lc('prov31_29.php');
	rubrics('head/PTnot.php');
	brS('elegit_eam_deus_et_praeelegit_eam.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	rubrics('head/PT.php');
	brS('elegit_eam_deus_et_praeelegit_eam.php',1);
	vrS('diffusa_est_gratia_in_labiis_tuis.php',0,1);

	space();
	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/ComBVM.php');
	bookmark('csHWVlc');
	head('Pro Martyre tantum','For one Martyr',4);
	lc('ecclus51_1.php');
	head('Pro nec Virg. nec Mart.','For a Holy Woman, not a Martyr',4);
	lc('prov31_10.php');
	rubrics('head/HymnVerse.php');
	hymn('fortem_virili_pectore.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php',2);
	ant('manum_suam_aperuit_inopi.php','M',2);
	space('Line');
	head('Si fuerint plures Martyres non Virgines','If there are several Martyrs not Virgins',4);
	vrS('gloria_et_honore_coronasti_eum_domine.php',2);
	ant('istorum_est_enim_regnum_caelorum.php','M',2);
	space('Line');
	rubrics('cs/Compline.php');

?>
