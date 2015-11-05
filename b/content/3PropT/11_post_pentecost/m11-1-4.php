<?php
space();
feria(4,4);

/******************************* LATINA **************************************/
$l1 = ['c|De Ezechiéle Prophéta',
		'lr|1|Cap. 7, 1-4',
		'Et factus est sermo Dómini ad me dicens: Et tu, fili hóminis, hæc dicit Dóminus Deus terræ Ísraël: Finis venit, venit finis super quátuor plagas terræ.  Nunc finis super te, et immíttam furórem meum in te et judicábo te juxta vias tuas et ponam contra te omnes abominatiónes tuas, et non parcet óculus meus super te, et non miserébor; sed vias tuas ponam super te, et abominatiónes tuæ in médio tui erunt, et sciétis quia ego Dóminus.'];
$l1r = [' Indicábo tibi, homo, quid sit bonum aut quid Dóminus requírat a te: * Fácere judícium et justítiam et sollícitum ambuláre cum Deo tuo.',
'Spera in Dómino, et fac bonitátem, et inhábita terram.'];

$l2 = ['lr|2|Cap. 7, 5-9',
		'Hæc dicit Dóminus Deus: Afflíctio una, afflíctio ecce venit.  Finis venit, venit finis, evigilávit advérsum te, ecce venit: venit contrítio super te, qui hábitas in terra; venit tempus, prope est dies occisiónis et non glóriæ móntium.  Nunc de propínquo effúndam iram meam super te et complébo furórem meum in te et judicábo te juxta vias tuas et impónam tibi ómnia scélera tua, et non parcet óculus meus, nec miserébor; sed vias tuas impónam tibi, et abominatiónes tuæ in médio tui erunt, et sciétis quia ego sum Dóminus percútiens.'];
$l2r = ['Angústiæ mihi sunt úndique, et quid éligam ignóro; * Mélius est mihi incídere in manus hóminum, quam derelínquere legem Dei mei.',
'Si enim hoc égero, mors mihi est; si autem non égero, non effúgiam manus vestras.'];

$l3 = ['lr|3|Cap. 7, 10-13',
		'Ecce dies, ecce venit; egréssa est contrítio, flóruit virga, germinávit supérbia, iníquitas surréxit in virga impietátis; non ex eis et non ex pópulo neque ex sónitu eórum, et non erit réquies in eis.  Venit tempus, appropinquávit dies: qui emit non lætétur, et qui vendit non lúgeat, quia ira super omnem pópulum ejus; quia qui vendit ad id quod véndidit non revertétur, et adhuc in vivéntibus vita eórum.'];
$l3r = ['Misit Dóminus Ángelum suum et conclúsit ora leónum,  * Et non contaminavérunt, quia coram eo injustítia invénta non est in me.',
'Misit Deus misericórdiam suam et veritátem suam: ánimam meam erípuit de médio catulórum leónum.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Ezekiel the Prophet',
		'lr|1|Chap. 7, 1-4',
		'Moreover the word of the Lord came unto me, saying, Also, thou son of man, thus saith the Lord GOD unto the land of Israel; An end, the end is come upon the four corners of the land.  Now is the end come upon thee, and I will send mine anger upon thee, and will judge thee according to thy ways, and will recompense upon thee all thine abominations.  And mine eye shall not spare thee, neither will I have pity: but I will recompense thy ways upon thee, and thine abominations shall be in the midst of thee: and ye shall know that I am the Lord.'];
$e1r = ['I will shew thee, O man, what is good, and what doth the Lord require of thee: *  But to do justice and judgement, and to walk humbly with thy God?',
'Put thou thy trust in the Lord, and be doing good, and dwell in the land.'];

$e2 = ['lr|2|Chap. 7, 5-9',
		'Thus saith the Lord GOD; An evil, an only evil, behold, is come.  An end is come, the end is come: it watcheth for thee; behold, it is come.  The morning is come unto thee, O thou that dwellest in the land: the time is come, the day of trouble is near, and not the sounding again of the mountains.  Now will I shortly pour out my fury upon thee, and accomplish mine anger upon thee: and I will judge thee according to thy ways, and will recompense thee for all thine abominations.  And mine eye shall not spare, neither will I have pity: I will recompense thee according to thy ways and thine abominations that are in the midst of thee; and ye shall know that I am the Lord that smiteth.'];
$e2r = ['I am straitened on every side, and know not what to choose; * It is better for me to fall into the hands of men, than to sin against the law of God.',
'For if I do this thing, it is death unto me: and if I do it not, I cannot escape your hands.'];

$e3 = ['lr|3|Chap. 7, 10-13',
		'Behold the day, behold, it is come: the morning is gone forth; the rod hath blossomed, pride hath budded.  Violence is risen up into a rod of wickedness: none of them shall remain, nor of their multitude, nor of any of theirs: neither shall there be wailing for them.  The time is come, the day draweth near: let not the buyer rejoice, nor the seller mourn: for wrath is upon all the multitude thereof.  For the seller shall not return to that which is sold, although they were yet alive.'];
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
