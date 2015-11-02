<?php
space();
head('Mense Octobri','Month of October',2);

/******************************* LATINA **************************************/
$l3 = ['c|Sermo sancti Bernárdi Abbátis',
		'cr|Sermo in cap. 12 Apocalypsis ante medium',
		'cr|3',
		'Amplectámur Maríæ vestígia, fratres mei, et devotíssima supplicatióne beátis illíus pédibus provolvámur. Teneámus eam nec dimittámus, donec benedíxerit nobis; potens est enim. Nempe vellus est médium inter rorem et áream: múlier inter solem et lunam: María inter Christum et Ecclésiam constitúta. Sed forte miráris, non tam vellus opértum rore, quam amíctam sole mulíerem. Magna síquidem familiáritas, sed mira omníno vicínitas solis et mulíeris. Quómodo enim in tam veheménti fervóre tam frágilis natúra subsístit? Mérito quidem admiráris, Móyses sancte, et curiósius desíderas intuéri. Verúmtamen solve calceaménta de pédibus tuis, et involúcra pone carnálium cogitatiónum, si accédere concupíscis.'];

/******************************* ENGLISH **************************************/
$e3 = ['c|From the Sermons of St. Bernard the Abbot',
		'cr|3',
		'Let us follow close in Mary’s footsteps, my brethren, and cast ourselves at her blessed feet in earnest supplication. Let us hold fast to her and say: I will not let thee go, except thou bless me: for she is mighty. We read of the fleece in the threshing-floor, how it gathered the dew, because it was between the hard earth and the dew of heaven. We read also of the woman with the moon under her feet, clothed with the glory of the sun’s rays, because she was between the sun and the moon. And so is Mary set betwixt Christ and his Church. Perchance to thee the fleece covered with dew is not so great a marvel as the woman clothed with the sun. To speak of her as standing up against the sun is wonderful enough, but to say that she is clothed with its very flames, like the burning bush, is more wonderful still. How can one so frail exist in such terrible fire? Thou, O blessed Moses, didst wonder and wast filled with desire to gaze more closely. Put off the shoes from thy feet! Lay aside the earthliness of worldly desires, if thou wouldst draw nigh to this mystery.'];

/******************************* CODE **************************************/
ant('Matins/bvm_n1b3_per_virginem_matrem.php','b');
lectio($l3,$e3);
rubrics('te_deum.php');

?>
