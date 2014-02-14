<?php

	space();
	img(); 
	bookmark('ps6S');
	dayhour(6,'S',-1);
	vr('deus_in_adjutorium.php');
	rubrics('head/HymnVerse.php');
	hymn('rector_potens_verax_deus0.php');	

	space();
	rubp('In Officio feriali: Per Annum, temp Nativitatis, et temp. Epiphaniæ:','In the ferial Office: Throughout the year, Nativitytide and Epiphanytide:');
	ant('Monastic/6Fri4Sext.php','*000');

/*
	rubp('Infra hebd. I Adventus:','In the first week of Advent:');
	rubp('Infra hebd. II Adventus:','In the second week of Advent:');
	rubp('Infra hebd. III Adventus:','In the third week of Advent:');
 */
	rubp('Tempore Quadragesimæ:','In the Season of Lent:');
	ant('Monastic/6Fri4Sext.php','0*00');

	rubp('Tempore Passionis:','In Passiontide:');
	ant('Monastic/6Fri4Sext.php','00*0');

	rubp('Tempore paschali et temp. ascensionis:','In Paschaltide:');
	ant('Psalter/alleluia.php','P');
	space();

	psalm(122);
	reading('vr/gloria_patri-a.php',0);
	psalm(123);
	reading('vr/gloria_patri-a.php',0);
	psalm(124);
	reading('vr/gloria_patri-a.php',0);

	space();
	rubp('not sure what goes here','');
	space();
	vr('dv_de.php');
	vr('oremus.php');
	rubp('Et dicitur oratio, quæ dicta est in Laudibus.','And recite the prayer which was said at Lauds.');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');

?>
