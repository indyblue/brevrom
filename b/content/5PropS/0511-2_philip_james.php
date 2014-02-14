<?php 
	space();
	img(); 
	feast_saint(0511,12,'Ss. Philippi et Jacobi','Ss. Philip and James','Ae+');

	rubrics('head/Lauds.php'); 
	ant('prSanct/0511L.php','20000'); 
	rubrics('ps/SuL1.php'); 
	ant('prSanct/0511L.php','02222'); 
	rubrics('asIn.php','csApPTLlc','Common of Ap. (P.T.)',
		'Little Chapter &amp; Hymn <snr>Paschále mundo gáudium</s>');
	vrS('pretiosa_in_conspectu_domini.php',1); 
	rubrics('head/Benedictus.php'); 
	ant('prSanct/0511b.php','B'); 
	rubrics('head/Prayer.php'); 
	prayer('prSanct/0511.php'); 

	space();
	rubrics('prSanct/horas_from.php','csApPTLH',2);

	space();
	rubrics('head/Vespers.php'); 
	rubrics('ps/antLauds.php');
	rubrics('ps/ComAp.php'); 
	rubrics('asIn.php','csApPTVlc','Common of Ap. (P.T.)',
		'Little Chapter &amp; Hymn <snr>Tristes erant Apóstoli</s>');
	vrS('pretiosa_in_conspectu_domini.php',1); 
	rubrics('head/Magnificat.php'); 
	ant('prSanct/0511m2.php','M'); 
	space('Line');
	rubrics('prSanct/if1Vespers.php');
	vrS('sancti_et_justi_in_domino_gaudete.php',1); 
	ant('prSanct/0511m1.php','M'); 
	space('Line');
	rubrics('prSanct/ComplineSun.php'); 

?>
