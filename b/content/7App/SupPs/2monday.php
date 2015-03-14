<?php
	$matins = $_GET['matins'];
if($matins) {
	dayhour(2,'M',-1);

	head('In I Nocturno','I Nocturn',-2);
	psalm(13);
	psalm(14);
	psalm(16);

	head('In II Nocturno','II Nocturn',-2);
	psalm(17,1);
	psalm(17,2);
	psalm(17,3);

	head('In III Nocturno','III Nocturn',-2);
	psalm(19,0);
	psalm(20,0);
	psalm(29,0);

	space();
}
	dayhour(2,'L1',-1);
	psalm(46);
	$ps=5; head("Psalmus $ps","Psalm $ps",'2Ps');
	psalm(28);
	//canticle('david.php');
	$ps=116; head("Psalmus $ps","Psalm $ps",'2Ps');
	space();

	dayhour(2,'P',-1);
	$ps=23; head("Psalmus $ps","Psalm $ps",'2Ps');
	$ps=18; head("Psalmus $ps","Psalm $ps",'2Ps');
	space();

	dayhour(2,'T',-1);
	$ps=26; head("Psalmus $ps","Psalm $ps",'2Ps');
	psalm(27);
	space();

	dayhour(2,'S',-1);
	psalm(30,1);
	psalm(30,2);
	psalm(30,3);
	space();
	
	dayhour(2,'N',-1);
	psalm(31);
	psalm(32,1);
	psalm(32,2);
	space();
	
	dayhour(2,'V',-1);
	$ps=114; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(114);
	psalm(115);
	$ps=119; head("Psalmus $ps","Psalm $ps",'2Ps');
	$ps=120; head("Psalmus $ps","Psalm $ps",'2Ps');
	$ps=121; head("Psalmus $ps","Psalm $ps",'2Ps');
	space();
	
	dayhour(2,'C',-1);
	$ps=6; head("Psalmus $ps","Psalm $ps",'2Ps');
	$ps=7; head("Psalmus $ps","Psalm $ps",'2Ps');

?>
