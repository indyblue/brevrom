<?php
	space();
	img('dove.png',35);
	space();
	$matins = $_GET['matins'];
if($matins) {
	bookmark('ps3M');
	dayhour(3,'M');
	ant('Ord/Inv3.php','I');
	rubrics('head/HymnVerse.php');
	hymn('consors_paterni_luminis.php');

	ant('Psalter/3Tue/0M.php','N00000000');
	psalm(34,1);
	space('Spacer');
	ant('Psalter/3Tue/0M.php','120000000');
	psalm(34,2);
	space('Spacer');
	ant('Psalter/3Tue/0M.php','012000000');
	psalm(34,3);
	space('Spacer');
	ant('Psalter/3Tue/0M.php','001N00000');
	psalm(36,1);
	space('Spacer');
	ant('Psalter/3Tue/0M.php','000120000');
	psalm(36,2);
	space('Spacer');
	ant('Psalter/3Tue/0M.php','000012000');
	psalm(36,3);
	space('Spacer');
	ant('Psalter/3Tue/0M.php','000001N00');
	bookmark('Ps37');
	psalm(37,1);
	space('Spacer');
	ant('Psalter/3Tue/0M.php','000000120');
	psalm(37,2);
	space('Spacer');
	ant('Psalter/3Tue/0M.php','000000012');
	psalm(38);
	space('Spacer');
	ant('Psalter/3Tue/0M.php','000000001');

	space();
	img();
}
	bookmark('ps3L1');
	dayhour(3,'L1');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/3Tue/1L1.php','20000');
	psalm(95);
	space('Spacer');
	ant('Psalter/3Tue/1L1.php','12000');
	psalm(42);
	space('Spacer');
	ant('Psalter/3Tue/1L1.php','01200');
	psalm(66);
	space('Spacer');
	ant('Psalter/3Tue/1L1.php','00120');
	canticle('tobias.php');
	space('Spacer');
	ant('Psalter/3Tue/1L1.php','00012');
	psalm(134);
	space('Spacer');
	ant('Psalter/3Tue/1L1.php','00001');
	ant('Psalter/alleluia.php','p');
	rubrics('ps/hour_continues.php');
	lc('rom13_12-13.php');
	rubrics('head/HymnVerse.php');
	hymn('ales_diei_nutius.php');
	vrS('Ord/repleti_sumus_mane_misericordia_tua.php');
	ant('Psalter/3Tue/1b.php','B');
	dayhourE(3,'L1');

	space();
	img(); 
	bookmark('ps3L2');
	dayhour(3,'L2');
	multiant(3,1,'20000');
	psalm(50);
	space(2);
	multiant(3,1,'12000');
	psalm(42);
	space(2);
	multiant(3,1,'01200');
	psalm(66,0,1);
	space(2);
	multiant(3,1,'00120');
	bookmark('cant_ezechiel');
	canticle('ezechiel.php');
	space(2);
	multiant(3,1,'00012');
	psalm(134);
	space(2);
	multiant(3,1,'00001');
	dayhourE(3,'L2');


	space();
	img(); 
	bookmark('ps3P');
	dayhour(3,'P');
	bookmark('Ps24');
	psalm(24,1);
	psalm(24,2);
	psalm(24,3);
	ant('Psalter/3Tue/2P.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(3,'P');

	space();
	img(); 
	bookmark('ps3T');
	dayhour(3,'T');
	bookmark('Ps39');
	psalm(39,1);
	psalm(39,2);
	psalm(39,3);
	ant('Psalter/3Tue/3T.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(3,'T');

	space();
	img(); 
	bookmark('ps3S');
	dayhour(3,'S');
	bookmark('Ps40');
	psalm(40);
	bookmark('Ps41');
	psalm(41,1);
	psalm(41,2);
	ant('Psalter/3Tue/4S.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(3,'S');

	space();
	img(); 
	bookmark('ps3N');
	dayhour(3,'N');
	psalm(43,1);
	psalm(43,2);
	psalm(43,3);
	ant('Psalter/3Tue/5N.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(3,'N');

	space();
	img(); 
	bookmark('ps3V');
	dayhour(3,'V');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/3Tue/6V.php','20000');
	psalm(122);
	space('Spacer');
	ant('Psalter/3Tue/6V.php','12000');
	psalm(123);
	space('Spacer');
	ant('Psalter/3Tue/6V.php','01200');
	psalm(124);
	space('Spacer');
	ant('Psalter/3Tue/6V.php','00120');
	psalm(125);
	space('Spacer');
	ant('Psalter/3Tue/6V.php','00012');
	psalm(126);
	space('Spacer');
	ant('Psalter/3Tue/6V.php','00001');
	ant('Psalter/alleluia.php','p');
	rubrics('ps/hour_continues.php');
	lc('2cor1_3-4.php');
	rubrics('head/HymnVerse.php');
	hymn('telluris_alme_conditor.php');
	vrS('Ord/dirigatur_domine_oratio_mea.php');
	ant('Psalter/3Tue/6m.php','B');
	dayhourE(3,'V');

	space();
	img(); 
	bookmark('ps3C');
	dayhour(3,'C');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/3Tue/7C.php');
	psalm(11);
	psalm(12);
	psalm(15);
	ant('Psalter/3Tue/7C.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(3,'C');

?>
