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
		'Joánnes a Cruce, Fontíberi in Hispánia piis paréntibus natus, a primis annis certo innótuit quam Deíparæ Vírgini futúrus esset accéptus; nam quinquénnis in púteum lapsus, ejúsdem manu sublátus, incólumis evásit. Adoléscens hospítio páuperum ægrotántium Metýmnæ Campi fámulum amantíssime se addíxit; tum beátæ Maríæ Vírginis de Monte Carmélo institútum ampléxus et sacérdos ex obediéntia factus, primitívam régulam proféssus est. Strictióris disciplínæ promovéndæ ardóre succénsus, sanctæ Terésiæ, a qua inter purióres et excellentióres ánimas Ecclésiam Dei tunc témporis illustrántes habebátur, comes divínitus datus est ad primǽvam Carméli órdinis observántiam inter fratres instaurándam. Quo in ópere eníxe cum laborásset et multa esset passus, interrogátus a Christo, quid prǽmii pro tot labóribus pósceret, respóndit: Dómine, pati et contémni pro te. Libros de mýstica theología, cælésti sapiéntia refértos, conscrípsit. Tandem Ubédæ, diro morbo patientíssime toleráto, obdormívit in Dómino, anno millésimo quingentésimo nonagésimo primo, ætátis quadragésimo nono. Eum Pius undécimus, ex sacrórum Rítuum Congregatiónis consúlto, universális Doctórem declarávit.'];

/******************************* ENGLISH **************************************/
$e1 = ['cr|3',
		''];

/******************************* CODE **************************************/
ant('Matins/n3b3_ad_societatem.php','b');
lectio($l1, $e1);
rubrics('te_deum.php');
space();
?>
