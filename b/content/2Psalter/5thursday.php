<?php
	space();
	img('dove.png',35);
	space();
	$matins = $_GET['matins'];
if($matins) {
	bookmark('ps5M');
	dayhour(5,'M');
	ant('Ord/Inv5.php','I');
	rubrics('head/HymnVerse.php');
	hymn('nox_atra_rerum_contegit.php');

	ant('Psalter/5Thu/0M.php','N00000000');
	psalm(61);
	space(2);
	ant('Psalter/5Thu/0M.php','120000000');
	psalm(65,1);
	space(2);
	ant('Psalter/5Thu/0M.php','012000000');
	psalm(65,2);
	space(2);
	ant('Psalter/5Thu/0M.php','001N00000');
	psalm(67,1,1);
	space(2);
	ant('Psalter/5Thu/0M.php','000120000');
	psalm(67,2);
	space(2);
	ant('Psalter/5Thu/0M.php','000012000');
	psalm(67,3);
	space(2);
	ant('Psalter/5Thu/0M.php','000001N00');
	psalm(68,1,1);
	space(2);
	ant('Psalter/5Thu/0M.php','000000120');
	psalm(68,2);
	space(2);
	ant('Psalter/5Thu/0M.php','000000012');
	psalm(68,3);
	space(2);
	ant('Psalter/5Thu/0M.php','000000001');

	space();
	img();
}
	bookmark('ps5L1');
	dayhour(5,'L1');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/5Thu/1L1.php','20000');
	psalm(97);
	space(2);
	ant('Psalter/5Thu/1L1.php','12000');
	psalm(89,0,1);
	space(2);
	ant('Psalter/5Thu/1L1.php','01200');
	psalm(35);
	space(2);
	ant('Psalter/5Thu/1L1.php','00120');
	canticle('jeremiah.php');
	space(2);
	ant('Psalter/5Thu/1L1.php','00012');
	psalm(146);
	space(2);
	ant('Psalter/5Thu/1L1.php','00001');
	ant('Psalter/alleluia.php','p');
	rubrics('ps/hour_continues.php');
	lc('rom13_12-13.php');
	rubrics('head/HymnVerse.php');
	hymn('lux_ecce_surgit_aurea.php');
	vrS('Ord/repleti_sumus_mane_misericordia_tua.php');
	ant('Psalter/5Thu/1b.php','B');
	dayhourE(5,'L1');

	space();
	img(); 
	bookmark('ps5L2');
	dayhour(5,'L2');
	multiant(5,1,'20000');
	psalm(50);
	space(2);
	multiant(5,1,'12000');
	psalm(89);
	space(2);
	multiant(5,1,'01200');
	psalm(35);
	space(2);
	multiant(5,1,'00120');
	canticle('moses15.php');
	space(2);
	multiant(5,1,'00012');
	psalm(146);
	space(2);
	multiant(5,1,'00001');
	dayhourE(5,'L2');

	space();
	img(); 
	bookmark('ps5P');
	dayhour(5,'P');
	bookmark('Ps22');
	psalm(22);
	psalm(71,1);
	psalm(71,2);
	ant('Psalter/5Thu/2P.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(5,'P');

	space();
	img(); 
	bookmark('ps5T');
	dayhour(5,'T');
	psalm(72,1,1);
	psalm(72,2);
	psalm(72,3);
	ant('Psalter/5Thu/3T.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(5,'T');

	space();
	img(); 
	bookmark('ps5S');
	dayhour(5,'S');
	psalm(73,1);
	psalm(73,2);
	psalm(73,3);
	ant('Psalter/5Thu/4S.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(5,'S');

	space();
	img(); 
	bookmark('ps5N');
	dayhour(5,'N');
	psalm(74);
	psalm(75,1);
	psalm(75,2);
	ant('Psalter/5Thu/5N.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(5,'N');

	space();
	img(); 
	bookmark('ps5V');
	dayhour(5,'V');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/5Thu/6V.php','20000');
	psalm(132,0,1);
	space(2);
	ant('Psalter/5Thu/6V.php','12000');
	psalm(135,1);
	space(2);
	ant('Psalter/5Thu/6V.php','01200');
	psalm(135,2);
	space(2);
	ant('Psalter/5Thu/6V.php','00120');
	psalm(136);
	space(2);
	ant('Psalter/5Thu/6V.php','00012');
	bookmark('Ps137');
	psalm(137);
	space(2);
	ant('Psalter/5Thu/6V.php','00001');
	ant('Psalter/alleluia.php','p');
	rubrics('ps/hour_continues.php');
	lc('2cor1_3-4.php');
	rubrics('head/HymnVerse.php');
	hymn('magnae_deus_potentiae.php');
	vrS('Ord/dirigatur_domine_oratio_mea.php');
	ant('Psalter/5Thu/6m.php','M');
	dayhourE(5,'V');

	space();
	img(); 
	bookmark('ps5C');
	dayhour(5,'C');
	ant('Psalter/alleluia.php','P');
	ant('Psalter/5Thu/7C.php');
	psalm(69);
	psalm(70,1);
	psalm(70,2);
	ant('Psalter/5Thu/7C.php',1);
	ant('Psalter/alleluia.php','p');
	dayhourE(5,'C');

?>
