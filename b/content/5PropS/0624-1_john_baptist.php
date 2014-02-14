<?php

	space(); 
	img('Saints/0624_john_the_baptist.png',100);
	space('RubricH'); 
	headSt('624',1,'in Nativitate S. Joannis Baptistæ',
		'the Nativity of St. John the Baptist.');

	hour('1V');
	ant('prSanct/0624V1.php','20000');
	rubrics('ps/SuV116.php');
	ant('prSanct/0624V1.php','02222');
	lc('is49_1.php');
	rubrics('head/HymnVerse.php');
	hymn('ut_queant_laxis_resonare_fibris.php',0);
	vrS('prSanct/fuit_homo_missus_a_deo.php');
	ant('prSanct/0624m1.php','M');
	rubrics('head/Prayer.php');
	prayer('prSanct/0624.php');
	rubrics('prSanct/ComplineSun.php'); 

	space();
	hour('L');
	ant('prSanct/0624L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prSanct/0624L.php','02222');
	lc('is49_1.php');
	rubrics('head/HymnVerse.php');
	hymn('o_nimis_felix_meritique_celsi.php');
	vrS('prSanct/iste_puer_magnus_coram_domino.php');
	ant('prSanct/0624b.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/0624.php');
	space();

	space();
	csref(0,3);

	hour('T'); 
	lc('is49_1.php');
	brS('prSanct/fuit_homo_missus_a_deo.php'); 
	vrS('prSanct/inter_natos_mulierum_non_surrexit_major.php'); 
	
	space();
	hour('S'); 
	lc('is49_5-6.php'); 
	brS('prSanct/inter_natos_mulierum_non_surrexit_major.php'); 
	vrS('prSanct/elisabeth_zachariae_magnum_virum_genuit.php'); 

	space();
	hour('N'); 
	lc('is49_7.php'); 
	brS('prSanct/elisabeth_zachariae_magnum_virum_genuit.php'); 
	vrS('prSanct/iste_puer_magnus_coram_domino.php'); 

	space();
	hour('2V'); 
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('is49_1.php');
	hymn('ut_queant_laxis_resonare_fibris.php',1);
	vrS('prSanct/iste_puer_magnus_coram_domino.php'); 
	ant('prSanct/0624m2.php','M');
	rubrics('head/Prayer.php');
	prayer('prSanct/0624.php');
	rubrics('prSanct/ComplineSun.php'); 

?>

