<?php
	space();
	bookmark('PostPent24');
	hidden('After Pentecost',1);
	hidden('Twenty-fourth Sunday',2);
	head_temp(2,'Dominica XXIV <r>et</s> Ultima Post Pentecosten', 'Twenty-fourth <r>and</s> Final Sunday After Pentecost');

	rubrics('antiphona_ad_magnif_quae_contingit.php');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_pentecost/240.php');
	space();

	hour('M');
$cap1 = '24, 15-35';
/******************************* LATINA **************************************/
$l1 = ['c|Léctio sancti Evangélii secúndum Matthǽum',
		"lr|3|Cap. $cap1",
		'In illo témpore: Dixit Jesus discípulis suis: Cum víderit abominatiónem desolatiónis, quæ dicta est a Daniéle prophéta, stantem in loco sancto: qui legit, intélligat. Et réliqua.',
		'c|Homilía sancti Hierónymi Presbýteri',
		'cr|Liber 4 Comment. in cap. 24 Matthæi',
		'Quando ad intelligéntiam provocámur, mýsticum monstrátur esse quod dictum est. Légimus autem in Daniéle hoc modo: Et in dimídio hebdómadis auferétur sacrifícium et libámina; et in templo abominátio desolatiónum erit, usque ad consummatiónem témporis, et consummátio dábitur super solitúdinem. De hoc et Apóstolus lóquitur, quod homo iniquitátis, et adversárius elevándus sit contra omne quod dícitur Deus et cólitur; ita ut áudeat stare in templo Dei, et osténdere quod ipse sit Deus: cujus advéntus secúndum operatiónem sátanæ déstruat eos, et ad Dei solitutúdinem rédigat, qui se suscéperint.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Holy Gospel according to Matthew',
		"cl|3|Chap. $cap1",
		'At that time: Jesus said unto his disciples: When ye therefore shall see the abomination of desolation, spoken of by Daniel the Prophet, stand in the Holy Place―whoso readeth, let him understand.  And so on, and that which followeth.',
		'c|A Homily by St. Jerome the Priest',
		'cr|Book 4 Comment. in chap. 24 of Matthew',
		'This injunction to whoso readeth, to understand, sheweth that there is here something mysterious.  In Daniel we read as followeth: And in the midst of the week the sacrifice and the oblations shall be taken away; and in the temple there shall be the abomination of desolation, even until the consummation of the time; and a consummation shall be given to the desolation.  It is of this same thing that the Apostle speaketh, when he saith that a man of iniquity, even an adversary, shall be exalted against whatsoever is called God, or is worshipped: so that he shall even dare to stand in the temple of God, and to shew himself as God; whose coming shall, according to the working of Satan, destroy and banish from God all who shall receive him.'];

/******************************* CODE **************************************/
ant('Matins/dom_b3_per_evangelica_dicta.php','b');
space();
lectio($l1, $e1);
rubrics('te_deum.php');
space();

	hour('L');
	vrS('Ord/dominus_regnavit_decorem_induit.php',0);
	ant('prTemp/post_pentecost/240b.php','B');
	prayer('prTemp/post_pentecost/240.php');
	space();

	hour('2V');
	vrS('Ord/dirigatur_domine_oratio_mea.php',0);
	ant('prTemp/post_pentecost/240m2.php','M');

?>
