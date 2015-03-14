<?php
	$matins = $_GET['matins'];
if($matins) {
	dayhour(7,'M',-1);

	head('In I Nocturno','I Nocturn',-2);
	psalm(104,1);
	psalm(104,2);
	psalm(104,3);

	head('In II Nocturno','II Nocturn',-2);
	psalm(105,1);
	psalm(105,2);
	psalm(105,3);
	
	head('In III Nocturno','III Nocturn',-2);
	psalm(106,1);
	psalm(106,2);
	psalm(106,3);

	space();
}
	dayhour(7,'L1',-1);
	$ps=149; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(149);
	psalm(91);
	psalm(63);
	//canticle('ecclesiasticus.php');
	$ps=150; head("Psalmus $ps","Psalm $ps",'2Ps');
	//psalm(150);

	space();
	dayhour(7,'P',-1);
	psalm(93,1);
	psalm(93,2);
	psalm(107);

	space();
	dayhour(7,'T',-1);
	psalm(101,1);
	psalm(101,2);
	psalm(101,3);

	space();
	dayhour(7,'S',-1);
	psalm(103,1);
	psalm(103,2);
	psalm(103,3);

	space();
	dayhour(7,'N',-1);
	psalm(108,1);
	psalm(108,2);
	psalm(108,3);

	space();
	dayhour(1,'1V',-1);
	psalm(143,1);
	psalm(143,2);
	psalm(144,1);
	psalm(144,2);
	psalm(144,3);

	space();
	dayhour(7,'C',-1);
	psalm(87);
	psalm(102,1);
	psalm(102,2);

?>
