<?php
space();
feria(2,4);

/*
%s/<\_[^>]*>//eig | %s/&nbsp;/ /eig
\v<[^aeiouyæœëAEIOUYÆŒ]{-}(([Aa][Uu]|[qgQG][Uu][aeiouyæœëAEIOUYÆŒ]|[aeiouyæœëAEIOUYÆŒ])[^aeiouyæœëAEIOUYÆŒ]{-}){,2}>|<\k*[áéíóúýǽœ́ǼÁÉÍÓÚÝ]\k*>
\<[a-zA-ZæœëÆŒ]*[áéíóúýǽœ́ǼÁÉÍÓÚÝ][a-zA-ZæœëÆŒ]*[áéíóúýǽœ́ǼÁÉÍÓÚÝ][a-zA-ZæœëÆŒ]*\>
 [;:?!]
æǽ œœ́ áéíóúý m̃
ÆǼ ŒŒ́ ÁÉÍÓÚÝ
lions’
*/

$cap1 = '4, 1-3';
$cap2 = '4, 4-6';
$cap3 = '4, 7-10';
/******************************* LATINA **************************************/
$l1 = ['c|De Osée Prophéta',
		"lr|1|Cap. $cap1",
		'Audíte verbum Dómini, fílii Ísraël, quia judícium Dómino cum habitatóribus terræ; non est enim véritas, et non est misericórdia, et non est sciéntia Dei in terra. Maledíctum et mendácium et homicídium et furtum et adultérium inundavérunt, et sanguis sánguinem tétigit. Propter hoc lugébit terra, et infirmábitur omnis qui hábitat in ea, in béstia agri et in vólucre cæli; sed et pisces maris congregabúntur.'];
$l1r = ['Redémit pópulum suum et liberávit eum, et vénient et exsultábunt in monte Sion et gaudébunt de bonis Dómini super fruménto, vino et óleo, * Et ultra non esúrient.',
'Erítque ánima eórum quasi hortus irríguus.'];

$l2 = ["lr|2|Cap. $cap2",
		'Verúmtamen unusquísque non júdicet et non arguátur vir; pópulus enim tuus sicut hi qui contradícunt sacerdóti. Et córrues hódie, et córruet étiam prophéta tecum. Nocte tacére feci matrem tuam. Contícuit pópulus meus, eo quod non habúerit sciéntiam. Quia tu sciéntiam repulísti, repéllam te, ne sacerdótio fungáris mihi; et oblíta es legis Dei tui, oblivíscar filiórum tuórum et ego.'];
$l2r = ['Angústiæ mihi sunt úndique, et quid éligam ignóro; * Mélius est mihi incídere in manus hóminum, quam derelínquere legem Dei mei.',
'Si enim hoc égero, mors mihi est; si autem non égero, non effúgiam manus vestras.'];

$l3 = ["lr|3|Cap. $cap3",
		'Secúndum multitúdinem eórum sic peccavérunt mihi: glóriam eórum in ignomíniam commutábo. Peccáta pópuli mei cómedent, et ad iniquitátem eórum sublevábunt ánimas eórum. Et erit sicut pópulus sic sacérdos, et visitábo super eum vias ejus et cogitatiónes ejus reddam ei. Et cómedent et non saturabúntur, fornicáti sunt et non cessavérunt, quóniam Dóminum dereliquérunt in non custodiéndo.'];
$l3r = ['Misit Dóminus Ángelum suum et conclúsit ora leónum, * Et non contaminavérunt, quia coram eo injustítia invénta non est in me.',
'Misit Deus misericórdiam suam et veritátem suam: ánimam meam erípuit de médio catulórum leónum.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Hosea the Prophet',
		"lr|1|Chap. $cap1",
		'Hear the word of the Lord, ye children of Israel: for the Lord hath a controversy with the inhabitants of the land, because there is no truth, nor mercy, nor knowledge of God in the land.  By swearing, and lying, and killing, and stealing, and committing adultery, they break out, and blood toucheth blood.  Therefore shall the land mourn, and every one that dwelleth therein shall languish, with the beasts of the field, and with the fowls of heaven; yea, the fishes of the sea also shall be taken away.'];
$e1r = ['He hath redeemed his people, and ransomed them; therefore shall they come and sing in the height of Sion, and shall rejoice in the goodness of the Lord, unto the wheat and the wine and the oil; * And they shall hunger no more.',
'And their soul shall be as a watered garden.'];

$e2 = ["lr|2|Chap. $cap2",
		'Yet let no man strive, nor reprove another: for thy people are as they that strive with the priest.  Therefore shalt thou fall in the day, and the prophet also shall fall with thee in the night, and I will destroy thy mother.  My people are destroyed for lack of knowledge: because thou hast rejected knowledge, I will also reject thee, that thou shalt be no priest to me: seeing thou hast forgotten the law of thy God, I will also forget thy children.'];
$e2r = ['I am straitened on every side, and know not what to choose; * It is better for me to fall into the hands of men, than to sin against the law of God.',
'For if I do this thing, it is death unto me: and if I do it not, I cannot escape your hands.'];

$e3 = ["lr|3|Chap. $cap3",
		'As they were increased, so they sinned against me: therefore will I change their glory into shame.  They eat up the sin of my people, and they set their heart on their iniquity.  And there shall be, like people, like priest: and I will punish them for their ways, and reward them their doings.  For they shall eat, and not have enough: they shall commit whoredom, and shall not increase: because they have left off to take heed to the Lord.'];
$e3r = ['The Lord hath sent his Angel, and hath shut the lions’ mouths, * That they have not hurt me; forasmuch as before him innocency was found in me.',
'God hath sent forth his mercy and his truth, and delivered my soul from among the lions’ whelps.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);
rubrics('lectio_2_3.php');

lectio($l2, $e2);
rm([$l2r,$e2r],0,1);

lectio($l3,$e3);
rm([$l3r,$e3r],0,0);

?>
