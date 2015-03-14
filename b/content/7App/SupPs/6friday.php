<?php
	$matins = $_GET['matins'];
if($matins) {
	dayhour(6,'M',-1);

	head('In I Nocturno','I Nocturn',-2);
	psalm(77,1);
	psalm(77,2);
	psalm(77,3);
	
	head('In II Nocturno','II Nocturn',-2);
	psalm(77,4);
	psalm(77,5);
	psalm(77,6);

	head('In III Nocturno','III Nocturn',-2);
	psalm(78);
	psalm(80);
	psalm(82);

	space();
}
	dayhour(6,'L1',-1);
	psalm(98);
	psalm(142);
	$ps=84; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(84);
	//canticle('isaiah45.php');
	$ps=147; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(147,0);

	space();
	dayhour(6,'P',-1);
	psalm(21,1);
	psalm(21,2);
	psalm(21,3);

	space();
	dayhour(6,'T',-1);
	psalm(79,1);
	psalm(79,2);
	psalm(81);

	space();
	dayhour(6,'S',-1);
	psalm(83,1);
	psalm(83,2);
	$ps=86; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(86);

	space();
	dayhour(6,'N',-1);
	psalm(88,1);
	psalm(88,2);
	psalm(88,3);

	space();
	dayhour(6,'V',-1);
	psalm(138,1);
	psalm(138,2);
	psalm(139);
	psalm(140,0);
	psalm(141);

	space();
	dayhour(6,'C',-1);
	psalm(76,1);
	psalm(76,2);
	psalm(85);

?>
