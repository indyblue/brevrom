<?php
	$matins = $_GET['matins'];
if($matins) {
	dayhour(4,'M',-1);

	head('In I Nocturno','I Nocturn',-2);
	$ps=44; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(44,1);
	//psalm(44,2);
	$ps=45; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(45);
	
	head('In II Nocturno','II Nocturn',-2);
	psalm(47,0);
	psalm(48,1);
	psalm(48,2);
	
	head('In III Nocturno','III Nocturn',-2);
	psalm('49a',1);
	psalm('49a',2);
	$ps=50; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(50);

	space();
}
	dayhour(4,'L1',-1);
	$ps=96; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(96,0);
	$ps=64; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(64,0);
	psalm(100);
	//canticle('judith.php');
	$ps=145; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(145);

	space();
	dayhour(4,'P',-1);
	psalm(25);
	psalm(51);
	psalm(52);

	space();
	dayhour(4,'T',-1);
	$ps=53; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(53);
	psalm(54,1);
	psalm(54,2);

	space();
	dayhour(4,'S',-1);
	psalm(55);
	psalm(56);
	psalm(57);

	space();
	dayhour(4,'N',-1);
	psalm(58,1);
	psalm(58,2);
	psalm(59);

	space();
	dayhour(4,'V',-1);
	$ps=127; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(127,0);
	$ps=128; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(128);
	$ps=129; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(129,0);
	$ps=130; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(130,0);
	psalm(131);

	space();
	dayhour(4,'C',-1);
	psalm(33,1);
	psalm(33,2);
	psalm(60);

?>
