<?php 
	space();
	hidden('Advent',1);
	hidden('Fourth Sunday',2);
	head_temp(1,'Dominica IV Adventus', 'Fourth Sunday of Advent');

	rubp('Si in dominica IV Adventus venerit vigilia Nativitatis Domini, Officium fit ut infra, ad vigiliam, ordinatur <snr>'.bkref('Advent24').'</s>.', 'If the fourth Sunday of Advent falls on the vigil of the Nativity of the Lord, the Office is said as directed at the vigil, <snr>p. '.bkref('Advent24').'</s>.');
	space();
	bookmark('Advent4V1');
	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SaV.php');
	lc('1cor4_1-2.php');
	hymn('creator_alme_siderum.php',1);
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php');
	rubp('Ant. ad Magnif. una ex majoribus <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Magnif. Ant. from the Great Ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.');
	space();

	hour('L');
	ant('prTemp/advent/04/04.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/advent/04/04.php','02222');	
	lc('phil4_4-5.php');
	hymn('en_clara_vox_redarguit.php',1);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php');
	ant('PrTemp/advent/04/04b.php','B');
	rubp('Nisi dicenda sit, die 21 decembris:', 'But on December 21, the following is said:');
	ant('prTemp/advent/21b.php','B');
	rubp('vel, die 23 decembris:', 'or, on December 23rd:');
	ant('prTemp/advent/23b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/advent/04.php');
	space();

	ordref(0,5,0);

	hour('T');
	lc('1cor4_1-2.php');
	brS('PrTemp/veni_ad_liberandum_nos_domine_deus_virtutum.php');
	vrS('PrTemp/timebunt_gentes_nomen_tuum_domine.php');
	space();

	hour('S');
	lc('1cor4_3.php');
	brS('PrTemp/ostende_nobis_domine_misericordiam_tuam.php');
	vrS('PrTemp/memento_nostri_domine_in_beneplacito_populi_tui.php');
	space();

	hour('N');
	lc('1cor4_5.php');
	brS('PrTemp/super_te_jerusalem_orietur_dominus.php');
	vrS('PrTemp/veni_domine_et_noli_tardare.php');
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV.php');
	lc('1cor4_1-2.php');
	hymn('creator_alme_siderum.php',1);
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php');
	rubp('Ant. ad Magnif. una ex majoribus <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Magnif. Ant. from the Great Ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.');
	rubrics('head/Prayer.php');
	prayer('PrTemp/advent/04.php');
	space();

	ordref('OrAdvent',0,31);
	feria(2,2);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',0,'L');
	ant('PrTemp/advent/03/f2b.php','B');
	rubp('Nisi dicenda sit, die 21 decembris:', 'But on December 21, the following is said:');
	ant('prTemp/advent/21b.php','B');
	rubp('vel, die 23 decembris:', 'or, on December 23rd:');
	ant('prTemp/advent/23b.php','B');

	rubp('Oratio <snr>Excita</s>, ut supra.','Prayer <snr>Show forth</s>, as above.');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',0,'V');
	rubp('Ant. ad Magnif. una ex majoribus <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Magnif. Ant. from the Great Ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.');
	space();

	feria(3,2);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent/03/f3b.php','B');
	rubp('Nisi dicenda sit, die 21 decembris, <snr>Nolíte timére</s>, vel die 23 decembris, <snr>Ecce compléta</s>, ut supra.', 'But on December 21, is said <snr>Fear not</s>, or on December 23, <snr>Lo! all things</s>, as above.');
	rubp('vel, die 23 decembris:', 'or, on December 23rd:');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	rubp('Ant. ad Magnif. una ex majoribus <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Magnif. Ant. from the Great Ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.');
	space();

	feria(4,2);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent/03/f4b.php','B');
	rubp('Nisi dicenda sit, die 21 decembris, <snr>Nolíte timére</s>, vel die 23 decembris, <snr>Ecce compléta</s>, ut supra.', 'But on December 21, is said <snr>Fear not</s>, or on December 23, <snr>Lo! all things</s>, as above.');
	rubrics('et_dicuntur_preces.php');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	rubp('Ant. ad Magnif. una ex majoribus <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Magnif. Ant. from the Great Ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.');
	rubrics('et_dicuntur_preces.php');
	space();

	feria(5,2);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('PrTemp/advent/03/f5b.php','B');
	rubp('Nisi dicenda sit, 23 decembris, <snr>Ecce compléta</s>, ut supra.', 'But on December 23, <snr>Lo! all things</s>, as above.');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	rubp('Ant. ad Magnif. una ex majoribus <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Magnif. Ant. from the Great Ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.');
	space();

	feria(6,12);
	vrS('PrTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('prTemp/advent/23b.php','B');
	rubrics('et_dicuntur_preces.php');
	vrS('PrTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	rubp('Ant. ad Magnif. una ex majoribus <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Magnif. Ant. from the Great Ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.');
	rubrics('et_dicuntur_preces.php');


?>



