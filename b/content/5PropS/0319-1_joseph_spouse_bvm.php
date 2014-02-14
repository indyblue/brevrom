<?php
	space();
	img('Saints/0319_st_joseph.tif',100);
	headSt(319,1,'S. Joseph, Sponsi B. Mariæ Virg.',
		'St. Joseph, Spouse of the B.V.M.','Conf., Universal Patron of the Church');
	hour('1V');
	ant('prSanct/0319V1.php','20000',2);
	rubrics('ps/SuV116.php');
	ant('prSanct/0319V1.php','02222',2);
	lc('prov28_20_27_18.php');
	rubrics('head/HymnVerse.php');
	hymn('te_joseph_celebrent_agmina_caelitum.php',0);
	vrS('prSanct/constituit_eum_dominum_domus_suae.php',2);
	ant('prSanct/0319m1.php','M',2);
	rubrics('prSanct/comm_lent.php');
	rubrics('prSanct/ComplineSun.php');
	
	space();
	hour('L');
	ant('prSanct/0319L.php','20000',2);
	rubrics('ps/SuL1.php');
	ant('prSanct/0319L.php','02222',2);
	lc('prov28_20_27_18.php');
	rubrics('head/HymnVerse.php');
	hymn('iste_quem_laeti_colimus_fideles.php');
	vrS('os_justi_meditabitur_sapientiam.php',2);
	ant('prSanct/0319b.php','B',2);
	rubrics('head/Prayer.php');
	prayer('prSanct/0319.php');
	rubrics('prSanct/comm_lent.php');

	space();
	csref(0,3);

	hour('T');
	lc('prov28_20_27_18.php');
	rubrics('head/PTnot.php'); 
	brS('prSanct/constituit_eum_dominum_domus_suae.php');
	vrS('prSanct/magna_est_gloria_ejus_in_salutari_tuo.php');
	rubrics('head/PT.php'); 
	brS('prSanct/constituit_eum_dominum_domus_suae.php',1);
	vrS('prSanct/magna_est_gloria_ejus_in_salutari_tuo.php',0,1);
	
	space();
	hour('S');
	lc('eccl45_1_4.php');
	rubrics('head/PTnot.php'); 
	brS('prSanct/magna_est_gloria_ejus_in_salutari_tuo.php');
	vrS('prSanct/justus_germinabit_sicut_lilium.php');
	rubrics('head/PT.php'); 
	brS('prSanct/magna_est_gloria_ejus_in_salutari_tuo.php',1);
	vrS('prSanct/justus_germinabit_sicut_lilium.php',0,1);

	space();
	hour('N');
	lc('wis10_10_profugum.php');
	rubrics('head/PTnot.php'); 
	brS('prSanct/justus_germinabit_sicut_lilium.php');
	vrS('prSanct/plantatus_in_domo_domini.php');
	rubrics('head/PT.php'); 
	brS('prSanct/justus_germinabit_sicut_lilium.php',1);
	vrS('prSanct/plantatus_in_domo_domini.php',0,1);

	space();
	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('prov28_20_27_18.php');
	hymn('te_joseph_celebrent_agmina_caelitum.php',1);
	vrS('prSanct/gloria_et_divitiae_in_domo_ejus.php',2);
	ant('prSanct/0319m2.php','M',2);
	rubrics('head/Prayer.php');
	prayer('prSanct/0319.php');
	rubrics('prSanct/comm_lent.php');
	rubrics('prSanct/ComplineSun.php');

?>
