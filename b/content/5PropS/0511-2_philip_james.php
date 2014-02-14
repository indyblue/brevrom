<?php 
	space();
	// img(); 
	feast_saint(511,12,'Ss. Philippi et Jacobi','Ss. Philip and James','Ae+');

	hour('L'); 
	ant('prSanct/0511L.php','20000'); 
	rubrics('ps/SuL1.php'); 
	ant('prSanct/0511L.php','02222'); 
	lc('wis5_1.php','csApPTLlc','h','paschale_mundo_gaudium.php');
	vrS('pretiosa_in_conspectu_domini.php',1); 
	ant('prSanct/0511b.php','B'); 
	rubrics('head/Prayer.php'); 
	prayer('prSanct/0511.php'); 

	space();
	csref('csApPT',2,2);

	space();
	hour('V'); 
	rubrics('ps/antLauds.php');
	rubrics('ps/ComAp.php'); 
	lc('wis5_1.php','csApPTVlc','h','tristes_erant_apostoli.php');
	vrS('pretiosa_in_conspectu_domini.php',1); 
	ant('prSanct/0511m2.php','M'); 
	space('Line');
	rubrics('prSanct/if1Vespers.php');
	vrS('sancti_et_justi_in_domino_gaudete.php',1); 
	ant('prSanct/0511m1.php','M'); 
	space('Line');
	rubrics('prSanct/ComplineSun.php'); 

?>
