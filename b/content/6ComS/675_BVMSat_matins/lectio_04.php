<?php
space();
head('Mense Aprili','Month of April',2);

/******************************* LATINA **************************************/
$l3 = ['c|De Expositióne sancti Hierónymi Presbýteri in Ezechiélem Prophétam',
		'cr|Lib. 13, in cap. 44',
		'cr|3',
		'Porta hæc clausa erit, et non aperiétur.  Pulchre quidam portam clausam, per quam solus Dóminus Deus Ísraël ingréditur, et dux cui porta clausa est, Maríam Vírginem intélligunt, quæ et ante partum et post partum virgo permánsit.  Étenim témpore, quo Ángelus loquebátur: Spíritus Sanctus véniet super te, et virtus Altíssimi obumbrábit te: quod autem nascétur ex te Sanctum, vocábitur Fílius Dei; et quando natus est, virgo permánsit ætérna; ad confundéndos eos, qui arbitrántur eam post nativitátem Salvatóris habuísse de Joseph fílios, ex occasióne fratrum ejus, qui vocántur in Evangélio.'];

/******************************* ENGLISH **************************************/
$e3 = ['c|From the Commentary on the Prophet Ezekiel by St. Jerome the Priest',
		'cr|3',
		'This gate shall be shut, it shall note be opened.  It is a beautiful thought (as some have understood this passage) to interpret this closed gate as the Virgin Mary, who both before and after childbearing was the Ever-Virgin.  For Ezekiel saith: No man shall enter in by this gate because the Lord, the God of Israel, hath entered in by it: it is for the Prince.  And because the gate is his, for his sake it is kept closed.  Concerning the childbearing of that Virgin, the Angel said: The Holy Ghost shall come upon thee, and the power of the Highest shall overshadow thee; therefore also that Holy Thing which shall be born of thee shall be called the Son of God.  And we know that after childbearing she remained the Ever-Virgin.  And thus we refute those who think that because the brethren of the Lord are mentioned in the Gospel, she bore children to Joseph after the Saviour’s birth.'];

/******************************* CODE **************************************/
ant('Matins/bvm_n1b3_per_virginem_matrem.php','b');
lectio($l3,$e3);
rubrics('te_deum.php');

?>
