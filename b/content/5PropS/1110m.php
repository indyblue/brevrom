<?php
space();
hour('M');

/*
%s/<\_[^>]*>//eig | %s/&nbsp;/ /eig
\v<[^aeiouyæœëAEIOUYÆŒ]{-}(([Aa][Uu]|[qgQG][Uu][aeiouyæœëAEIOUYÆŒ]|[aeiouyæœëAEIOUYÆŒ])[^aeiouyæœëAEIOUYÆŒ]{-}){,2}>|<\k*[áéíóúýǽœ́ǼÁÉÍÓÚÝ]\k*>
\<[a-zA-ZæœëÆŒ]*[áéíóúýǽœ́ǼÁÉÍÓÚÝ][a-zA-ZæœëÆŒ]*[áéíóúýǽœ́ǼÁÉÍÓÚÝ][a-zA-ZæœëÆŒ]*\>
 [;:?!]
æǽ œœ́ áéíóúý m̃
ÆǼ ŒŒ́ ÁÉÍÓÚÝ
lions’
*/

/******************************* LATINA **************************************/
$l1 = ['cr|3',
		'Andréas Avellínus, dictus ante Lancellóttus, apud Castrum Novum Lucániæ natus, Neápoli láuream jurisprudéntiæ adéptus et sacerdótio auctus, causárum patrocínia, in foro dumtáxat ecclesiástico, ágere cœpit. Sed, cum aliquándo inter causam agéndam leve ei mendácium excidísset et in ea Scriptúræ verba incidísset: Os, quod mentítur, occídit ánimam; ejus culpæ dolóre corréptus forénsibus curis valedíxit atque, ut inter Cléricos reguláres adscriberétur supplíciter postulávit. Voti compos factus, ob ingéntem, quo æstuábat, crucis amórem, ut sibi Andréæ nomen imponerétur, précibus impetrávit. Abstinéntia et patiéntia, nec non abjectióne atque ódio sui summópere prǽstitit. Clericórum regulárium órdinem mirífice propagávit. Deíparam Vírginem singulári amóre et cultu prosequebátur. Post heróica virtútem exémpla, annis gravis et fractus labóribus. Missam celebratúrus, in verbis illis tértio repetítis: Introíbo ad altáre Dei, apopléctico morbo corréptus, mox sacraméntis munítus, plácide exspirávit.'];

/******************************* ENGLISH **************************************/
$e1 = ['cr|3',
		'asdf'];

/******************************* CODE **************************************/
ant('Matins/n3b3_ad_societatem.php','b');
lectio($l1, $e1);
rubrics('te_deum.php');
space();
?>
