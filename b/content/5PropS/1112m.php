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
		'Martínus, Tudérti in Úmbria natus, inítio pontificátus, et lítteris et legatiónibus missis óperam dedit, ut ad cathólicam veritátem revocáret Paulum Constantinopolitánum hæréticum, qui, Constánte imperatóre fretus, vel ipsos apostólicæ Sedis legátos várias in ínsulas relegáverat. Hoc scélere commótus Póntifex, coácto Romæ concílio centum quinque episcopórum, eum condemnávit. Quo duránte concílio, imperátor in Itáliam Olýmpium exárchum misit, qui summum Pontíficem extrúderet. Verum cum Olýmpius nullum Martíno malum inférre potuísset, et mox misérrime decessísset; Theodórus Callíopas, jussu imperatóris, basílica Lateranénsi próximisque pontificálibus ǽdibus occupátis, Martínum vi captum primo in ínsulam Naxum relegávit, dein Constantinópolim perdúxit. Ibi sanctus Póntifex, in víncula conjéctus, ludíbria et contumélias expértus est, donec pulsus in Chersonésum, ob cathólicam fidem ærúmnis et inópia conféctus, cessit e vita, pontificátus sui anno octávo incépto. Ejus corpus, Romam póstea translátum, in ecclésia cónditum est, quæ sanctórum Silvéstri et Martíni nómine dedicáta est.'];

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
