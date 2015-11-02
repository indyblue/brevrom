<?php
space();
head('Mense Novembri','Month of November',2);

/******************************* LATINA **************************************/
$l3 = ['c|De Expositióne sancti Basilíi Epíscopi in Isaíam Prophétam',
		'cr|In cap. 8 post initium',
		'cr|3',
		'Accéssi, inquit, ad prophetíssam, et in útero accépit et péperit fílium.  Quod María prophetíssa fúerit, ad quam próxime accéssit Isaías per prænotiónem spíritus, nemo contradíxerit, qui sit memor verbórum Maríæ, quæ prophético affláta spíritu elocúta est.  Quid enim ait?  Magníficat ánima mea Dóminum: et exsultávit spíritus meus in Deo, salutári meo.  Quia respéxit humilitátem ancíllæ suæ: ecce enim ex hoc beátam me dicent omnes generatiónes.  Quod si ánimum accommodáveris univérsis ejus verbis, non útique per dissídium negáveris eam fuísse prophetíssam, quod Dómini Spíritus in eam supervénerit, et virtus Altíssimi obumbráverit ei.'];

/******************************* ENGLISH **************************************/
$e3 = ['c|From the Exposition of the Prophet Isaiah by St. Basil the Bishop',
		'cr|3',
		'I went unto the prophetess, saith Isaiah, and she conceived and bore a son.  That prophetess whom he went unto, and concerning whom he prophesied, maketh us mindful of Mary our Prophetess.  Remember ye not her prophecy?  My soul doth magnify the Lord, and my spirit hath rejoiced in God my Saviour, for he hath regarded the lowliness of his handmaiden; for behold from henceforth all generations shall call me blessed.  Study closely all that she said, and then thou shalt not be able to deny that Mary was a prophetess.  For the Holy Ghost came upon her, and the power of the Highest overshadowed her.'];

/******************************* CODE **************************************/
ant('Matins/bvm_n1b3_per_virginem_matrem.php','b');
lectio($l3,$e3);
rubrics('te_deum.php');

?>
