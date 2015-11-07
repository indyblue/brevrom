<?php
space();
feria(5,4);

$cap1 = '1, 1-2';
$cap2 = '1, 3-6';
$cap3 = '1, 7-10';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Aggǽus Prophéta',
		"lr|1|Cap. $cap1",
		'In anno secúndo Daríi regis in mense sexto, in die una mensis, factum est verbum Dómini in manu Aggǽi prophétæ ad Zoróbabel fílium Saláthiel ducem Juda et ad Jesum fílium Jósedec sacerdótem magnum dicens: Hæc ait Dóminus exercítuum dicens: Pópulus iste dicit: Nondum venit tempus domus Dómini ædificándæ.'];
$l1r = ['Vidi Dóminum sedéntem super sólium excélsum et elevátum: et plena erat omnis terra majestáte ejus:  * Et ea, quæ sub ipso erant, replébant templum.',
'Séraphim stabant super illud: sex alæ uni, et sex alæ álteri.'];

$l2 = ["lr|2|Cap. $cap2",
		'Et factum est verbum Dómini in manu Aggǽi prophétæ dicens: Numquid tempus vobis est ut habitétis in dómibus laqueátis, et domus ista desérta? Et nunc hæc dicit Dóminus exercítuum: Pónite corda vestra super vias vestras: seminástis multum et intulístis parum, comedístis et non estis satiáti, bibístis et non estis inebriáti, operuístis vos et non estis calefácti, et qui mercédes congregávit misit eas in sácculum pertúsum.'];
$l2r = ['Áspice, Dómine, de sede sancta tua, et cógita de nobis: inclína, Deus meus, aurem tuam et audi: * Áperi óculos tuos et vide tribulatiónem nostram.',
'Qui regis Ísraël, inténde, qui dedúcis velut ovem Joseph.'];

$l3 = ["lr|3|Cap. $cap3",
		'Hæc dicit Dóminus exercítuum: Pónite corda vestra super vias vestras, ascéndite in montem, portáte ligna et ædificáte domum, et acceptábilis mihi erit, et glorificábor, dicit Dóminus. Respexístis ad ámplius, et ecce factum est minus; et intulístis in domum et exsufflávi illud. Quam ob causam? dicit Dóminus exercítuum, quia domus mea desérta est, et vos festinátis unusquísque in domum suam. Propter hoc super vos prohíbiti sunt cæli ne darent rorem, et terra prohíbita est ne daret germen suum.'];
$l3r = ['Áspice, Dómine, quia facta est desoláta cívitas plena divítiis, sedet in tristítia dómina Géntium: * Non est qui consolétur eam, nisi tu, Deus noster.',
'Plorans plorávit in nocte, et lácrimæ ejus in maxíllis ejus.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Haggai the Prophet',
		"lr|1|Chap. $cap1",
		'In the second year of Darius the king, in the sixth month, in the first day of the month, came the word of the Lord by Haggai the prophet unto Zerubbabel the son of Shealtiel, governor of Judah, and to Joshua the son of Josedech, the high priest, saying, Thus speaketh the Lord of hosts, saying, This people say, The time is not come, the time that the Lord’s house should be built.'];
$e1r = ['I saw the Lord sitting upon a throne high and lifted up, and the whole earth was full of his glory: * And his train filled the temple.',
'Above it stood the Seraphim: each one had six wings.'];

$e2 = ["lr|2|Chap. $cap2",
		'Then came the word of the Lord by Haggai the prophet, saying, Is it time for you, O ye, to dwell in your cieled houses, and this house lie waste?  Now therefore thus saith the Lord of hosts; Consider your ways.  Ye have sown much, and bring in little; ye eat, but ye have not enough; ye drink, but ye are not filled with drink; ye clothe you, but there is none warm; and he that earneth wages earneth wages to put it into a bag with holes.'];
$e2r = ['Look down, O Lord, from the dwelling place of thine holiness, and take thought for us: O my God, incline thine ear, and hear: * Open thine eyes, and behold our desolation.',
'Give ear, O Shepherd of Israel, thou that leadest Joseph like a flock.'];

$e3 = ["lr|3|Chap. $cap3",
		'Thus saith the Lord of hosts; Consider your ways.  Go up to the mountain, and bring wood, and build the house; and I will take pleasure in it, and I will be glorified, saith the Lord.  Ye looked for much, and, lo it came to little; and when ye brought it home, I did blow upon it. Why? saith the Lord of hosts. Because of mine house that is waste, and ye run every man unto his own house.  Therefore the heaven over you is stayed from dew, and the earth is stayed from her fruit.'];
$e3r = [' Consider, O Lord, how that the city sitteth solitary that was full of riches; how is she become as a widow, she that was great among the nations; * She hath none to comfort her, save thee, O our God.',
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
