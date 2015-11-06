<?php
	space();
	hidden('After Pentecost',1);
	hidden('Month of November',2);
	head('Mensis Novembris', 'The Month of November',1);

	head('Dominica I Novembris', 'First Sunday of November',2);
	head('II classis', 'II class',5);
	rubp('Si prima dominica incidit in dies 6 vel 7 novembris, mensis habet quidem quatuor dominicas, ultima tamen est prima Adventus.', 'If the first Sunday occurs on November 6 or 7, the month has only four Sundays; otherwise, the last is the first Sunday of Advent.');
	rubp('Hoc in casu, de Scriptura occurrenti omittitur illa pars quæ primæ et secundæ hebdomadæ assignata est.', 'In that case, that part of the occuring Scripture is omitted which is assigned to the first and and second week.');
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',0,'1V');
	ant('prTemp/post_pentecost/m11w10.php','M');

	include 'm11-1-1.php';
	include 'm11-1-2.php';
	include 'm11-1-3.php';
	include 'm11-1-4.php';
	include 'm11-1-5.php';
	include 'm11-1-6.php';
	include 'm11-1-7.php';
	space();

	head('Dominica II Novembris', 'Second Sunday of November',2);
	head('II classis', 'II class',5);
	rubp('Hæc dominica una cum sua hebdomada semper prætermittitur cum ei locus nunquam fieri possit, juxta superiorem rubricam.', 'This Sunday along with its week is always omitted as there is no room for it, in accord with the rubric above.');
	space();

	head('Dominica III Novembris', 'Third Sunday of November',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('prTemp/post_pentecost/m11w30.php','M');

	include 'm11-3-1.php';
	include 'm11-3-2.php';
	include 'm11-3-3.php';
	include 'm11-3-4.php';
	include 'm11-3-5.php';
	include 'm11-3-6.php';
	include 'm11-3-7.php';
	space();

	head('Dominica IV Novembris', 'Fourth Sunday of November',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('prTemp/post_pentecost/m11w40.php','M');

	include 'm11-4-1.php';
	include 'm11-4-2.php';

	space();

	head('Dominica V Novembris', 'Fifth Sunday of November',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('prTemp/post_pentecost/m11w50.php','M');
	space();
 
?>
