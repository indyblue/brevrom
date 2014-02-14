<?php 
	space();
	img('Saints/1007_holy_rosary_bvm.tif',100); 
	space('RubricH');
	headSt('Oct. 7',2,'Beatæ Mariæ Virg. a Rosario','The Most Holy Rosary of the B.V.M.');

	hour('1V'); 
	rubrics('prSanct/if1cl1Vespers.php'); 
	rubrics('ps/ant2Vespers.php'); 
	rubrics('ps/ComBVM.php'); 
	lc('ecclus24_25.php'); 
	rubrics('head/HymnVerse.php'); 
	hymn('caelestis_aulae_nuntius.php'); 
	vrS('prSanct/regina_sacratissimi_rosarii_ora_pro_nobis.php'); 
	ant('prSanct/1007m1.php','M'); 
	rubrics('prSanct/ComplineSun.php'); 

	space();
	hour('L'); 
	rubrics('head/Psalms.php'); 
	ant('prSanct/1007L.php','20000'); 
	rubrics('ps/SuL1.php'); 
	ant('prSanct/1007L.php','02222'); 
	lc('ecclus24_25.php'); 
	rubrics('head/HymnVerse.php'); 
	hymn('jam_morte_victor_obruta.php'); 
	vrS('prSanct/elegit_eam_deus_et_praeelegit_eam_et.php'); 
	ant('prSanct/1007b.php','B'); 
	rubrics('head/Prayer.php'); 
	prayer('prSanct/1007.php'); 
	feast_saint(1007,-1,'S. Marci','St. Mark','PC',
		array('csPope1.php','Marcum','Mark')); 

	space();
	rubrics('ps/LittleHoursFeria.php');
	PrV('qui_natus_es_de_maria_virgine.php'); 

	hour('T'); 
	lc('ecclus24_25.php'); 
	brS('prSanct/sancta_dei_genitrix_semper_virgo_maria.php'); 
	vrS('prSanct/post_partum_virgo_inviolata_permansisti.php'); 
	
	space();
	hour('S'); 
	lc('ecclus39_19.php'); 
	brS('prSanct/post_partum_virgo_inviolata_permansisti.php'); 
	vrS('prSanct/speciosa_facta_es_et_suavis.php'); 

	space();
	hour('N'); 
	lc('ecclus24_17.php'); 
	brS('prSanct/speciosa_facta_es_et_suavis.php'); 
	vrS('prSanct/elegit_eam_deus_et_praeelegit_eam_et.php'); 

	space();
	hour('2V'); 
	rubrics('head/Psalms.php'); 
	ant('prSanct/1007V.php','20000'); 
	rubrics('ps/ComBVM.php'); 
	ant('prSanct/1007V.php','02222'); 
	lc('ecclus24_25.php'); 
	rubrics('head/HymnVerse.php'); 
	hymn('te_gestientem_gaudiis.php'); 
	vrS('prSanct/regina_sacratissimi_rosarii_ora_pro_nobis.php'); 
	ant('prSanct/1007m2.php','M'); 
	rubrics('head/Prayer.php'); 
	prayer('prSanct/1007.php'); 
	rubrics('prSanct/ComplineSun.php'); 

?>
