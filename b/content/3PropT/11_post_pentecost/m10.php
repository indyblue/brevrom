<?php
	space();
	hidden('After Pentecost',1);
	hidden('Month of October',2);
	head('Mensis Octobris', 'The Month of October',1);

	head('Dominica I Octobris', 'First Sunday of October',2);
	head('II classis', 'II class',5);
	rubp('Si prima dominica incidit in dies a 1 ad 3 octobris, mensis habet quinque dominicas.', 'If the first Sunday occurs from October 1 to 3, the month has five Sundays.');
	rubp('Si vero dominica incidit in dies a 4 ad 7, tunc mensis habet quatuor dominicas tantum.', 'But if the Sunday occurs from October 4 to 7, then the month has only four Sundays.');
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',0,'1V');
	ant('prTemp/post_pentecost/m10w10.php','M');
	rubp('Ad Laudes, in omnibus dominicis usque ad V novembris inclusive, hymnus <snr>Ætérne rerum Cónditor</s>, ut in Psalterio, <snr>p. '.bkref('aeterne_rerum_conditor') .'</s>.', 'At Lauds, on all Sundays through the fifth Sunday in November inclusive, the hymn <snr>Dread Framer of the earth and sky</s>, as in the Psalter, <snr>p. '.bkref('aeterne_rerum_conditor') .'</s>.');
	rubp('Ad Laudes et ad II Vesp. in ordine dominicarum, ut infra.', 'Lauds and II Vespers from among the other Sundays, as below.');
	space();

	head('Dominica II Octobris', 'Second Sunday of October',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('prTemp/post_pentecost/m10w20.php','M');
	space();

	head('Dominica III Octobris', 'Third Sunday of October',2);
	head('II classis', 'II class',5);
	rubp('Si hæc dominica a die 18 ad diem 21 octobris occurrat, prætermittitur cum sua hebdomada, ejusque loco ponitur dominica IV.', 'If this Sunday occurs from October 18 to 21, it is omitted along with its week; and in its place the fourth Sunday is used.');
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('prTemp/post_pentecost/m10w30.php','M');
	space();

	head('Dominica IV Octobris', 'Fourth Sunday of October',2);
	head('II classis', 'II class',5);
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',3,'1V');
	ant('prTemp/post_pentecost/m10w40.php','M');
	space();

	head('Dominica V Octobris', 'Fifth Sunday of October',2);
	head('II classis', 'II class',5);
	rubp('In dominica occurrente a die 25 ad diem 31 octobris inclusive, recolitur festum Domini nostri Jesu Christi Regis, ut in Proprio Sanctorum notatur, <snr>p. '. bkref('10CTK') .'</s>; in quo nulla fit commemoratio dominicæ occurrentis.', 'On the Sunday which occurs from October 25 to 31 October, inclusive, the feast of our Lord Jesus Christ the King is said, as noted in the Proper of Saints, <snr>p. '. bkref('10CTK') .'</s>; in which no commemoration of the Sunday occurs.');

	include 'm10-5-2.php';
	include 'm10-5-3.php';
	include 'm10-5-4.php';
	include 'm10-5-5.php';
	include 'm10-5-6.php';
	include 'm10-5-7.php';

	space();

?>
