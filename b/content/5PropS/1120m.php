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
		'Felix, Hugo ántea dictus, ex regáli Valesiórum família ortus in Gállia, ab adolescéntia cœpit cæléstis contemplatiónis stúdio solitúdinem cogitáre. Sacérdos factus, in erémum secéssit, ubi cum sancto Joánne de Matha per áliquot annos vixit, donec ambo, per Ángelum a Deo admóniti, Romam petiérunt, ubi a summo Pontífice Innocéntio tértio, cǽlitus item admónito, approbatiónem novi órdinis ad rediméndos captívos obtinuérunt; quem ex cándidis véstibus, bicolóri cruce signátis, ab Ángelo accéptis, idem Póntifex, sanctíssimæ Trinitátis nómine decorávit. Mox in diœcési Meldénsi apud locum, qui Cervus Frígidus dícitur, primum órdinis cœnóbium exstruxérunt. Illústrem ibi Felix a beáta Vírgine María favórem accépit, cum eam in médio chori, hábitu cruce órdinis insigníto indútam, réperit. Ætáte ac méritis consummátus, óbiit in Dómino, anno ducentésimo duodécimo supra millésimum.'];

/******************************* ENGLISH **************************************/
$e1 = ['cr|3',
		''];

/******************************* CODE **************************************/
ant('Matins/n3b3_ad_societatem.php','b');
lectio($l1, $e1);
rubrics('te_deum.php');
space();
?>
