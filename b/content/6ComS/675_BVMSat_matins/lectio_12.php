<?php
space();
head('Mense Decembri','Month of December',2);

/******************************* LATINA **************************************/
$l3 = ['c|Ex libro Officiórum sancti Ambrósii Epíscopi',
		'cr|Liber 1, cap. 18',
		'cr|3',
		'Bonus regéndæ castitátis pudor est comes, qui primus, in ipso cognitiónis ingréssu, Dómini Matrem comméndat legéntibus, et tamquam testis lócuples dignam quæ ad tale munus eligerétur ástruit : quod in cubículo, quod sola, quod salutáta ab Angelo tacet et mota est in intróitu ejus, quod ad virílis sexus spéciem peregrínam turbátur aspéctus Vírginis.  Itaque, quamvis esset húmilis præ verecúndia tamen non resalutávit, nec ullum respónsum rétulit, nisi ubi de suscipiénda Dómini generatióne cognóvit ; ut qualitátem efféctus dísceret, non ut sermónem refélleret.'];

/******************************* ENGLISH **************************************/
$e3 = ['c|From the Book on Duties by St. Ambrose the Bishop',
		'cr|3',
		'Modesty is a good comrade, for she is the guardian of chastity.  And it is modesty that commendeth  the Mother of the Lord to all who read the Gospels.  Yea, like a reliable witness, modesty giveth proof that the Mother of the Lord was not unworthy of so much dignity.  We read that she was in her chamber, that she was alone, that she was silent at the Angel’s greeting and troubled at his entrance.  The maiden was timid at this sudden appearance of one in the form of a man.  She was humble enough to wish to answer a greeting, but her modesty made her silent.  Therefore she answered not at all, until she heard that she was to be the Mother of the Lord.  Then she spake, not to call his word into question, but only to learn further of God’s will : How can this be, seeing that I know not a man?'];

/******************************* CODE **************************************/
ant('Matins/bvm_n1b3_per_virginem_matrem.php','b');
lectio($l3,$e3);
rubrics('te_deum.php');

?>
