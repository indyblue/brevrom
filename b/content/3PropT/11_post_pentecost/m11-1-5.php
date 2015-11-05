<?php
space();
feria(5,4);

/******************************* LATINA **************************************/
$l1 = ['c|Incipit liber Ezechiélis Prophétæ',
		'lr|1|Cap. 13, 1-6',
		'Et factus est sermo Dómini ad me dicens: Fili hóminis, vaticináre ad prophétas Ísraël, qui prophétant, et dices prophetántibus de corde suo: Audíte verbum Dómini: Hæc dicit Dóminus Deus: Væ prophétis insipiéntibus, qui sequúntur spíritum suum, et nihil vident!  Quasi vulpes in desértis prophétæ tui, Ísraël, erant.  Non ascendístis ex advérso neque opposuístis murum pro domo Ísraël, ut starétis in prœ́lio in die Dómini.  Vident vana et divínant mendácium dicéntes: Ait Dóminus, cum Dóminus non míserit eos, et perseveravérunt confirmáre sermónem.'];
$l1r = ['Vidi Dóminum sedéntem super sólium excélsum et elevátum: et plena erat omnis terra majestáte ejus:  * Et ea, quæ sub ipso erant, replébant templum.',
'Séraphim stabant super illud: sex alæ uni, et sex alæ álteri.'];

$l2 = ['lr|2|Cap. 13, 7-10',
		'Numquid non visiónem cassam vidístis et divinatiónem mendácem locúti estis et dícitis: Ait Dóminus, cum ego non sim locútus?  Proptérea hæc dicit Dóminus Deus: Quia locúti estis vana et vidístis mendácium, ídeo ecce ego ad vos, dicit Dóminus Deus.  Et erit manus mea super prophétas, qui vident vana et divínant mendácium: in consílio pópuli mei non erunt et in scriptúra domus Ísraël non scribéntur nec in terram Ísraël ingrediéntur, et sciétis quia ego Dóminus Deus.  Eo quod decéperint pópulum meum dicéntes: Pax, et non est pax, et ipse ædificábat paríetem, illi autem liniébant eum luto absque páleis.'];
$l2r = ['Áspice, Dómine, de sede sancta tua, et cógita de nobis: inclína, Deus meus, aurem tuam et audi: * Áperi óculos tuos et vide tribulatiónem nostram.',
'Qui regis Israël, inténde, qui dedúcis velut ovem Joseph.'];

$l3 = ['lr|3|Cap. 13, 11-14',
		'Dic ad eos qui líniunt absque temperatúra, quod casúrus sit; erit enim imber inúndans et dabo lápides prægrándes désuper irruéntes et ventum procéllæ dissipántem.  Síquidem ecce cécidit páries; numquid non dicétur vobis: Ubi est litúra quam linístis?  Proptérea hæc dicit Dóminus Deus: Et erúmpere fáciam spíritum tempestátum in indignatióne mea, et imber inúndans in furóre meo erit, et lápides grandes in ira in consumptiónem, et déstruam paríetem, quem linístis absque temperaménto.'];
$l3r = ['Áspice, Dómine, quia facta est desoláta cívitas plena divítiis, sedet in tristítia dómina Géntium: * Non est qui consolétur eam, nisi tu, Deus noster.',
'Plorans plorávit in nocte, et lácrimæ ejus in maxíllis ejus.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Ezekiel the Prophet',
		'lr|1|Chap. 13, 1-6',
		'And the word of the Lord came unto me, saying, Son of man, prophesy against the prophets of Israel that prophesy, and say thou unto them that prophesy out of their own hearts, Hear ye the word of the Lord; Thus saith the Lord GOD; Woe unto the foolish prophets, that follow their own spirit, and have seen nothing!  O Israel, thy prophets are like the foxes in the deserts.  Ye have not gone up into the gaps, neither made up the hedge for the house of Israel to stand in the battle in the day of the Lord.  They have seen vanity and lying divination, saying, The Lord saith: and the Lord hath not sent them: and they have made others to hope that they would confirm the word.'];
$e1r = ['I saw the Lord sitting upon a throne high and lifted up, and the whole earth was full of his glory: * And his train filled the temple.',
'Above it stood the Seraphim: each one had six wings.'];

$e2 = ['lr|2|Chap. 13, 7-10',
		'Have ye not seen a vain vision, and have ye not spoken a lying divination, whereas ye say, The Lord saith it; albeit I have not spoken?  Therefore thus saith the Lord GOD; Because ye have spoken vanity, and seen lies, therefore, behold, I am against you, saith the Lord GOD.  And mine hand shall be upon the prophets that see vanity, and that divine lies: they shall not be in the assembly of my people, neither shall they be written in the writing of the house of Israel, neither shall they enter into the land of Israel; and ye shall know that I am the Lord GOD.  Because, even because they have seduced my people, saying, Peace; and there was no peace; and one built up a wall, and, lo, others daubed it with untempered morter.'];
$e2r = ['Look down, O Lord, from the dwelling place of thine holiness, and take thought for us: O my God, incline thine ear, and hear: * Open thine eyes, and behold our desolation.',
'Give ear, O Shepherd of Israel, thou that leadest Joseph like a flock.'];

$e3 = ['lr|3|Chap. 13, 11-14',
		'Say unto them which daub it with untempered morter, that it shall fall: there shall be an overflowing shower; and ye, O great hailstones, shall fall; and a stormy wind shall rend it.  Lo, when the wall is fallen, shall it not be said unto you, Where is the daubing wherewith ye have daubed it?  Therefore thus saith the Lord GOD; I will even rend it with a stormy wind in my fury; and there shall be an overflowing shower in mine anger, and great hailstones in my fury to consume it.  So will I break down the wall that ye have daubed with untempered morter.'];
$e3r = ['Consider, O Lord, how that the city sitteth solitary that was full of riches; how is she become as a widow, she that was great among the nations; * She hath none to comfort her, save thee, O our God.',
'She weepeth sore in the night, and her tears are on her cheeks.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);
rubrics('lectio_2_3.php');

lectio($l2, $e2);
rm([$l2r,$e2r],0,1);

lectio($l3,$e3);
rm([$l3r,$e3r],0,0);

?>
