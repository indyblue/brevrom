<?php
	space();
	img('Saints/0319_st_joseph.tif',100);
	headSt(319,1,'S. Joseph, Sponsi B. Mariæ Virg.',
		'St. Joseph, Spouse of the B.V.M.','Conf., Universal Patron of the Church');
	hour('1V');
	ant('prSanct/0319V1.php','20000');
	rubrics('ps/SuV116.php');
	ant('prSanct/0319V1.php','02222');
	lc('prov28_20_27_18.php');
	rubrics('head/HymnVerse.php');
	bookmark('te_joseph_celebrent_agmina_caelitum');
	hymn('te_joseph_celebrent_agmina_caelitum.php');
	vrS('prSanct/constituit_eum_dominum_domus_suae.php');
	ant('prSanct/0319m1.php','M');
	rubrics('prSanct/comm_lent.php');
	rubrics('prSanct/ComplineSun.php');
	
	space();
	hour('L');
	ant('prSanct/0319L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prSanct/0319L.php','02222');
	lc('prov28_20_27_18.php');
	rubrics('head/HymnVerse.php');
	hymn('iste_quem_laeti_colimus_fideles.php');
	vrS('os_justi_meditabitur_sapientiam.php');
	ant('prSanct/0319b.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/0319.php');
	rubrics('prSanct/comm_lent.php');

	space();
	rubrics('prSanct/1classLittleHours.php');

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
	lc('eccli45_1_4.php');
	rubrics('head/PTnot.php'); 
	brS('prSanct/magna_est_gloria_ejus_in_salutari_tuo.php');
	vrS('prSanct/justus_germinabit_sicut_lilium.php');
	rubrics('head/PT.php'); 
	brS('prSanct/magna_est_gloria_ejus_in_salutari_tuo.php',1);
	vrS('prSanct/justus_germinabit_sicut_lilium.php',0,1);

	space();
	hour('N');
	lc('sap10_10.php');
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
	rubrics('asIn.php','te_joseph_celebrent_agmina_caelitum',
		'I Vespers','Hymn <snr>Te, Joseph, célebrent ágmina cǽlitum</s>');
	vrS('prSanct/gloria_et_divitiae_in_domo_ejus.php');
	ant('prSanct/0202m2.php','M');
	rubrics('head/Prayer.php');
	prayer('prSanct/0319.php');
	rubrics('prSanct/comm_lent.php');
	rubrics('prSanct/ComplineSun.php');

?>
