<?php 
	space();
	hidden('Advent',1);
	hidden('First Sunday',2);
	head_temp(1,'Dominica I Adventus', 'First Sunday of Advent');

	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SaV.php');
	lc('rom13_11.php');
	hymn('creator_alme_siderum.php',1);
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php');
	ant('prTemp/advent/01/01m1.php','M');
	space();

	hour('L');
	ant('prTemp/advent/01/01.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/advent/01/01.php','02222');	
	lc('rom13_11.php');
	hymn('en_clara_vox_redarguit.php',1);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php');
	ant('prTemp/advent/01/01b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/advent/01.php');
	space();

	ordref(0,5,0);

	hour('P');
	PrV('qui_venturus_es_in_mundum.php',2,
		array(', et ad absolutionem capituli lectio brevis <snr>Dómine, miserére</s>, quæ dicitur cotidie toto tempore Adventus, etiam in festis.', ', and at the end of the hour the brief lesson <snr>O Lord, have mercy</s>, which are said every day for the entire season of Advent, even on feasts.' ));
	space();

	hour('T');
	lc('rom13_11.php');
	brS('prTemp/veni_ad_liberandum_nos_domine_deus_virtutum.php');
	vrS('prTemp/timebunt_gentes_nomen_tuum_domine.php');
	space();

	hour('S');
	lc('rom13_12.php');
	brS('prTemp/ostende_nobis_domine_misericordiam_tuam.php');
	vrS('prTemp/memento_nostri_domine_in_beneplacito_populi_tui.php');
	space();

	hour('N');
	lc('rom13_13-14.php');
	brS('prTemp/super_te_jerusalem_orietur_dominus.php');
	vrS('prTemp/veni_domine_et_noli_tardare.php');
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV.php');
	lc('rom13_11.php');
	hymn('creator_alme_siderum.php',1);
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php');
	ant('prTemp/advent/01/01m2.php','M');
	rubrics('head/Prayer.php');
	prayer('prTemp/advent/01.php');
	space();
	
	ordref('OrAdvent',0,31);
	feria(2);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',0,'L');
	ant('prTemp/advent/01/f2b.php','B');
	rubp('Oratio <snr>Excita</s>, ut supra.','Prayer <snr>Show forth</s>, as above.');
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',0,'V');
	ant('prTemp/advent/01/f2m.php','M');
	space();

	feria(3);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('prTemp/advent/01/f3b.php','B');
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('prTemp/advent/01/f3m.php','M');
	space();

	feria(4);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('prTemp/advent/01/f4b.php','B');
	rubrics('et_dicuntur_preces.php');
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('prTemp/advent/01/f4m.php','M');
	rubrics('et_dicuntur_preces.php');
	space();

	feria(5);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('prTemp/advent/01/f5b.php','B');
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('prTemp/advent/01/f5m.php','M');
	space();

	feria(6);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('prTemp/advent/01/f6b.php','B');
	rubrics('et_dicuntur_preces.php');
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('prTemp/advent/01/f6m.php','M');
	rubrics('et_dicuntur_preces.php');
	space();

	feria(7);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('prTemp/advent/01/f7b.php','B');

?>

