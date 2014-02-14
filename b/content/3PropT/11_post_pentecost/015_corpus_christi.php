<?php 
	space();
	hidden('After Pentecost',1);
	hidden('Corpus Christi',2);
	img('Tempore/t08_corpus_christi.png',100);
	head_temp(1,'in Festo Sanctissimi Corporis Christi', 'The Feast of the Most Holy Body of Christ',array('Feria Quinta', 'Thursday'));

	hour('1V');
	bookmark('1VCorpusChristi');
	ant('prTemp/post_pentecost/015V.php','20000');
	psalm(109);
	ant('prTemp/post_pentecost/015V.php','12000');
	psalm(110);
	ant('prTemp/post_pentecost/015V.php','01200');
	psalm(115);
	ant('prTemp/post_pentecost/015V.php','00120');
	psalm(127);
	ant('prTemp/post_pentecost/015V.php','00012');
	psalm(147);
	ant('prTemp/post_pentecost/015V.php','00001');
	lc('1cor11_23-24.php');
	rubrics('head/HymnVerse.php');	
	hymn('pange_lingua_gloriosi.php');
	vrS('PrTemp/panem_de_caelo_praestitisti_eis.php',1);
	head('Ad I Vesperas', 'At I Vespers',4);
	ant('PrTemp/post_pentecost/015m1.php','M');
	space('line');
	head('Ad II Vesperas', 'At II Vespers',4);
	ant('PrTemp/post_pentecost/015m2.php','M');
	space('line');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/015.php');
	rubrics('prSanct/ComplineSun.php');
	space();

	hour('L');
	ant('prTemp/post_pentecost/015L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/post_pentecost/015L.php','02222');	
	lc('1cor11_23-24.php');
	rubrics('head/HymnVerse.php');	
	hymn('verbum_supernum_prodiens.php');
	vrS('PrTemp/posuit_fines_tuos_pacem.php',1);
	ant('PrTemp/post_pentecost/015b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/015.php');
	space();

	ordref(0,6,0);

	hour('T');
	lc('1cor11_23-24.php');
	brS('PrTemp/panem_caeli_dedit_eis.php',1);
	vrS('PrTemp/cibavit_illos_ex_adipe_frumenti.php',1);
	space();

	hour('S');
	lc('1cor11_26.php');
	brS('PrTemp/cibavit_illos_ex_adipe_frumenti.php',1);
	vrS('PrTemp/educas_panem_de_terra.php',1);
	space();

	hour('N');
	lc('1cor11_27.php');
	brS('PrTemp/educas_panem_de_terra.php',1);
	vrS('PrTemp/posuit_fines_tuos_pacem.php',1);
	space();

	hour('2V');
	rubp('Omnia ut ad I Vesperas, <snr>p. '. bkref('1VCorpusChristi') .'</s> præter:', 'All as at I Vesperas, <snr>p. '. bkref('1VCorpusChristi') .'</s> except:');
	ant('PrTemp/post_pentecost/015m2.php','M');
	rubrics('prSanct/ComplineSun.php');
	rubp('In Officio feriæ: Oratio <snr>Deus, in te, p. '. bkref('1_post_pentecost') .'</s>', 'In the ferial Office: Prayer <snr>O God, the strength, p.'. bkref('1_post_pentecost') .'</s>');

?>
