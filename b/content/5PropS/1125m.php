<?php
	$matins = $_GET['matins-l'];
if($matins) {
space();
hour('M',2);

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
		'Catharína, nóbilis virgo Alexandrína, liberálium ártium stúdia cum fídei ardóre conjúngens, cum multos Christiános Maximíni jussu ad supplícium rapi vidéret, ipsum ádiit Maximínum, eíque Christi fidem ad salútem esse necessáriam strénue affirmávit. Ejus prudéntiam admirátus, tyránnus retinéri eam jubet; et, accersítis úndique doctíssimis homínibus, ei persuadére studet, ut ad idolórum cultum se convértat. Sed contra áccidit; plures enim ex iis viris, sapientíssimis ratiónibus a Catharína convícti, Christi fidem sunt ampléxi et pro ea mori non dubitárunt. Quam ob rem Maximínus blandítiis primum, deínde torméntis Catharínam de senténtia dedúcere aggréditur; sed, cum nihil profíceret, eam secúri pércuti ímperat.'];

/******************************* ENGLISH **************************************/
$e1 = ['cr|3',
		''];

/******************************* CODE **************************************/
ant('Matins/n3b3_ad_societatem.php','b');
lectio($l1, $e1);
rubrics('te_deum.php');
space();
}
?>
