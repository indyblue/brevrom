<?php
	space();
	rubp('Si sequens dominica fuerit ultima post Pentecosten, ejus loco ponitur dominica XXIV ut infra, <snr>p. '.bkref('PostPent24').'</s>, et Officium dominicæ XXIII prætermittitur.', 'If the following Sunday is the last one after Pentecost, in this place the twenty-fourth Sunday is said, as below, <snr>p. '.bkref('PostPent24').'</s>, and the Office of the twenty-third Sunday is omitted.');
	space();
	hidden('After Pentecost',1);
	hidden('Twenty-third Sunday',2);
	head_temp(2,'Dominica XXIII Post Pentecosten', 'Twenty-third Sunday After Pentecost');

	rubrics('antiphona_ad_magnif_quae_contingit.php');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_pentecost/230.php');
	space();

	$matins = $_GET['matins-l'];
if($matins) {

	hour('M');
$cap1 = '9, 18-26';
/******************************* LATINA **************************************/
$l1 = ['c|Léctio sancti Evangélii secúndum Matthǽum',
		"lr|3|Cap. $cap1",
		'In illo témpore: Loquénte Jesu ad turbas, ecce princeps unus accésit et adorábat eum dicens: Dómine, fília mea modo defúncta est.  Et réliqua.',
		'c|Homilía sancti Hierónymi Presbýteri',
		'cr|Liber 1 Comment. in cap. 9 Matthæi',
		'Octávum signum est, in quo princeps suscitári póstulat fíliam suam, nolens de mystério veræ circumcisiónis exclúdi: sed subíntrat múlier sánguine fluens, et octávo sanátur loco; ut príncipis fília de hoc exclúsa número, véniat ad nonum, juxta illud quod in Psalmis dícitur: Æthiópia prævéniet manus ejus Deo; et, Cum intráverit plenitúdo Géntium, tunc omnis Ísraël salvus fiet.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Holy Gospel according to Matthew',
		"cl|3|Chap. $cap1",
		'At that time: While Jesus spake these things unto John’s disciples, behold there came a certain ruler, and worshipped him, saying: My daughter is even now dead.  And so on, and that which followeth.',
		'c|A Homily by St. Jerome the Priest',
		'cr|Book 1 Comment. in chap. 9 of Matthew',
		'The eighth recorded miracle should have been that which was wrought when a certain ruler, desiring not to be kept out of the mystery of the true Circumcision, besought Christ to recall his daughter to life.  But a woman, which was diseased with an issue of blood, thrust herself in, and so her cure occupieth the eighth place, for which reason the raising of the ruler’s daughter is postponed and made the ninth in enúmeration, even as it is written in the Psalms: The Morian’s land shall soon stretch out her hands unto God.  And again: Until the fulness of the Gentiles be come in; and so all Israel shall be saved.'];

/******************************* CODE **************************************/
ant('Matins/dom_b3_per_evangelica_dicta.php','b');
space();
lectio($l1, $e1);
rubrics('te_deum.php');
space();
}

	hour('L');
	vrS('Ord/dominus_regnavit_decorem_induit.php',0);
	ant('prTemp/post_pentecost/230b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_pentecost/230.php');
	space();

	hour('2V');
	vrS('Ord/dirigatur_domine_oratio_mea.php',0);
	ant('prTemp/post_pentecost/230m2.php','M');

?>
