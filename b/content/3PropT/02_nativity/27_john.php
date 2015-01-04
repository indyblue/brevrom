<?php 
	space();
	hidden('Christmas',1);
	hidden('Dec. 27 - John',2);
	head_temp(2,'Sancti Joannis <br><r>Apostoli et Evangelistæ</s>', 'Saint John <br><r>Apostle and Evangelist</s>',1226);

	csref('csAp',0,11);
	rubp('Sicubi dicendæ sint I Vesperæ de S. Joanne, antiphonæ et psalmi de Nativitate, a capitulo de S. Joanne (capitulum, hymnus et versus e II Vesperis, ant. ad Magnif. <snr>Iste est</s>, de Laudibus). Et fit commemoratio octavæ Nativitatis, ut supra.', 'If I Vespers of St. John is said, the antiphons and psalms of the Nativity are said, and from the little chapter on from St. John (little chapter, hymn and verse as in II Vespers, ant. at the Magnif. <snr>This is John</s>, from Lauds). And commem. is made of the octave of Christmas, as above.');
	space();

	hour('L');
	ant('prTemp/nativity/27L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/nativity/27L.php','02222');	
	lc('ecclus15_1-2.php');
	hymn('exsultet_orbis_gaudiis.php',1);
	vrS('prTemp/hic_est_discipulus_ille_qui_testimonium_perhibet_de_his.php');
	ant('prTemp/nativity/27b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/nativity/27.php');
	require '25comL.php';
	space();

	csref(0,2,0);
	PrV('qui_natus_es_de_maria_virgine.php',1);
	space();

	hour('T');
	lc('ecclus15_1-2.php');
	brS('in_omnem_terram_exivit_sonus_eorum.php');
	vrS('constitues_eos_principes_super_omnem_terram.php');
	space();

	hour('S');
	lc('ecclus15_3.php');
	brS('constitues_eos_principes_super_omnem_terram.php');
	vrS('nimis_honorati_sunt_amici_tui_deus.php');
	space();

	hour('N');
	lc('ecclus15_5.php');
	brS('nimis_honorati_sunt_amici_tui_deus.php');
	vrS('annuntiaverunt_opera_dei.php');
	space();

	hour('2V');
	rubrics('ant_et_pss_de_nativitate.php');
	lc('ecclus15_1-2.php');
	hymn('exsultet_orbis_gaudiis.php',1);
	vrS('prTemp/valde_honorandus_est_beatus_joannes.php');
	ant('prTemp/nativity/27m.php','M');
	rubrics('head/Prayer.php');
	prayer('prTemp/nativity/27.php');
	require '25comV.php';
	rubrics('prSanct/ComplineSun.php');

?>




