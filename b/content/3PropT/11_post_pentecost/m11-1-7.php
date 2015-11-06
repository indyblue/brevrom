<?php
space();
feria(7,4);

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
$l1 = ['c|De Ezechiéle Prophéta',
		'lr|1|Cap. 19, 1-7',
		'Et tu assúme planctum super príncipes Ísraël et dices: Quare mater tua leǽna inter leónes cubávit, in médio leunculórum enutrívit cátulos suos?  Et edúxit unum de leúnculis suis, et leo factus est et dídicit cápere prædam hominémque comédere.  Et audiérunt de eo Gentes et non absque vulnéribus suis cepérunt eum et adduxérunt eum in caténis in terram Ægýpti.  Quæ cum vidísset quóniam infirmáta est et périit exspectátio ejus, tulit unum de leúnculis suis, leónem constítuit eum, qui incedébat inter leónes et factus est leo et dídicit prædam cápere et hómines devoráre, dídicit víduas fácere et civitátes eórum in desértum addúcere, et desoláta est terra et plenitúdo ejus a voce rugítus illíus.'];
$l1r = ['Laudábilis pópulus, * Quem Dóminus exercítuum benedíxit dicens: Opus mánuum meárum tu es, heréditas mea Ísraël.',
'Beáta gens, cujus est Dóminus Deus, pópulus eléctus in hereditátem.'];

$l2 = ['lr|2|Cap. 19, 8-14',
		'Et convenérunt advérsus eum Gentes úndique de provínciis et expandérunt super eum rete suum, in vulnéribus eárum captus est, et misérunt eum in cáveam, in caténis adduxérunt eum ad regem Babylónis miserúntque eum in cárcerem, ne audirétur vox ejus ultra super montes Ísraël.  Mater tua quasi vínea in sánguine tuo super aquam plantáta est; fructus ejus et frondes ejus crevérunt ex aquis multis, et factæ sunt ei virgæ sólidæ in sceptra dominántium, et exaltáta est statúra ejus inter frondes, et vidit altitúdinem suam in multitúdine pálmitum suórum. Et evúlsa est in ira in terrámque projécta, et ventus urens siccávit fructum ejus; marcuérunt et arefáctæ sunt virgæ róboris ejus, ignis comédit eam; et nunc transplantáta est in desértum, in terra ínvia et sitiénti, et egréssus est ignis de virga ramórum ejus, qui fructum ejus comédit, et non fuit in ea virga fortis, sceptrum dominántium.  Planctus est, et erit in planctum.'];
$l2r = ['Misit Dóminus Ángelum suum et conclúsit ora leónum,  * Et non contaminavérunt, quia coram eo injustítia invénta non est in me.',
'Misit Deus misericórdiam suam et veritátem suam: ánimam meam erípuit de médio catulórum leónum.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Ezekiel the Prophet',
		'lr|1|Chap. 19, 1-7',
		'Moreover take thou up a lamentation for the princes of Israel, and say, What is thy mother? A lioness: she lay down among lions, she nourished her whelps among young lions.  And she brought up one of her whelps: it became a young lion, and it learned to catch the prey; it devoured men.  The nations also heard of him; he was taken in their pit, and they brought him with chains unto the land of Egypt.  Now when she saw that she had waited, and her hope was lost, then she took another of her whelps, and made him a young lion.  And he went up and down among the lions, he became a young lion, and learned to catch the prey, and devoured men.  And he knew their desolate palaces, and he laid waste their cities; and the land was desolate, and the fulness thereof, by the noise of his roaring.'];
$e1r = ['Blessed is the people  *  Whom the Lord of Hosts hath blest, saying: O Israel, thou art the work of mine own hands, thou art mine own inheritance.',
'Blessed are the people whose God is the Lord, and blessed are the folk that he hath chosen to him to be his inheritance.'];

$e2 = ['lr|2|Chap. 19, 8-14',
		'Then the nations set against him on every side from the provinces, and spread their net over him: he was taken in their pit.  And they put him in ward in chains, and brought him to the king of Babylon: they brought him into holds, that his voice should no more be heard upon the mountains of Israel.  Thy mother is like a vine in thy blood, planted by the waters: she was fruitful and full of branches by reason of many waters.  And she had strong rods for the sceptres of them that bare rule, and her stature was exalted among the thick branches, and she appeared in her height with the multitude of her branches. But she was plucked up in fury, she was cast down to the ground, and the east wind dried up her fruit: her strong rods were broken and withered; the fire consumed them.  And now she is planted in the wilderness, in a dry and thirsty ground.  And fire is gone out of a rod of her branches, which hath devoured her fruit, so that she hath no strong rod to be a sceptre to rule. This is a lamentation, and shall be for a lamentation.'];
$e2r = ['The Lord hath sent his Angel, and hath shut the lions’ mouths, * That they have not hurt me; forasmuch as before him innocency was found in me.',
'God hath sent forth his mercy and his truth, and delivered my soul from among the lions’ whelps.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);

lectio($l2, $e2);
rm([$l2r,$e2r],0,0);

rubrics('de_officio_festi_vel_bvm_sat_lectio3.php');

?>
