<?php 

space();
img('separator3.tif',100);
head('Festa Februarii', 'Feasts of February',1);

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
	'St. Cyril, Bp. of Alexandria','-ECD',0,
	'feast_saint(209,-1,"Sanctæ Apolloniæ","Saint Apollonia","VM",
		array("csVirginMartyr2.php","Apollóniæ","Apollonia"));',
		array('Cyrílle','Cyril'));

feast_saint(210,3,'Sanctæ Scholasticæ','Saint Scholastica','V');

require '0211-3_apparition_bvm.php';

require '0212-3_seven_founders_servites.php';

feast_saint(214,0,'Sancti Valentini','Saint Valentine','pM');

feast_saint(215,0,'Ss. Faustini et Jovitæ','Ss. Faustinus and Jovita','M+',
	array('csMartyrs2.php','Faustíni et Jovítæ','Faustinus and Jovita'));

feast_saint(218,0,'Sancti Simeonis','Saint Simeon','EM',
	array('csMartyrBishop1.php','Simeónis','Simeon'));

require '0222-2_chair_st_peter.php';

feast_saint(223,3,'S. Petri Damiani','St. Peter Damian','ECD',0,0,
		array('Petre','Peter'));

require '0224-2_matthias.php';

feast_saint(227,3,'S. Gabrielis a Virgine Perdolente','St. Gabriel of Our Lady of Sorrows','C');

?>

