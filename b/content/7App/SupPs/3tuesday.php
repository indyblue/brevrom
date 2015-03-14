<?php
	$matins = $_GET['matins'];
if($matins) {
	dayhour(3,'M',-1);

	head('In I Nocturno','I Nocturn',-2);
	psalm(34,1);
	psalm(34,2);
	psalm(34,3);
	
	head('In II Nocturno','II Nocturn',-2);
	psalm(36,1);
	psalm(36,2);
	psalm(36,3);

	head('In III Nocturno','III Nocturn',-2);
	psalm(37,1);
	psalm(37,2);
	psalm(38);

}
	dayhour(3,'L1',-1);
	$ps=95; head("Psalmus $ps","Psalm $ps",'2Ps');
	psalm(42);
	$ps=66; head("Psalmus $ps","Psalm $ps",'2Ps');
	//canticle('tobias.php');
	psalm(134);

	space();
	dayhour(3,'P',-1);
	$ps=24; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(24,1);
	//psalm(24,2);
	//psalm(24,3);

	space();
	dayhour(3,'T',-1);
	$ps=39; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(39,1);
	//psalm(39,2);
	//psalm(39,3);

	dayhour(3,'S',-1);
	$ps=40; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(40);
	$ps=41; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(41,1);
	//psalm(41,2);

	space();
	dayhour(3,'N',-1);
	psalm(43,1);
	psalm(43,2);
	psalm(43,3);

	space();
	dayhour(3,'V',-1);
	$ps=122; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(122);
	$ps=123; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(123);
	$ps=124; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(124);
	$ps=125; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(125);
	$ps=126; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(126);

	space();
	dayhour(3,'C',-1);
	psalm(11);
	psalm(12);
	psalm(15);

?>
