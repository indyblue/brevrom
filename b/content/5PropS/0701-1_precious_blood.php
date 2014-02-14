<?php

	space(); 
	img('Tempore/t10_sacred_heart.png',100);
	space('RubricH'); 
	headst('701',1,'Pretiosissimi Sanguinis D.N.J.C.',
		'The Most Precious Blood of our Lord Jesus Christ');

	hour('1V');
	ant('prSanct/0701V.php','20000');
	rubrics('ps/SuV116.php');
	ant('prSanct/0701V.php','02222');
	lc('hebr9_11-12.php','ps0701Vlc','h','festivis_resonent_compita_vocibus.php');
	vrS('prSanct/redemisti_nos_domine_in_sanguine_tuo.php');
	ant('prSanct/0701m1.php','M');

	space();
	hour('L');
	ant('prSanct/0701L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prSanct/0701L.php','02222');
	lc('hebr9_11-12.php');
	rubrics('head/HymnVerse.php');
	hymn('salvete_christi_vulnera.php');
	vrS('prSanct/justificati_in_sanguine_christi.php');
	ant('prSanct/0701b.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/0701.php');

	space();
	csref(0,3);
	PrV('qui_tuo_nos_sanguine_redemisti.php');
	space();

	hour('T'); 
	lc('hebr9_11-12.php');
	brS('prSanct/redemisti_nos_domine_in_sanguine_tuo_ex.php');
	vrS('prSanct/sanguis_jesu_christi_filii_dei.php');
	
	space();
	hour('S'); 
	lc('hebr9_13-14.php'); 
	brS('prSanct/sanguis_jesu_christi_filii_dei_emundat_nos.php');
	vrS('prSanct/christus_dilexit_nos.php');

	space();
	hour('N'); 
	lc('hebr9_19-20.php');
	brS('prSanct/christus_dilexit_nos_et_lavit_nos_in_sanguine_suo.php');
	vrS('prSanct/justificati_in_sanguine_christi.php');

	space();
	hour('2V'); 
	ant('prSanct/0701V.php','20000');
	rubrics('ps/SuV147.php');
	ant('prSanct/0701V.php','02222');
	bookmark('ps0701Vlc');
	lc('hebr9_11-12.php');
	rubrics('head/HymnVerse.php');
	hymn('festivis_resonent_compita_vocibus.php',0);
	vrS('prSanct/te_ergo_quaesumus_tuis_famulis_subveni.php');
	ant('prSanct/0701m2.php','M');
	rubrics('prSanct/ComplineSun.php'); 
?>

