<?php 
	space();
	img(); 
	feast_saint(0212,'H','Ss. Septem Fundatorum Ordinis Servorum B.M.V.',
		'The Seven Holy Founders of the Order of Servites','C+');
	rubrics('ps/Feria.php');

	rubrics('head/Lauds.php'); 
	rubrics('head/LittleChapter.php'); 
	lc('ecclus51_1.php'); 
	rubrics('head/HymnVerse.php');
	hymn('.php');
	vrS('.php'); 
	rubrics('head/Benedictus.php'); 
	ant('prSanct/0212b.php','B'); 
	rubrics('head/Prayer.php'); 
	prayer('prSanct/0212.php'); 

	space();
	rubrics('head/LittleHours.php'); 
	rubrics('ps/Feria.php'); 
	rubrics('prSanct/horas_from.php','csHWLH','with the readings for a Martyr (<snr>Ecclus. 51</s>)');

	space();
	rubrics('head/2Vespers.php'); 
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV147.php'); 
	rubrics('head/LittleChapter.php'); 
	lc('ecclus51_1.php'); 
	rubrics('asIn.php','jesu_corona_virginum',
		'Common of Virgins','Hymn <snr>Jesu, coróna Vírginum</s>');
	vrS('diffusa_est_gratia_in_labiis_tuis.php'); 
	rubrics('head/Magnificat.php'); 
	ant('prSanct/0205m.php','M'); 
	rubrics('prSanct/ComplineFeria.php'); 

?>
