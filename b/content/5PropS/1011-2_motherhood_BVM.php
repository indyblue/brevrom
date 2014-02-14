<?php

	img('Saints/0908_nativity_of_bvm.png',100);
	space('RubricH');
	headSt(1011,2,'Maternitatis B. Mariæ Virg.','Motherhood of the B.V.M.');

	hour('L');
	ant('prSanct/1011L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prSanct/1011L.php','02222');
	lc('ecclus24_12.php');
	rubrics('head/HymnVerse.php');
	hymn('te_mater_alma_numinis.php');
	vrS('prSanct/germinavit_radix_jesse_orta_est_stella_jacob.php');
	ant('prSanct/1011b.php','B');
	rubrics('head/Prayer.php');
	/* PRAYER SAME AS ANNUNCIATION, MAR. 25 */
	prayer('prSanct/0325.php');
	space();

	csref();
	PrV('qui_natus_es_de_maria_virgine.php');
	space();
	hour('T');
	lc('ecclus24_12.php');
	brS('specie_tua_et_pulcritudine_tua.php');
	vrS('adjuvabit_eam_deus_vultu_suo.php');
	space();

	csref('csBVM',0,4);
//	rubrics('prSanct/sext_none_from.php','csBVMS');
	space();

	hour('V');
	rubrics('ps/antLauds.php');
	rubrics('ps/ComBVM.php');
	lc('ecclus24_12.php');
	hymn('ave_maris_stella.php',1);
	vrS('benedicta_tu_in_mulieribus.php');
	ant('prSanct/1011m2.php','M');
	space('Line');
	rubrics('prSanct/if1Vespers.php');
	ant('prSanct/1011m1.php','M');
	space('Line');
	rubrics('prSanct/ComplineSun.php');

?>
