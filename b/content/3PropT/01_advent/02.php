<?php 
	space();
	hidden('Advent',1);
	hidden('Advent II',2);
	head_temp(1,'Dominica II Adventus', 'Second Sunday of Advent');

	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SaV.php');
	lc('rom15_4.php');
	hymn('creator_alme_siderum.php',1);
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php');
	ant('PrTemp/advent/02/02m1.php','M');
	space();

	hour('L');
	ant('prTemp/advent/02/02.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/advent/02/02.php','02222');	
	lc('rom15_4.php');
	hymn('en_clara_vox_redarguit.php',1);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php');
	ant('PrTemp/advent/02/02b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/advent/02.php');
	space();

	ordref(0,5,0);

	hour('T');
	lc('rom15_4.php');
	brS('PrTemp/veni_ad_liberandum_nos_domine_deus_virtutum.php');
	vrS('PrTemp/timebunt_gentes_nomen_tuum_domine.php');
	space();

	hour('S');
	lc('rom15_5-6.php');
	brS('PrTemp/ostende_nobis_domine_misericordiam_tuam.php');
	vrS('PrTemp/memento_nostri_domine_in_beneplacito_populi_tui.php');
	space();

	hour('N');
	lc('rom15_13.php');
	brS('PrTemp/super_te_jerusalem_orietur_dominus.php');
	vrS('PrTemp/veni_domine_et_noli_tardare.php');
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV.php');
	lc('rom15_4.php');
	hymn('creator_alme_siderum.php',1);
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php');
	ant('PrTemp/advent/02/02m2.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/advent/02.php');
	space();
	
	ordref('OrAdvent',0,31);
	feria(2);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',0,'L');
	ant('PrTemp/advent/02/f2b.php','B');
	rubp('Oratio <snr>Excita</s>, ut supra.','Prayer <snr>Stir up</s>, as above.');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',0,'V');
	ant('PrTemp/advent/02/f2m.php','M');
	space();

	feria(3);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent/02/f3b.php','B');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('PrTemp/advent/02/f3m.php','M');
	space();

	feria(4);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent/02/f4b.php','B');
	rubrics('et_dicuntur_preces.php');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('PrTemp/advent/02/f4m.php','M');
	rubrics('et_dicuntur_preces.php');
	space();

	feria(5);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent/02/f5b.php','B');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('PrTemp/advent/02/f5m.php','M');
	space();

	feria(6);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent/02/f6b.php','B');
	rubrics('et_dicuntur_preces.php');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('PrTemp/advent/02/f6m.php','M');
	rubrics('et_dicuntur_preces.php');
	space();

	feria(7);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent/02/f7b.php','B');

?>

