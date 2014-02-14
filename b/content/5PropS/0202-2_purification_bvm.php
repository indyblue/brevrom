<?php 
	space();
	img('Saints/0908_nativity_of_bvm.tif',100); 
	headSt(202,2,'in Purificatione B. Mariæ Virg.',
		'Purification of the B.V.M.');
	rubp('Festum B. Mariæ Virg. habetur tamquam festum Domini.',
		'This feast of the B.V.M. is observed as a feast of our Lord.');
	rubrics('prSanct/all_from.php','csBVM');

	hour('1V'); 
	rubrics('prSanct/Sun1Vespers.php'); 
	rubrics('asIn.php','pt0101L',
		'Lauds of Jan. 1, the Feast of the Circumcision', 'Antiphons'); 
	rubrics('ps/ComBVM.php'); 
	rubrics('head/LittleChapter.php'); 
	lc('malach3_1.php'); 
	rubrics('asIn.php','ave_maris_stella',
		'Common of BVM','Hymn <snr>Ave, maris stella</s>');
	vrS('prSanct/responsum_accepit_simeon_a_spiritu_sancto.php'); 
	rubrics('head/Magnificat.php'); 
	ant('prSanct/0202m1.php','M'); 
	rubrics('prSanct/ComplineSun.php'); 
	
	space();
	hour('L'); 
	ant('prSanct/0202L.php','20000'); 
	rubrics('ps/SuL1.php'); 
	ant('prSanct/0202L.php','02222'); 
	rubrics('head/LittleChapter.php'); 
	lc('malach3_1.php'); 
	rubrics('asIn.php','o_gloriosa_virginum',
		'Common of BVM','Hymn <snr>O gloriósa vírginum</s>');
	vrS('diffusa_est_gratia_in_labiis_tuis.php'); 
	ant('prSanct/0202b.php','B'); 
	rubrics('head/Prayer.php'); 
	prayer('prSanct/0202.php'); 

	space();
	rubrics('ps/LittleHoursFeria.php');
	PrV('qui_natus_es_de_maria_virgine.php'); 
	rubp('Quando hoc festum occurrit in dominicis in Septuagesima, aut Sexagesima, aut Quinquagesima, ad horas sumuntur ant. de Laudibus, pss. vero de dominica, retentis tamen ad primam pss. 117, 118 i, 118 ii.',
		'When this feast occurs on the Sunday of Septuagesima, Sexagesima or Quinquagesima, at the little hours the ant. are selected from Lauds, and the psalms from Sunday; retaining at Prime pss. 117, 118 i, 118 ii.');

	hour('T'); 
	rubrics('head/LittleChapter.php'); 
	lc('malach3_1.php'); 
	rubrics('head/BriefRespond.php'); 
	brS('specie_tua_et_pulcritudine_tua.php'); 
	vrS('adjuvabit_eam_deus_vultu_suo.php'); 
	
	space();
	hour('S'); 
	rubrics('head/LittleChapter.php'); 
	lc('malach3_1-2.php'); 
	rubrics('head/BriefRespond.php'); 
	brS('adjuvabit_eam_deus_vultu_suo.php'); 
	vrS('elegit_eam_deus_et_praeelegit_eam.php'); 

	space();
	hour('N'); 
	rubrics('head/LittleChapter.php'); 
	lc('malach3_4.php'); 
	rubrics('head/BriefRespond.php'); 
	brS('elegit_eam_deus_et_praeelegit_eam.php'); 
	vrS('diffusa_est_gratia_in_labiis_tuis.php'); 

	space();
	hour('2V'); 
	rubrics('ps/antLauds.php');
	rubrics('ps/ComBVM.php'); 
	rubrics('head/LittleChapter.php'); 
	lc('malach3_1.php'); 
	rubrics('asIn.php','o_gloriosa_virginum',
		'Common of BVM','Hymn <snr>O gloriósa vírginum</s>');
	vrS('prSanct/responsum_accepit_simeon_a_spiritu_sancto.php'); 
	ant('prSanct/0202m2.php','M'); 
	rubrics('head/Prayer.php'); 
	prayer('prSanct/0202.php'); 
	rubrics('prSanct/ComplineSun.php'); 

?>
