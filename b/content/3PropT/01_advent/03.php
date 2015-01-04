<?php 
	space();
	hidden('Advent',1);
	hidden('Third Sunday',2);
	head_temp(1,'Dominica III Adventus', 'Third Sunday of Advent');

	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SaV.php');
	lc('phil4_4-5.php');
	hymn('creator_alme_siderum.php',1);
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php');
	ant('prTemp/advent/03/03m1.php','M');
	space();

	hour('L');
	ant('prTemp/advent/03/03.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/advent/03/03.php','02222');	
	lc('phil4_4-5.php');
	hymn('en_clara_vox_redarguit.php',1);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php');
	ant('prTemp/advent/03/03b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/advent/03.php');
	space();

	ordref(0,5,0);

	hour('T');
	lc('phil4_4-5.php');
	brS('prTemp/veni_ad_liberandum_nos_domine_deus_virtutum.php');
	vrS('prTemp/timebunt_gentes_nomen_tuum_domine.php');
	space();

	hour('S');
	lc('phil4_6.php');
	brS('prTemp/ostende_nobis_domine_misericordiam_tuam.php');
	vrS('prTemp/memento_nostri_domine_in_beneplacito_populi_tui.php');
	space();

	hour('N');
	lc('phil4_7.php');
	brS('prTemp/super_te_jerusalem_orietur_dominus.php');
	vrS('prTemp/veni_domine_et_noli_tardare.php');
	space();

	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV.php');
	lc('phil4_4-5.php');
	hymn('creator_alme_siderum.php',1);
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php');
	ant('prTemp/advent/03/03m2.php','M');
	rubp('Ant. <snr>Beáta es</s> prætermittitur, si hodie ejus loco ponenda sit una ex antiphonis majoribus ut infra: quibus semper cedunt antiphonæ propriæ aliis diebus ad <snr>Magníficat</s> assignatæ.', 'Ant. <snr>Blessed art thou</s> is omitted, if today there is to be said one of the Great Antiphons given below: to which the proper Antiphons assigned for the <snr>Magnificat</s> on other days give place in like manner.');
	rubrics('head/Prayer.php');
	prayer('prTemp/advent/03.php');

	require '03_major_ant.php';
	space();

	hidden('Advent',1);
	hidden('Third Week',2);
	ordref('OrAdvent',0,31);
	feria(2,23);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',0,'L');
	ant('prTemp/advent/03/f2b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/advent/03.php');
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',0,'V');
	ant('prTemp/advent/03/f2m.php','M');
	rubp('Nisi dicenda sit ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Unless ant. <snr>O, p. '.bkref('AdventOAnt').'</s>, is said instead.');
	space();

	feria(3,23);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('prTemp/advent/03/f3b.php','B');
	rubp('Oratio <snr>Aurem</s>, ut supra.','Prayer <snr>Bend down</s>, as above.');
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('prTemp/advent/03/f3m.php','M');
	rubp('Nisi dicenda sit ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Unless ant. <snr>O, p. '.bkref('AdventOAnt').'</s>, is said instead.');
	space();

	feria(4,12);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('prTemp/advent/03/f4b.php','B');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('prTemp/advent/03e4.php');
	rubp('Et dicitur ad omnes Horas, etiam ad Vesperas.', 'And this is said at all the Hours, even at Vespers.');
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('prTemp/advent/03/f4m.php','M');
	rubp('Nisi dicenda sit ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Unless ant. <snr>O, p. '.bkref('AdventOAnt').'</s>, is said instead.');
	rubrics('et_dicuntur_preces.php');
	space();

	feria(5,23);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('prTemp/advent/03/f5b.php','B');
	rubp('Nisi hæc feria occurrat die 21 decembris, quia tunc, præcedenti antiphona prætermissa, dicitur ant. <snr>Nolíte timére, p. '.bkref('Advent21b').'</s>. Quod etiam servatur in sequenti feria vel dominica, quæ eadem die 21 occurrerit.', 'Unless it is December 21st, in which case, in place of the above antiphon is said the ant. <snr>Fear not, p. '.bkref('Advent21b').'</s>. This applies to any of the following ferias or the Sunday which may fall on the 21st.');
	rubp('Oratio <snr>Aurem</s>, ut supra.','Prayer <snr>Bend down</s>, as above.');
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('prTemp/advent/03/f5m.php','M');
	rubp('Nisi dicenda sit ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Unless ant. <snr>O, p. '.bkref('AdventOAnt').'</s>, is said instead.');
	space();

	feria(6,12);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('prTemp/advent/03/f6b.php','B');
	rubp('Nisi dicenda sit, die 21 decembris, ant. <snr>Nolíte timére, p. '.bkref('Advent21b').'</s>.', 'Unless it is December 21st, in which case ant. <snr>Fear not, p. '.bkref('Advent21b').'</s>, is to be said.');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('prTemp/advent/03e6.php');
	rubp('Et dicitur ad omnes Horas, etiam ad Vesperas.', 'And this is said at all the Hours, even at Vespers.');
	vrS('prTemp/rorate_caeli_desuper_et_nubes_pluant_justum.php',3,'V');
	ant('prTemp/advent/03/f6m.php','M');
	rubp('Nisi dicenda sit ant. <snr>O, p. '.bkref('AdventOAnt').'</s>.', 'Unless ant. <snr>O, p. '.bkref('AdventOAnt').'</s>, is said instead.');
	rubrics('et_dicuntur_preces.php');
	space();

	feria(7,12);
	vrS('prTemp/vox_clamantis_in_deserto_parate_viam_domini.php',3,'L');
	ant('prTemp/advent/03/f7b.php','B');
	rubp('Nisi dicenda sit, die 21 decembris, ant. <snr>Nolíte timére, p. '.bkref('Advent21b').'</s>.', 'Unless it is December 21st, in which case ant. <snr>Fear not, p. '.bkref('Advent21b').'</s>, is to be said.');
	rubp('Nisi hæc fuerit dies ante vigiliam Nativitatis, quia tunc, præcedenti antiphona prætermissa, dicitur ant. <snr>Ecce compléta, p. '.bkref('Advent23b').'</s>. Quod etiam servatur (si idem contingat) in sequentibus diebus.', 'Unless it is December 23st, in which case, in place of the above antiphon is said the ant. <snr>Lo! all things, p. '.bkref('Advent23b').'</s>. This applies to any of the following days which fall on the 23rd.');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('prTemp/advent/03e7.php');
	rubp('Et dicitur usque ad Nonam inclusive.', 'And this is said until None, inclusive.');

?>



