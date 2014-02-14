<?php 
	space();
	img(); 
	feast_saint(222,12,'Cathedræ S. Petri',
		'Chair of St. Peter','A');
	rubrics('prSanct/all_from.php','csCB');

	rubrics('head/Lauds.php');
	rubrics('asIn.php','csCBL',
		'Common of Confessor Bishop', 
		'Psalms, Antiphons &amp; Little Chapter'); 
	rubrics('head/HymnVerse.php');
	hymn('beate_pastor_petre_clemens_accipe.php');
	vrS('prSanct/exaltent_eum_in_ecclesia_plebis.php'); 
	rubrics('head/Benedictus.php'); 
	ant('prSanct/0222b.php','B');
	rubrics('head/Prayer.php'); 
	prayer('prSanct/0222.php'); 
	rubrics('prSanct/comm_peter_paul.php',2); 
	prayer('prSanct/0222c.php');
	rubrics('prSanct/comm_lent.php'); 

	space();
	rubrics('head/LittleHours.php'); 
	rubrics('ps/Feria.php'); 

	space();
	rubrics('head/Vespers.php'); 
	rubrics('asIn.php','csCBV',
		'Common of Confessor Bishop', 
		'Psalms, Antiphons &amp; Little Chapter'); 
	rubrics('head/HymnVerse.php');
	hymn('quodcumque_in_orbe_nexibus_revinxeris.php');
	vrS('prSanct/elegit_te_dominus_sacerdotem_sibi.php'); 
	ant('prSanct/0222m2.php','M'); 
	space('Line');
	rubrics('prSanct/if1Vespers.php');
	vrS('prSanct/tu_es_petrus.php'); 
	ant('prSanct/0222m1.php','M'); 
	space('Line');
	rubrics('prSanct/ComplineSun.php'); 

?>
