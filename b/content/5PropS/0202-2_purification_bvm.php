<?php 
	space();
	img('Saints/0908_nativity_of_bvm.tif',100); 
	space('RubricH');
	headSt('Oct. 7',2,'in Purificatione B. Mariæ Virg.',
		'Purification of the B.V.M.');
	rubp('Festum B. Mariæ Virg. habetur tamquam festum Domini.',
		'This feast of the B.V.M. is observed as a feast of our Lord.');
	rubrics('prSanct/all_from.php','csBVM');

	rubrics('head/1Vespers.php'); 
	rubrics('prSanct/Sun1Vespers.php'); 
	rubrics('asIn.php','pt0101L',
		'Lauds of Jan. 1, the Feast of the Circumcision', 'Antiphons'); 
	rubrics('ps/ComBVM.php'); 
	rubrics('head/LittleChapter.php'); 
	lc('malach3_1.php'); 
	rubrics('asIn.php','ave_maris_stella',
		'Common of BVM','Hymn <snr>Ave, maris stella</s>');
	vrS('prSanct/responsum_accepit_simeon_a_spiritu_sancto.php.php'); 
	rubrics('head/Magnificat.php'); 
	ant('prSanct/0202m1.php','M'); 
	rubrics('prSanct/ComplineSun.php'); 
	
// ----- work in progress -----
	space();
	rubrics('head/Lauds.php'); 
	rubrics('head/Psalms.php'); 
	ant('prSanct/1007L.php','20000'); 
	rubrics('ps/SuL1.php'); 
	ant('prSanct/1007L.php','02222'); 
	rubrics('head/LittleChapter.php'); 
	lc('ecclus24_25.php'); 
	rubrics('head/HymnVerse.php'); 
	hymn('jam_morte_victor_obruta.php'); 
	vrS('prSanct/elegit_eam_deus_et_praeelegit_eam_et.php'); 
	rubrics('head/Benedictus.php'); 
	ant('prSanct/1007b.php','B'); 
	rubrics('head/Prayer.php'); 
	prayer('prSanct/1007.php'); 
	feast_saint(1007,-1,'S. Marci','St. Mark','PC',
		array('csPope1.php','Marcum','Mark')); 

	space();
	rubrics('head/LittleHours.php'); 
	rubrics('ps/Feria.php'); 
	PrV('qui_natus_es_de_maria_virgine.php'); 

	rubrics('head/Terce.php'); 
	rubrics('head/LittleChapter.php'); 
	lc('ecclus24_25.php'); 
	rubrics('head/BriefRespond.php'); 
	brS('prSanct/sancta_dei_genitrix_semper_virgo_maria.php'); 
	vrS('prSanct/post_partum_virgo_inviolata_permansisti.php'); 
	
	space();
	rubrics('head/Sext.php'); 
	rubrics('head/LittleChapter.php'); 
	lc('ecclus39_19.php'); 
	rubrics('head/BriefRespond.php'); 
	brS('prSanct/post_partum_virgo_inviolata_permansisti.php'); 
	vrS('prSanct/speciosa_facta_es_et_suavis.php'); 

	space();
	rubrics('head/None.php'); 
	rubrics('head/LittleChapter.php'); 
	lc('ecclus24_17.php'); 
	rubrics('head/BriefRespond.php'); 
	brS('prSanct/speciosa_facta_es_et_suavis.php'); 
	vrS('prSanct/elegit_eam_deus_et_praeelegit_eam_et.php'); 

	space();
	rubrics('head/2Vespers.php'); 
	rubrics('head/Psalms.php'); 
	ant('prSanct/1007V.php','20000'); 
	rubrics('ps/ComBVM.php'); 
	ant('prSanct/1007V.php','02222'); 
	rubrics('head/LittleChapter.php'); 
	lc('ecclus24_25.php'); 
	rubrics('head/HymnVerse.php'); 
	hymn('te_gestientem_gaudiis.php'); 
	vrS('prSanct/regina_sacratissimi_rosarii_ora_pro_nobis.php'); 
	rubrics('head/Magnificat.php'); 
	ant('prSanct/1007m2.php','M'); 
	rubrics('head/Prayer.php'); 
	prayer('prSanct/1007.php'); 
	rubrics('prSanct/ComplineSun.php'); 
