<?php
	$matins = $_GET['matins'];
if($matins) {
	dayhour(5,'M',-1);

	head('In I Nocturno','I Nocturn',-2);
	psalm(61);
	psalm(65,1);
	psalm(65,2);

	head('In II Nocturno','II Nocturn',-2);
	psalm(67,1);
	psalm(67,2);
	psalm(67,3);
	
	head('In III Nocturno','III Nocturn',-2);
	psalm(68,1);
	psalm(68,2);
	psalm(68,3);

	space();
}
	dayhour(5,'L1',-1);
	$ps=97; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(97);
	psalm(89,0);
	psalm(35);
	//canticle('jeremiah.php');
	psalm(146);

	space();
	dayhour(5,'P',-1);
	$ps=22; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(22);
	psalm(71,1);
	psalm(71,2);

	space();
	dayhour(5,'T',-1);
	psalm(72,1);
	psalm(72,2);
	psalm(72,3);

	space();
	dayhour(5,'S',-1);
	psalm(73,1);
	psalm(73,2);
	psalm(73,3);

	space();
	dayhour(5,'N',-1);
	psalm(74);
	psalm(75,1);
	psalm(75,2);

	space();
	dayhour(5,'V',-1);
	psalm(132,0);
	psalm(135,1);
	psalm(135,2);
	psalm(136);
	$ps=137; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(137);

	space();
	dayhour(5,'C',-1);
	psalm(69);
	psalm(70,1);
	psalm(70,2);

?>
