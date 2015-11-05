<?php
space();
feria(4,4);

/******************************* LATINA **************************************/
$l1 = ['c|De Daniéle Prophéta',
		'lr|1|Cap. 4, 16-19',
		'Respóndit Baltássar et dixit: Dómine mi, sómnium his qui te odérunt, et interpretátio ejus hóstibus tuis sit.  Arbórem, quam vidísti sublímem atque robústam, cujus altitúdo pertíngit ad cælum, et aspéctus illíus in omnem terram, et rami ejus pulchérrimi, et fructus ejus nímius, et esca ómnium in ea, subter eam habitántes béstiæ agri, et in ramis ejus commorántes aves cæli, tu es, rex, qui magnificátus es et invaluísti, et magnitúdo tua crevit et pervénit usque ad cælum, et potéstas tua in términos univérsæ terræ.'];
$l1r = ['Indicábo tibi, homo, quid sit bonum aut quid Dóminus requírat a te: * Fácere judícium et justítiam et sollícitum ambuláre cum Deo tuo.',
'Spera in Dómino, et fac bonitátem, et inhábita terram.'];

$l2 = ['lr|2|Cap. 4, 20-22',
		'Quod autem vidit rex vígilem et sanctum descéndere de cælo et dícere: Succídite árborem et díssipate illam, áttamen germen radícum ejus in terra dimíttite, et vinciátur ferro et ære in herbis foris et rore cæli conspergátur, et cum feris sit pábulum ejus, donec septem témpora muténtur super eum, hæc est interpretátio senténtiæ Altíssimi, quæ pervénit super dóminum meum regem: Ejícient te ab homínibus, et cum béstiis ferísque erit habitátio tua, et fœnum ut bos cómedes et rore cæli infundéris.'];
$l2r = ['Angústiæ mihi sunt úndique, et quid éligam ignóro; * Mélius est mihi incídere in manus hóminum, quam derelínquere legem Dei mei.',
'Si enim hoc égero, mors mihi est; si autem non égero, non effúgiam manus vestras.'];

$l3 = ['lr|3|Cap. 4, 22-25',
		'Septem quoque témpora mutabúntur super te, donec scias quod dominétur Excélsus super regnum hóminum et cuicúmque volúerit det illud.  Quod autem præcépit ut relinquerétur germen radícum ejus, id est árboris, regnum tuum tibi manébit, postquam cognóveris potestátem esse cæléstem.  Quam ob rem, rex, consílium meum pláceat tibi, et peccáta tua eleemósynis rédime et iniquitátes tuas misericórdiis páuperum; fórsitan ignóscet delíctis tuis.  Ómnia hæc venérunt super Nabuchodónosor regem.'];
$l3r = ['Misit Dóminus Ángelum suum et conclúsit ora leónum,  * Et non contaminavérunt, quia coram eo injustítia invénta non est in me.',
'Misit Deus misericórdiam suam et veritátem suam: ánimam meam erípuit de médio catulórum leónum.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From Daniel the Prophet',
		'lr|1|Chap. 2, 31-35',
		'Then Daniel answered and said, My lord, the dream be to them that hate thee, and the interpretation thereof to thine enemies.  The tree that thou sawest, which grew, and was strong, whose height reached unto the heaven, and the sight thereof to all the earth; whose leaves were fair, and the fruit thereof much, and in it was meat for all; under which the beasts of the field dwelt, and upon whose branches the fowls of the heaven had their habitation: it is thou, O king, that art grown and become strong: for thy greatness is grown, and reacheth unto heaven, and thy dominion to the end of the earth.'];
$e1r = ['I will shew thee, O man, what is good, and what doth the Lord require of thee: *  But to do justice and judgement, and to walk humbly with thy God?',
'Put thou thy trust in the Lord, and be doing good, and dwell in the land.'];

$e2 = ['lr|2|Chap. 4, 20-22',
		'And whereas the king saw a watcher and an holy one coming down from heaven, and saying, Hew the tree down, and destroy it; yet leave the stump of the roots thereof in the earth, even with a band of iron and brass, in the tender grass of the field; and let it be wet with the dew of heaven, and let his portion be with the beasts of the field, till seven times pass over him; this is the interpretation, O king, and this is the decree of the most High, which is come upon my lord the king: that they shall drive thee from men, and thy dwelling shall be with the beasts of the field, and they shall make thee to eat grass as oxen, and they shall wet thee with the dew of heaven.'];
$e2r = ['I am straitened on every side, and know not what to choose; * It is better for me to fall into the hands of men, than to sin against the law of God.',
'For if I do this thing, it is death unto me: and if I do it not, I cannot escape your hands.'];

$e3 = ['lr|3|Chap. 4, 22-25',
		'And seven times shall pass over thee, till thou know that the most High ruleth in the kingdom of men, and giveth it to whomsoever he will.  And whereas they commanded to leave the stump of the tree roots; thy kingdom shall be sure unto thee, after that thou shalt have known that the heavens do rule.  Wherefore, O king, let my counsel be acceptable unto thee, and break off thy sins by righteousness, and thine iniquities by shewing mercy to the poor; if it may be a lengthening of thy tranquillity.  All this came upon the king Nebuchadnezzar.'];
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
