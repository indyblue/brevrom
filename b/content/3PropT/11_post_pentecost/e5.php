<?php
	space();
	head('Dominica V quæ Superfuit', 'Fifth Resumed Sunday',2);
	head('II classis', 'II class',5);

	rubrics('antiphona_ad_magnif_quae_contingit.php');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_epiphany/05.php');
	space();

	$matins = $_GET['matins-l'];
if($matins) {
	hour('M');
$cap1 = '13, 24-30';
/******************************* LATINA **************************************/
$l1 = ['c|Léctio sancti Evangélii secúndum Matthǽum',
		"lr|3|Cap. $cap1",
		'In illo témpore: Dixit Jesus turbis parábolam hanc: Símile factum est regnum cælórum hómini, qui seminávit bonum semen in agro suo. Et réliqua.',
		'c|Homilía sancti Augustíni Epíscopi',
		'cr|Liber Quæst. Evang. in Matth. cap. 11, tom. 4',
		'Cum negligéntius ágerent præpósiti Ecclésiæ, aut cum dormitiónem mortis accíperent Apóstoli, venit diábolus, et superseminávit eos, quos malos fílios Dóminus interpretátur. Sed quǽritur: utrum hærétici sint, an male vivéntes cathólici? Possunt enim dici fílii mali étiam hærétici, quia ex eódem Evangélii sémine, et Christi nómine procreáti, pravis opiniónibus ad falsa dógmata convertúntur.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Holy Gospel according to Matthew',
		"cl|3|Chap. $cap1",
		'At that time: Jesus spake this parable unto the multitudes: The Kingdom of heaven is likened unto a man which sowed good seed in his field.  And so on, and that which followeth.',
		'c|A Homily by St. Augustine the Bishop',
		'cr|Book Quæst. Evang. in Matth. cap. 11, tom. 4',
		'In this parable the Lord hath reference to the time when the Shepherds of the Church should begin to wax careless, (or, it may be, to the time when the Apostles should fall asleep in the sleep of death,) at which time, the devil would come and sow that which the Lord calleth a seed of evil-doers.  Now, is this seed of evil-doers a reference to hereticks or to Catholics of bad lives?  It certainly is not unjust to call the hereticks a seed of evil-doers, seeing that they have sprung up from the seed of the Gospel, and have been begotten in the Name of Christ, and afterwards have turned into crooked ways and lying doctrines.'];

/******************************* CODE **************************************/
ant('Matins/dom_b3_per_evangelica_dicta.php','b');
space();
lectio($l1, $e1);
rubrics('te_deum.php');
space();
}
	hour('L');
	vrS('Ord/dominus_regnavit_decorem_induit.php',0);
	ant('prTemp/post_epiphany/05b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_epiphany/05.php');
	space();

	hour('2V');
	vrS('Ord/dirigatur_domine_oratio_mea.php',0);
	ant('prTemp/post_epiphany/05m.php','M');

?>
