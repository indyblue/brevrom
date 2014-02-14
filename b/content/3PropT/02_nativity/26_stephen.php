<?php 
	space();
	hidden('Christmas',1);
	hidden('Dec. 26 - Stephen',2);
	head_temp(2,'Sancti Stephani <br><r>Protomartyris</s>', 'Saint Stephen <br><r>the First Martyr</s>',1226);

	csref('csM',0,11);
	rubp('Sicubi in II Vesp. Nativ. facienda sit com. S. Stephani:', 'If anywhere commem. is to be made of St. Stephen at II Vespers of Christmas:');
	ant('PrTemp/nativity/26b.php','1');
	vrS('gloria_et_honore_coronasti_eum_domine.php');
	rubrics('Oremus.php');
	prayer('PrTemp/nativity/26.php');
	space();

	hour('L');
	ant('prTemp/nativity/26L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/nativity/26L.php','02222');	
	lc('acts6_8.php');
	hymn('invicte_martyr_unicum.php',1);
	vrS('PrTemp/sepelierunt_stephanum_viri_timorati.php');
	ant('PrTemp/nativity/26b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/nativity/26.php');
	require '25comL.php';
	space();

	csref(0,2,0);
	PrV('qui_natus_es_de_maria_virgine.php',1);
	space();

	hour('T');
	lc('acts6_8.php');
	brS('gloria_et_honore_coronasti_eum_domine.php');
	vrS('posuisti_domine_super_caput_ejus.php');
	space();

	hour('S');
	lc('acts6_9-10.php');
	brS('posuisti_domine_super_caput_ejus.php');
	vrS('magna_est_gloria_ejus_in_salutari_tuo.php');
	space();

	hour('N');
	lc('acts7_60.php');
	brS('magna_est_gloria_ejus_in_salutari_tuo.php');
	vrS('justus_ut_palma_florebit.php');
	space();

	hour('2V');
	rubrics('ant_et_pss_de_nativitate.php');
	lc('acts6_8.php');
	hymn('deus_tuorum_militum.php',1);
	vrS('PrTemp/stephanus_vidit_caelos_apertos.php');
	ant('PrTemp/nativity/26m.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/nativity/26.php');
	require '25comV.php';
	rubrics('prSanct/ComplineSun.php');

?>




