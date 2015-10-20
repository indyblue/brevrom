<?php

	space('Body');
	img('separator3.png',100);
	space('RubricH');
	bookmark('csM');
	head('Commune Unius Martyris',
		'Common of One Martyr',1,
		'Common of Saints','One Martyr');
	head('extra Tempus Paschale','outside Paschaltide',3);

	hour('1V');
	rubrics('cs/1Vespers.php');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('jas1_12.php','csMVlc','h','deus_tuorum_militum.php');
	vrS('gloria_et_honore_coronasti_eum_domine.php');
	ant('iste_sanctus_pro_lege_dei_sui.php','M');
	rubrics('cs/1Compline.php');

	space();
	hour('M');
	ant('regem_martyrum_dominum_venite_adoremus.php','I');
	rubrics('head/HymnVerse.php');
	hymn('deus_tuorum_militum.php');

	space();
	hour('L');
	ant('csML.php','20000');
	rubrics('ps/SuL1.php');
	ant('csML.php','02222');
	bookmark('csMLlc');
	lc('jas1_12.php');
	bookmark('csMLh');
	rubrics('head/HymnVerse.php');
	hymn('invicte_martyr_unicum.php',0);
	vrS('justus_ut_palma_florebit.php');
	ant('qui_odit_animam_suam_in_hoc_mundo.php','B');

	rubrics('head/Prayer.php',1);
	rubp('Pro Summo Pontifice Martyre, <snr>p. '. bkref('csPope') .'</s>', 'For a Martyr Pope, <snr>p. '. bkref('csPope') .'</s>');
	head('Pro Martyre Pontifice','For a Martyr Bishop',-4);
	prayer('csMartyrBishop1.php');
	head('Alia oratio','Alternate prayer',-4);
	prayer('csMartyrBishop2.php');
	head('Pro Martyre non Pont.','For a Martyr, not a Bp.',-4);
	prayer('csMartyr1.php');
	head('Alia oratio','Alternate prayer',-4);
	prayer('csMartyr2.php');

	space();
	bookmark('csMLH');
	hour('H');
	rubrics('cs/LittleHours.php');
	space();

	hour('T');
	lc('jas1_12.php');
	brS('gloria_et_honore_coronasti_eum_domine.php');
	vrS('posuisti_domine_super_caput_ejus.php');
	space();

	hour('S');
	lc('ecclus15_3.php');
	brS('posuisti_domine_super_caput_ejus.php');
	vrS('magna_est_gloria_ejus_in_salutari_tuo.php');
	space();

	hour('N');
	lc('ecclus39_6.php');
	brS('magna_est_gloria_ejus_in_salutari_tuo.php');
	vrS('justus_ut_palma_florebit.php');
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV115.php');
	bookmark('csMVlc');
	lc('jas1_12.php');
	bookmark('csMVh');
	rubrics('head/HymnVerse.php');
	hymn('deus_tuorum_militum.php',0);
	vrS('justus_ut_palma_florebit.php');
	ant('qui_vult_venire_post_me_abneget_semetipsum.php','M');
	rubrics('cs/Compline.php');

?>
