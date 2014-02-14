<?php
	space();
	img('Saints/0908_nativity_of_bvm.tif',100);
	headSt(531,12,'B. Mariæ Virg. Reginæ',
		'Bl. Virgin Mary, Queen');
	rubrics('prSanct/all_from.php','csBVM');

	rubrics('head/Lauds.php');
	lc('ecclus24_5_7.php');
	hymn('o_gloriosa_virginum.php',1);
	vrS('prSanct/maria_virgo_caelos_ascendit.php',2);
	ant('prSanct/0531b.php','B',2);
	rubrics('head/Prayer.php');
	prayer('prSanct/0531.php');
	rubp('Et fit com. S. Petronillæ Virg., nisi facienda sit com. vigiliæ Ascensionis forte occurr.; tunc enim com. S. Petronillæ omittitur.',
		'And commem. is made of St. Petronilla, Virg., unless a commem. is made of the vigil of the Ascension, which perhaps could occur; in that case the commem. of St. Petronilla is ommitted.');
	ant('simile_est_regnum_caelorum_homini_negotiatori.php',1,2);
	vrS('diffusa_est_gratia_in_labiis_tuis.php',2);
	rubrics('oremus.php');
	prayer('csVirgin1.php','Petroníllæ','Petronilla'); 

	space();
	rubrics('head/LittleHours.php');
	rubrics('ps/Feria.php');
	PrV('qui_natus_es_de_maria_virgine.php');

	rubrics('head/Terce.php');
	lc('ecclus24_5_7.php');
	rubrics('head/PTnot.php');
	brS('prSanct/salve_regina_misericordiae.php');
	vrS('prSanct/stabat_juxta_crucem_jesu_mater_ejus.php');
	rubrics('head/PT.php');
	brS('prSanct/salve_regina_misericordiae.php',1);
	vrS('prSanct/stabat_juxta_crucem_jesu_mater_ejus.php',0,1);
	
	space();
	rubrics('head/Sext.php');
	lc('ecclus24_9-11.php');
	rubrics('head/PTnot.php');
	brS('prSanct/stabat_juxta_crucem_jesu_mater_ejus.php');
	vrS('prSanct/beatam_me_dicent_omnes_generationes.php');
	rubrics('head/PT.php');
	brS('prSanct/stabat_juxta_crucem_jesu_mater_ejus.php',1);
	vrS('prSanct/beatam_me_dicent_omnes_generationes.php',0,1);

	space();
	rubrics('head/None.php');
	rubrics('head/LittleChapter.php');
	lc('ecclus24_30-31.php');
	rubrics('head/PTnot.php');
	brS('prSanct/beatam_me_dicent_omnes_generationes.php');
	vrS('prSanct/maria_virgo_caelos_ascendit.php');
	rubrics('head/PT.php');
	brS('prSanct/beatam_me_dicent_omnes_generationes.php',1);
	vrS('prSanct/maria_virgo_caelos_ascendit.php',0,1);

	space();
	rubrics('head/Vespers.php');
	lc('ecclus24_5_7.php');
	rubrics('head/HymnVerse.php');
	hymn('ave_maris_stella.php',1);
	vrS('prSanct/maria_virgo_caelos_ascendit.php',2);
	ant('prSanct/0531m2.php','M',2);
	space('Line');
	rubrics('prSanct/if1Vespers.php');
	vrS('prSanct/salve_regina_misericordiae.php',2); 
	ant('prSanct/0531m1.php','M',2); 
	space('Line');
	rubrics('head/Prayer.php');
	prayer('prSanct/0531.php');
	rubrics('prSanct/ComplineSun.php');

?>
