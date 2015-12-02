<?php
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
$l1 = ['c|Ex libro sancti Joánnis Damascéni de fide orthodóxa',
	'cr|Liber 4, cap. 15',
	'cr|3',
		'Jóachim lectíssimam illam ac summis láudibus dignam mulíerem Annam matrimónio sibi copulávit. Verum, quemádmodum prisca illa Anna, cum sterilitátis morbo laboráret, per oratiónem ac promissiónem Samúelem procreávit: eódem modo haec étiam per obsecratiónem et promissiónem Dei Genitrícem a Deo accépit, ut ne hic quoque cuiquam ex illústribus matrónis céderet. Ítaque grátia (nam hoc sonat Annæ vocábulum) Dóminam parit (id enim Maríæ nómine significátur): vere étenim rerum ómnium conditárum Dómina facta est, cum Creatóris Mater éxstitit In lucem autem éditur in domo probáticæ Jóachim, atque ad templum addúcitur: ac deínde in domo Dei plantáta, atque per Spíritum sagináta, instar olívæ frugíferæ virtútum ómnium domicílium effícitur: ut quæ vidélicet ab omni hujúsce vitæ et carnis concupiscéntia mentem abstraxísset, atque ita vírginem una cum córpore ánimam conservásset, ut eam decébat, quæ Deum sinu suo exceptúra erat.'];

/******************************* ENGLISH **************************************/
$e1 = ['cr|3',
		''];

/******************************* CODE **************************************/
ant('Matins/n3b3_ad_societatem.php','b');
lectio($l1, $e1);
rubrics('te_deum.php');
space();
?>
