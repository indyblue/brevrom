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
$l1 = ['cr|3',
		'Gertrúdis, Islébii in Saxónia nata, quinquénnis in monastério Elpidiénsi, órdinis sancti Benedícti, virginitátem suam ac seípsam Jesu Christo óbtulit. Sanctam Mechtíldem magístram hábuit, qua duce ad altíssima contemplatiónis dona pervénit. Erga diviníssimum Eucharístiæ sacraméntum et passiónem Dómini tanta caritáte æstuábat, ut, ea recógitans, ubéribus lácrimis perfunderétur. Multa ad confovéndam pietátem scripsit. Divinárum étiam revelatiónum et prophetíæ dono cláruit. Dénique, flagrantíssimo Dei amóre pótius quam morbo languéscens, vita decéssit, miráculis vivens et post mortem illústris.'];

/******************************* ENGLISH **************************************/
$e1 = ['cr|3',
		''];

/******************************* CODE **************************************/
ant('Matins/n3b3_ad_societatem.php','b');
lectio($l1, $e1);
rubrics('te_deum.php');
space();
?>
