<?php
space();
head('Mense Majo','Month of May',2);

/******************************* LATINA **************************************/
$l3 = ['c|Ex Tractátu sancti Augustíni Epíscopi de Sýmbolo ad Catechúmenos',
		'cr|Lib. 3, cap. 4, in fine',
		'cr|3',
		'Per féminam mors, per féminam vita: per Hevam intéritus, per Maríam salus.  Illa, corrúpta, secúta est seductórem: hæc, íntegra, péperit Salvatórem.  Illa póculum a serpénte propinátum libénter accépit et viro trádidit, ex quo simul mereréntur occídi: hæc, grátia cælésti désuper infúsa, vitam prótulit, per quam caro mórtua possit resuscitári.  Quis est qui hæc operátus est, nisi Vírginis Fílius et vírginum Sponsus, qui áttulit Matri fecunditátem, sed non ábstulit integritátem?'];

/******************************* ENGLISH **************************************/
$e3 = ['c|From the Treatise on the Creed, addressed to Catechumens by St. Augustine the Bishop',
		'cr|3',
		'As by a woman came death, so by a woman came life.  As by Eve destruction was brought, so by Mary was wrought salvation.  The former followed the deceiver and was corrupted.  The latter remained ínviolate and gave birth to the Saviour.  The former willingly accepted what was proffered by the serpent, and gave the same to her husband, and both of them thereby incurred the penalty of death.  The latter willingly accepted the grace of heaven above, and brought forth the Life, which is able to quicken even the bodies of the dead.  And who is the worker of this change?  Even he that is the Son of the Virgin and the Spouse of virgins, the same that brought fruitfulness to his Mother without hurt to her virginity.'];

/******************************* CODE **************************************/
ant('Matins/bvm_n1b3_per_virginem_matrem.php','b');
lectio($l3,$e3);
rubrics('te_deum.php');

?>
