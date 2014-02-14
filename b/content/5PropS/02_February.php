<?php 
	space();
	img('separator3.tif',100); ?>
	<p:Head1NI><?php 
echo ($_GET['L']==1?'Festa Februarii':'Feasts of February') 
?></p>

<?php
/*
feast_saint(930,3,'Sancti Hieronymi','Saint Jerome','pCD');
feast_saint(1009,3,'S. Joannis Leonardi','St. John Leonard','C',0,
	'feast_saint(1009,-1,"","St. Dionysius, Bp., Rusticus and Eleutherius","M+");');
 */

feast_saint(201,3,'Sancti Ignatii','Saint Ignatius','EM',
	array('csMartyrBishop1.php','Ignátii','Ignatius'));

require '0202-2_purification_bvm.php';

feast_saint(203,0,'Sancti Blasii','Saint Blaise','EM',
	array('csMartyrBishop2.php','Blásii','Blaise'));

feast_saint(204,3,'S. Andreæ Corsini','St. Andrew Corsini','EC');

require '0205-3_agatha.php';

feast_saint(206,3,'Sancti Titi','Saint Titus','EC',0,
	'feast_saint(206,-1,"Sanctæ Dorotheæ","Saint Dorothy","VM",
		array("csVirginMartyr2.php","Doróthea","Dorothy"));');

feast_saint(207,3,'Sancti Romualdi','Saint Romuald','a',
	array('csConfessorAbbot.php','Romuáldi','Romuald'));

feast_saint(208,3,'S. Joannis de Matha','St. John of Matha','C');

feast_saint(209,3,'S. Cyrilli, Ep. Alexandrini',
	'St. Cyril, Bp. of Alexandria','ECD',0,
	'feast_saint(209,-1,"Sanctæ Apolloniæ","Saint Apollonia","VM",
		array("csVirginMartyr2.php","Apollóniæ","Apollonia"));');

feast_saint(210,3,'Sanctæ Scholasticæ','Saint Scholastica','V');

require '0211-3_apparition_bvm.php';

require '0212-3_seven_founders_servites.php';

?>

