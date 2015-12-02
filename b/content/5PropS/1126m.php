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
		'Silvéster, Áuximi in Picéno nóbili génere ortus, puerílem ætátem lítteris ac bonis móribus mirífice exornávit. Sacris lítteris rite imbútus et canónicus factus, exémplo et sacris conciónibus pópulo opem tulit. Inter funus nóbilis cujúsdam defúncti, in apérto túmulo formósi viri suíque propínqui defórme cadáver conspíciens: Ego, inquit, sum, quod hic fuit; quod hic est, ego ero. Et mox in solitúdinem, majóris perfectiónis stúdio, secéssit, ibíque vigíliis, oratiónibus jejuniísque déditus fuit. Ut autem magis láteret hómines, várias mutávit sedes, ac tandem ad montem Fanum, locum eo témpore desértum, in honórem sancti Benedícti templum eréxit, congregatiónisque Silvestrinórum fundaménta jecit. Ibi mira sanctitáte mónachis præfúlsit; spíritu prophetíæ, potestáte in dǽmones aliísque donis enítuit, quæ semper profúnda humilitáte conservávit. Obdormívit in Dómino, anno salútis millésimo ducentésimo sexagésimo séptimo.'];

/******************************* ENGLISH **************************************/
$e1 = ['cr|3',
		''];

/******************************* CODE **************************************/
ant('Matins/n3b3_ad_societatem.php','b');
lectio($l1, $e1);
rubrics('te_deum.php');
space();
?>
