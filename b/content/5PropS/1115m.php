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
		'Albértus, ob singulárem doctrínam, cognoménto Magnus, Lauíngiæ ad Danúbium, in Suévia, natus, a púero diligénter institútus est. Studiórum causa e pátria discédens, dum Patávii morarétur, hortánte beáto Jordáno generáli magístro órdinis Prædicatórum, frustra obsisténte avúnculo, Dominiciánæ famíliæ adscríbi postulávit. Inter fratres adléctus, religiósa observántia ac pietáte enítuit, et beátam Maríam Vírginem summópere diléxit, animarúmque zelo flagrávit. Ad stúdia explénda, Colóniam Agrippínam missus fuit. Póstea Hildeshémii, Fribúrgi, Ratisbónæ et Argentínæ lector fuit constitútus. In Parisiénsi cáthedra multam sibi laudem comparávit. Thomam de Aquíno discípulum diléctum hábuit, ejúsque altitúdinem mentis primus perspéxit ac prædicávit. Anágniæ, coram summo Pontífice Alexándro quarto, Guliélmum, órdines mendicántes ímpio ausu impeténtem, réttudit, et póstea Epíscopus Ratisbonénsis fuit renunciátus. In consíliis suppeditándis, in discórdiis componéndis mirífice se gessit, ádeo ut pacis conciliátor mérito fúerit appellátus. Plúrima scripta in omni fere scientiárum génere, præsértim sacrárum, exarávit, et de mirábili Altáris Sacraménto præclára compósuit. Virtútibus et miráculis claríssimus, óbiit in Dómino anno millésimo ducentésimo octogésimo. Cultum in plúribus diœcésibus et in órdine Prædicatórum jamdúdum, Romanórum Pontíficum auctoritáte, ei prǽstitum, Pius Papa undécimus auxit, ejúsque festum, áddito Doctóris título, Sacrórum Rítuum Congregatiónis votum libénter excípiens, ad univérsam Ecclésiam exténdit; et eum Pius duodécimus cultórum scientiárum naturálium cæléstem apud Deum patrónum constítuit.'];

/******************************* ENGLISH **************************************/
$e1 = ['cr|3',
		''];

/******************************* CODE **************************************/
ant('Matins/n3b3_ad_societatem.php','b');
lectio($l1, $e1);
rubrics('te_deum.php');
space();
?>
