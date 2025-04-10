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
		'Elísabeth, Andréæ regis Hungáriæ fília, ab infántia timére Deum cœpit: et, crescens ætáte, crevit étiam pietáte. Ludovíco Lantgrávio Hássiæ et Thuríngiæ in cónjugem copuláta, non minóri cura, quæ Dei quam quæ viri sui erant, exsequebátur. Oratióni assídue incúmbens et misericórdiæ opéribus dédita, víduis, pupíllis, ægrótis, egéntibus sédulo inserviébat, in quorum étiam levámen insígne xenodochíum constrúxit. Defúncto cónjuge, ut Deo libérius servíret, vili túnica indúta est, atque, órdinem Pœniténtium sancti Francísci ingréssa, patiéntiæ et humilitátis virtúte máxime enítuit. Nam bonis ómnibus exúta, a própriis dómibus ejécta, ab ómnibus derelícta, contumélias, irrisiónes, obtrectatiónes invícto ánimo tolerávit, ádeo ut summópere gaudéret se tália pro Deo pati. Cum tandem in sanctis opéribus vitam religiosíssime transegísset, obdormívit in Dómino. Eam, miráculis claram, Gregórius nonus in Sanctórum númerum rétulit.'];

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
