<?php
	bookmark('csBVM');

	space('Body');
	img('Saints/0908_nativity_of_bvm.png',100);
	space('RubricH');
	head('Commune Festorum Beatæ Mariæ Virginis',
		'Common of Feasts of the Bl. Virgin Mary',1,
		'Common of Saints','Bl. Virgin Mary');

	hour('1V');
	rubrics('cs/1Vespers.php');
	rubrics('prSanct/all2Vespers.php');
	vrS('dignare_me_laudare_te_virgo_sacrata.php',2);
	ant('sancta_maria_succurre_miseris.php','M',2);
	rubrics('cs/1Compline.php');

		$matins = $_GET['matins'];
if($matins) {
space();
	hour('M');
	ant('sancta_maria_dei_genetrix.php','I');
	rubrics('head/HymnVerse.php');
	hymn('quem_terra_pontus_sidera.php');
}
	hour('L');
	ant('csBVML.php','20000',2);
	rubrics('ps/SuL1.php');
	ant('csBVML.php','02222',2);
	bookmark('csBVMLlc');
	lc('ecclus24_14.php');
	rubrics('head/HymnVerse.php');
	hymn('o_gloriosa_virginum.php',0);
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
