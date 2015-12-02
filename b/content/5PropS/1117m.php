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
		'Gregórius, Neocæsaréæ Ponti epíscopus, sanctitáte doctrináque illústris, signis vero ac miráculis multo illústrior, quorum multitúdine atque præstántia Thaumatúrgus appellátus est, et sancti Basilíi testimónio cum Móyse, Prophétis et Apóstolis comparátus; montem, qui ecclésiæ ædificatiónem impediébat, oratióne álio tránstulit. Item palúdem, inter fratres causam discordiárum, exsiccávit. Lycum flúvium, pernicióse agros inundántem, defíxo ad ripam quo sustentabátur báculo, qui statim viréntem crevit in árborem, coércuit, ut póstea ultra eum términum non efflúxerit. Sæpíssime dǽmones ex idolórum simulácris atque ex hóminum corpóribus ejécit, múltaque ália mirabíliter effécit, quibus innumerábiles hómines traxit ad Jesu Christi fidem, cum étiam prophético spíritu futúra prædíceret. Qui, migratúrus e vita, cum quæsísset quot in civitáte Neocæsariénsi réliqui essent infidéles, responsúmque esset tantum esse septémdecim; Deo grátias agens, Tótidem, inquit, erant fidéles, cum cœpi episcopátum. Plura scripsit, quibus étiam, non solum miráculis, Dei Ecclésiam illustrávit.'];

/******************************* ENGLISH **************************************/
$e1 = ['cr|3',
		''];

/******************************* CODE **************************************/
ant('Matins/n3b3_ad_societatem.php','b');
lectio($l1, $e1);
rubrics('te_deum.php');
space();
?>
