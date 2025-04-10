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
		'Dídacus, Hispánus, ex óppido sancti Nicolái de Portu diœcésis Hispalénsis, ab ineúnte ætáte, pii sub sacerdótis disciplína, sanctióris vitæ tirocínium exércuit. Deínde, ut fírmius Deo se conjúngeret, in convéntu de Arizzáfa sancti Francísci Assisiénsis régulam in statu laicáli proféssus est. Magna ibi alacritáte húmilis obediéntiæ et reguláris observántiæ jugo se subjíciens, contemplatióni in primis déditus, mira Dei luce perfundebátur, ádeo ut de rebus cæléstibus, litterárum expers, mirándum in modum et plane divínitus loquerétur. Canáriis in ínsulis multa perpéssus, martýrii ǽstuans desidério, plures infidéles verbo et exémplo ad Christi fidem convértit. Romæ in convéntu Aræ cæli ægrotórum curæ destinátus, miro caritátis afféctu hoc munus exércuit. Grátia ínsuper curatiónum in eo elúxit. Demum Complúti piíssime ex hac vita migrávit, anno Dómini millésimo quadringentésimo sexagésimo tértio. Illum, multis miráculis clarum, Xystus quintus Sanctórum número adscrípsit.'];

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
