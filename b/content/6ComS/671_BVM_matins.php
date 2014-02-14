<?php
	$long = $_GET['long'];

	space('Body');
	bookmark('csBVMM');
	hour('M');
	vrS('Ord/domine_labia_mea_aperies.php');
	vr('deus_in_adjutorium.php');
	ant('sancta_maria_dei_genetrix.php');
	if($long==0)
		psref(94);
	else
		psalm('094.php');
	rubrics('head/HymnVerse.php');
	hymn('quem_terra_pontus_sidera.php');
	space('Body');
	ant('csBVML.php','20000');

	// "&& false" disables "short" version
	if($long==0 && false) {
		bookmark('csBVMMn1');
		ant('opBVMm.php','N00000000');
		psref(8);
		ant('opBVMm.php','020000000');
		psref(18,2);
		ant('opBVMm.php','002000000');
		psref(23);
	
		bookmark('csBVMMn2');
		ant('opBVMm.php','000N00000');
		psref(44,2);
		ant('opBVMm.php','000020000');
		psref(45);
		ant('opBVMm.php','000002000');
		psref(86);
	
		bookmark('csBVMMn3');
		ant('opBVMm.php','000000N00');
		psref(95);
		ant('opBVMm.php','000000020');
		psref(96);
		ant('opBVMm.php','000000002');
		psref(97);
	} else {
		bookmark('csBVMMn1');
		ant('opBVMm.php','N00000000');
		psalm(8);
		space('Spacer');
		ant('opBVMm.php','120000000');
		psalm(18);
		space('Spacer');
		ant('opBVMm.php','012000000');
		psalm(23);
		space('Spacer');
	
		bookmark('csBVMMn2');
		ant('opBVMm.php','001N00000');
		psalm(44);
		space('Spacer');
		ant('opBVMm.php','000120000');
		psalm(45);
		space('Spacer');
		ant('opBVMm.php','000012000');
		psalm(86);
		space('Spacer');
	
		bookmark('csBVMMn3');
		ant('opBVMm.php','000001N00');
		psalm(95);
		space('Spacer');
		ant('opBVMm.php','000000120');
		psalm(96);
		space('Spacer');
		ant('opBVMm.php','000000012');
		rubp('In Adventu:','In Advent:');
		ant('opBVMm.php','0000000002');
		psalm(97);
		space('Spacer');
		ant('opBVMm.php','000000001');
		rubp('In Adventu:','In Advent:');
		ant('opBVMm.php','0000000001');
	}

	
	space();


	rubrics('cs/1Vespers.php');
	rubrics('asIn.php','PsComBVM','II Vespers','All');
	rubp('','Except as follows:');
	vrS('dignare_me_laudare_te_virgo_sacrata.php',2);
	ant('sancta_maria_succurre_miseris.php','M',2);
	rubrics('cs/1Compline.php');

	hour('L');
	ant('csBVML.php','20000',2);
	rubrics('ps/SuL1.php');
	ant('csBVML.php','02222',2);
	bookmark('csBVMLlc');
	lc('ecclus24_14.php');
	rubrics('head/HymnVerse.php');
	bookmark('o_gloriosa_virginum');
	hymn('o_gloriosa_virginum.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php',2);
	ant('beata_es_maria_quae_credidisti.php','B',2);
	rubrics('head/Prayer.php',1);
	prayer('csBVM1.php');
	space();

	bookmark('csBVMLH');
	hour('H');
	rubrics('cs/LittleHours.php');
	PrV('qui_natus_es_de_maria_virgine.php');
	space();

	hour('T');
	lc('ecclus24_14.php');
	rubrics('head/PTnot.php');
	brS('specie_tua_et_pulcritudine_tua.php');
	vrS('adjuvabit_eam_deus_vultu_suo.php');
	rubrics('head/PT.php');
	brS('specie_tua_et_pulcritudine_tua.php',1);
	vrS('adjuvabit_eam_deus_vultu_suo.php',0,1);
	space();

	bookmark('csBVMS');
	hour('S');
	lc('ecclus24_15-16.php');
	rubrics('head/PTnot.php');
	brS('adjuvabit_eam_deus_vultu_suo.php');
	vrS('elegit_eam_deus_et_praeelegit_eam.php');
	rubrics('head/PT.php');
	brS('adjuvabit_eam_deus_vultu_suo.php',1);
	vrS('elegit_eam_deus_et_praeelegit_eam.php',0,1);
	space();

	hour('N');
	lc('ecclus24_19.php');
	rubrics('head/PTnot.php');
	brS('elegit_eam_deus_et_praeelegit_eam.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	rubrics('head/PT.php');
	brS('elegit_eam_deus_et_praeelegit_eam.php',1);
	vrS('diffusa_est_gratia_in_labiis_tuis.php',0,1);
	space();

	hour('V');
	bookmark('PsComBVM');
	ant('csBVML.php','20000');
	psalm('109.php');
	space('Spacer');
	ant('csBVML.php','12000');
	psalm('112.php');
	space('Spacer');
	ant('csBVML.php','01200');
	psalm('121.php');
	space('Spacer');
	ant('csBVML.php','00120');
	psalm('126.php');
	space('Spacer');
	ant('csBVML.php','00012');
	psalm('147.php');
	space('Spacer');
	ant('csBVML.php','00002');
	bookmark('csBVMVlc');
	lc('ecclus24_14.php');
	rubrics('head/HymnVerse.php');
	hymn('ave_maris_stella.php',0);
	vrS('dignare_me_laudare_te_virgo_sacrata.php',2);
	ant('beatam_me_dicent_omnes_generationes.php','M',2);
	space('Line');
	rubrics('cs/if1Vespers.php');
	vrS('dignare_me_laudare_te_virgo_sacrata.php',2);
	ant('sancta_maria_succurre_miseris.php','M',2);
	space('Line');
	rubrics('cs/Compline.php');

?>
