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
		'Ex locis sacris, quæ ab inítio apud Christiános veneratiónem habuérunt, insígnis semper hábita est Conféssio sancti Petri in Vaticánis, Príncipis Apostolórum sepúlcro consecráta. Illuc Constantínus Magnus perrexísse tráditur, et sumpto ligóne ac bidénte terram eruísse, ac locum designásse basílicæ, quam suis súmptibus ipse ædificávit. Eam sanctus Silvéster Papa décimo quarto Kaléndas Decémbris dedicávit, et ex eo témpore præscrípsit, ne deínceps altária nisi ex lápide fíerent. Quam, vetustáte jamprídem collabéntem, ac multórum Pontíficum pietáte magnificéntius a fundaméntis eréctam, Urbánus octávus eádem die, anno millésimo sexcentésimo vigésimo sexto, solémniter dedicávit. Itémque basílicam sancti Pauli Apóstoli, in via Ostiénsi ab eódem Constantíno imperatóre sumptuosíssime exstrúctam, et a sancto Silvéstro Papa item consecrátam, ac, diro incéndio consúmptam, indeféssa quátuor Pontíficum cura splendídius quam ántea eréctam; Pius nonus, auspicatíssimam nactus occasiónem definitiónis dógmatis de immaculáta beátæ Vírginis Maríæ Conceptióne, solémni antístitum coróna circúmdatus, consecrávit.'];

/******************************* ENGLISH **************************************/
$e1 = ['cr|3',
		''];

/******************************* CODE **************************************/
ant('Matins/n3b3_ad_societatem.php','b');
lectio($l1, $e1);
rubrics('te_deum.php');
space();
?>
