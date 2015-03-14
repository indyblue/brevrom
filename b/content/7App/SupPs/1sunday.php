<?php
	$matins = $_GET['matins'];
if($matins) {
	dayhour(1,'M',-1);
	head('In I Nocturno','I Nocturn',-2);
	psalm(1);
	psalm(2);
	psalm(3);
	
	head('In II Nocturno','II Nocturn',-2);
	$ps=8; head("Psalmus $ps","Psalm $ps",'2Ps');
	psalm(9,1);
	psalm(9,2);

	head('In III Nocturno','III Nocturn',-2);
	psalm(9,3);
	psalm(9,4);
	psalm(10);

}
	dayhour(1,'L1',-1);
	$ps=92; head("Psalmus $ps","Psalm $ps",'2Ps');
	$ps=99; head("Psalmus $ps","Psalm $ps",'2Ps');
	$ps=62; head("Psalmus $ps","Psalm $ps",'2Ps');
	//canticle('threechildren.php');
	$ps=148; head("Psalmus $ps","Psalm $ps",'2Ps');
	space('Spacer');

	space();
	dayhour(1,'P',-1);
	psalm(117);
	psalm(118,1);
	psalm(118,2);
	ant('Psalter/1Sun/2P.php',1);
	ant('Psalter/alleluia.php','p');

	space();
	dayhour(1,'T',-1);
	psalm(118,3);
	psalm(118,4);
	psalm(118,5);

	space();
	dayhour(1,'S',-1);
	psalm(118,6);
	psalm(118,7);
	psalm(118,8);

	space();
	bookmark('psDN');
	dayhour(1,'N',-1);
	psalm(118,9);
	psalm(118,10);
	psalm(118,11);

	space();
	dayhour(1,'2V',-1);
	$ps=109; head("Psalmus $ps","Psalm $ps",'2Ps');
	psalm(110);
	psalm(111);
	$ps=112; head("Psalmus $ps","Psalm $ps",'2Ps');
	psalm(113);

	space();
	dayhour(1,'C',-1);
	psalm(4);
	psalm(90);
	psalm(133);

?>
