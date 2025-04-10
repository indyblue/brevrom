<?php
	$matins = $_GET['matins-l'];
if($matins) {
space();
hour('M');

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
		'Cárolus, Medioláni nóbili Borromæórum família natus, cum vigésimum tértium ætátis annum ágeret, a Pio quarto ejus avúnculo in sacrum cárdinalium collégium cooptátus est.  Mox ab eódem Mediolanénsis archiepíscopus creátus, in eo plúrimam óperam adhíbuit, ut juxta sacrosánctum Tridentínum Concílium, quod ejus potíssimum sollicitúdine jam tum fúerat absólutum, ecclésiam sibi commíssam compóneret.  Peste Medioláni grassánte, domésticam supelléctilem in egénos aléndos cóntulit ; eóque morbo laborántes sédulo invísens, mirum in modum solabátur, Ecclésiæ sacraménta própriis ipse mánibus adminístrans.  Ecclesiásticæ libertátis acérrimus fuit propugnátor, plúraque scripsit ad episcopórum præsértim instructiónem utilíssima ; cujus étiam ópera parochórum catechísmus pródiit.  Medioláni óbiit ætátis suæ anno quadragésimo séptimo, tértio Nonas Novémbris.  Quem, miráculis clarum, Paulus quintus in Sanctórum númerum rétulit.'];

/******************************* ENGLISH **************************************/
$e1 = ['cr|3',
		'Charles was born at Milan of the noble Borromeo family.  Before he was twenty-three, his uncle, Pius IV, made him a member of the sacred college of Cardinals.  Soon the same Pope made him Archbishop of Milan.  In this office he applied himself particularly to the task of conforming the Church entrusted to him to the decrees of the holy Council of Trent.  It was largely through his efforts that the council’s work had just been completed.  When the plague was raging at Milan, he gave even the furnishings of his house to provide for the needy, and he constantly visited the dying, consoling them in a wonderful way and giving them the sacraments of the Church with his own hands.  He was a most zealous fighter for the freedom of the Church, and he wrote much that is useful particularly for the instruction of bishops ; a catechism for parish priests was also produced by his efforts.  He died at Milan on the 3rd of November in the forty-seventh year of his age.  Famous for miracles, he was enrolled among the Saints by Paul V.'];

/******************************* CODE **************************************/
ant('Matins/n3b3_ad_societatem.php','b');
lectio($l1, $e1);
rubrics('te_deum.php');
space();
}
?>
