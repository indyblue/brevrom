<?php
	space();
	head('Dominica VI quæ Superfuit', 'Sixth Resumed Sunday',2);
	head('II classis', 'II class',5);

	rubrics('antiphona_ad_magnif_quae_contingit.php');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_epiphany/06.php');
	space();

	hour('M');
$cap1 = '13, 31-35';
/******************************* LATINA **************************************/
$l1 = ['c|Léctio sancti Evangélii secúndum Matthǽum',
		"lr|3|Cap. $cap1",
		'In illo témpore: Dixit Jesus turbis parábolam hanc: Símile est regnum cælórum grano sinápis, quod accípiens homo seminávit in agro suo. Et réliqua.',
		'c|Homilía sancti Hierónymi Presbýteri',
		'cr|Liber 2 Comment. in cap. 13 Matthæi',
		'Regnum cælórum prædicátio Evangélii est, et notítia Scripturárum, quæ ducit ad vitam, et de qua dícitur ad Judǽos: Auferétur a vobis regnum Dei, et dábitur genti faciénti fructus ejus. Símile est ergo hujuscémodi regnum grano sinápis, quod accípiens homo seminávit in agro suo. Homo qui séminat in agro suo, a plerísque Salvátor intellígitur, quod in ánimis credéntium séminet: ab áliis ipse homo séminans in agro suo, hoc est in semetípso, et in corde suo.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Holy Gospel according to Matthew',
		"cl|3|Chap. $cap1",
		'At that time: Jesus spake this parable unto the multitudes: The kingdom of heaven is like to a grain of mustard seed, which a man took, and sowed in his field.  And so on, and that which followeth.',
		'c|A Homily by St. Jerome the Priest',
		'cr|Book 2 Comment. in chap. 13 of Matthew',
		'The kingdom of heaven is the proclamation of the Gospel, and that knowledge of the Scriptures, which leadeth unto life, and whereof it is said to the Jews, The kingdom of God shall be taken from you, and given to a nation bringing forth the fruits thereof.  Therefore is this kingdom like to a grain of mustard seed, which a man took and sowed it in his field.  By the man that sowed it in his field, many understand to be meant the Saviour, because he is the Sower that soweth in the souls of believers; others understand every man that soweth good seed in his own field, that is, in himself and in his own heart.'];

/******************************* CODE **************************************/
ant('Matins/dom_b3_per_evangelica_dicta.php','b');
space();
lectio($l1, $e1);
rubrics('te_deum.php');
space();

	hour('L');
	vrS('Ord/dominus_regnavit_decorem_induit.php',0);
	ant('prTemp/post_epiphany/06b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_epiphany/06.php');
	space();

	hour('2V');
	vrS('Ord/dirigatur_domine_oratio_mea.php',0);
	ant('prTemp/post_epiphany/06m.php','M');

?>
