<?php
	space();
	head('Dominica IV quæ Superfuit', 'Fourth Resumed Sunday',2);
	head('II classis', 'II class',5);

	rubrics('antiphona_ad_magnif_quae_contingit.php');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_epiphany/04.php');
	space();

	$matins = $_GET['matins-l'];
if($matins) {
	hour('M');
$cap1 = '8, 23-27';
/******************************* LATINA **************************************/
$l1 = ['c|Léctio sancti Evangélii secúndum Matthǽum',
		"lr|3|Cap. $cap1",
		'In illo témpore: Ascendénte Jesu in navículam, secúti sunt eum discípuli ejus: et ecce motus magnus factus est in mari, ita ut navícula operirétur flúctibus: ipse vero dormiébat. Et réliqua.',
		'c|Homilía sancti Hierónymi Presbýteri',
		'cr|Liber 1 Comment. in cap. 8 Matthæi',
		'Quintum signum fecit, quando ascéndens navem de Caphárnaum, ventis imperávit et mari. Sextum, quando in regióne Gerasenórum dedit potestátem dæmónibus in porcos. Séptimum, quando ingrédiens civitátem suam, paralýticum secúndum curávit in léctulo. Primus enim paralýticus est puer centuriónis.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Holy Gospel according to Matthew',
		"cl|3|Chap. $cap1",
		'At that time: When Jesus entered into a ship, his disciples followed him.  And behold, there arose a great tempest in the sea, insomuch that the ship was covered with the waves: but he was asleep.  And so on, and that which followeth.',
		'c|A Homily by St. Jerome the Priest',
		'cr|Book 1 Comment. in chap. 8 of Matthew',
		'The fifth miraculous sign which the Lord wrought was on this wise: going on board the ship at Capernaum, he commanded the winds and the sea.  The sixth was done in the country of the Gergesenes, when he gave the unclean spirits power over the swine.  The seventh was upon entering into his own city, when he cured the second paralytic in his bed.  For the former paralytic which he cured was the Centurion’s servant.'];

/******************************* CODE **************************************/
ant('Matins/dom_b3_per_evangelica_dicta.php','b');
space();
lectio($l1, $e1);
rubrics('te_deum.php');
space();
}
	hour('L');
	vrS('Ord/dominus_regnavit_decorem_induit.php',0);
	ant('prTemp/post_epiphany/04b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_epiphany/04.php');
	space();

	hour('2V');
	vrS('Ord/dirigatur_domine_oratio_mea.php',0);
	ant('prTemp/post_epiphany/04m.php','M');

?>
