<?php
space();
head('Mense Martio','Month of March',2);

/******************************* LATINA **************************************/
$l3 = ['c|Ex libro sancti Irenǽi Epíscopi et Mártyris advérsus hǽreses',
		'cr|Liber 5, c. 19',
		'cr|3',
		'In sua própria veniénte Dómino et sua própria eum bajulánte conditióne, quæ bajulátur ab ipso, et recapitulatiónem ejus quæ in ligno fuit inobediéntiæ, per eam quæ in ligno est obediéntiam, faciénte, et seductióne illa solúta, qua sedúcta est male illa, quæ jam viro destináta erat, virgo Heva; per veritátem evangelizáta est bene ab Ángelo jam sub viro Virgo María.  Quemádmodum enim illa per Angélicum sermónem sedúcta est, ut effúgeret Deum, prævaricáta verbum ejus: ita et hæc per Angélicum sermónem evangelizáta est, ut portáret Deum, obédiens ejus verbo.  Et sicut illa sedúcta est, ut effúgeret Deum; sic hæc suása est obedíre Deo, ut vírginis Hevæ Virgo María fíeret advocáta.  Et quemádmodum adstríctum est morte genus humánum per vírginem, solvátur per Vírginem: æqua lance dispósita virginális inobediéntia per Virginálem obediéntiam.'];

/******************************* ENGLISH **************************************/
$e3 = ['c|From the Book against Jovinian by St. Jerome the Priest',
		'cr|3',
		'When the Lord came unto his own (for all things were made by him, and so were his), one whom he had made gave him birth.  In him all things consist, and this creation, which he thus sustaineth, was the very same which gave him sustenance.  He was obedient, even unto death, upon the Tree, and thereby he did away with that act of disobedience which came from a tree.  Eve, a virgin espoused to an husband, hearkened to evil counsel brought by the serpent, and was drawn by his subtlety into a snare.  Now, however, the snare is broken, and we are delivered; for Mary the Virgin, espoused to an husband, gave her ear to good tidings brought by the Angel.  Eve, by the subtlety of an angel, was tempted to flee from God, and giving heed to his evil counsel, transgressed God’s commandment.  But Mary, by the message of the Angel, was asked to receive God into herself; and, giving heed thereto, gave herself in obedience to God’s Word.  Thus can the Maiden Mary plead for the maiden Eve; for even as the latter was seduced from God, so the former was surrendered in obedience to him.  Even as by a virgin mankind was deceived into a snare which was a deathtrap, so by the Virgin the snare was broken and we are delivered.  For virgin-obedience was weighed in the balance with virgin-disobedience.'];

/******************************* CODE **************************************/
ant('Matins/bvm_n1b3_per_virginem_matrem.php','b');
lectio($l3,$e3);
rubrics('te_deum.php');

?>
