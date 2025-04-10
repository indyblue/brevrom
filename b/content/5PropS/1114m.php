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
		'Jósaphat Kuncewítius, nobílibus et cathólicis paréntibus Vladimíriæ in Volhínia natus, cum puérulus matrem de Christi passióne loquéntem audíret, jáculo e látere imáginis Christi crucifíxi immísso, vulnus in corde suscépit. Vicénnis inter claustráles sancti Basilíi alúmnos régulam monásticam proféssus est. Mox Vilnénsis archimandríta, demum archiepíscopus Polocénsis renuntiátus, se prǽbuit ómnium virtútum exémplar. Strénuus promótor éxstitit uniónis Ecclésiæ Græcæ cum Latína, et in sinum matris Ecclésiæ innúmeros hæréticos revocávit. Vitépscum pastorális visitatiónis grátia proféctus, et a schimáticis ad necem quæsítus, ipsis archiepiscopáles ædes jam invadéntibus, sponte occúrrens: Filíoli, inquit, si quid contra me habétis, ecce adsum. Hinc, ímpetu facto, eum verbéribus contúndunt, telis confódiunt et, secúri necátum, in flumen projíciunt. Sanguis Mártyris parricídis ipsis in primis prófuit, qui fere omnes, cápitis damnáti, ejuráto schísmate, scelus detestáti sunt. Urbánus Papa octávus eum Beatórum honóribus decorávit; Pius autem nonus hunc ecclesiásticæ unitátis assertórem, primum ex orientálibus, Sanctórum órdini accénsuit.'];

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
