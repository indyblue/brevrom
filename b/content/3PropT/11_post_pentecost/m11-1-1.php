<?php
space();
hour('M');

/******************************* LATINA **************************************/
$l1 = ['c|Incipit liber Ezechiélis Prophétæ',
		'lr|1|Cap. 1, 1-4',
		'Et factum est in trigésimo anno, in quarto, in quinta mensis, cum essem in médio captivórum juxta flúvium Chobar, apérti sunt cæli, et vidi visiónes Dei.  In quinta mensis, ipse est annus quintus transmigratiónis regis Jóachim, factum est verbum Dómini ad Ezechiélem, fílium Buzi, sacerdótem in terra Chaldæórum, secus flumen Chobar: et facta est super eum ibi manus Dómini.  Et vidi, et ecce ventus túrbinis veniébat ab Aquilóne: et nubes magna, et ignis invólvens, et splendor in circúitu ejus: et de médio ejus quasi spécies eléctri, id est, de médio ignis.'];
$l1r = ['R.  Vidi Dóminum sedéntem super sólium excélsum et elevátum: et plena erat omnis terra majestáte ejus:  * Et ea, quæ sub ipso erant, replébant templum.',
'Séraphim stabant super illud: sex alæ uni, et sex alæ álteri.'];

$l2 = ['lr|2|Cap. 1, 5-12',
		'Et in médio ejus similitúdo quátuor animálium: et hic aspéctus eórum, similitúdo hóminis in eis.  Quátuor fácies uni, et quátuor pennæ uni.  Pedes eórum pedes recti, et planta pedis eórum, quasi planta pedis vítuli, et scintíllæ quasi aspéctus æris candéntis.  Et manus hóminis sub pennis eórum in quátuor pártibus: et fácies, et pennas per quátuor partes habébant, junctǽque erant pennæ eórum altérius ad álterum.  Non revertebántur cum incéderent: sed unumquódque ante fáciem suam gradiebátur. Similitúdo autem vultus eórum: fácies hóminis,  et fácies leónis a dextris ipsórum quátuor: fácies autem bovis, a sinístris ipsórum quátuor, et fácies áquilæ désuper ipsórum quátuor.  Fácies eórum, et pennæ eórum exténtæ désuper: duæ pennæ singulórum jungebántur, et duæ tegébant córpora eórum: et unumquódque eórum coram fácie sua ambulábat: ubi erat ímpetus spíritus, illuc gradiebántur, nec revertebántur cum ambulárent.'];
$l2r = ['R.  Áspice, Dómine, quia facta est desoláta cívitas plena divítiis, sedet in tristítia dómina Géntium: * Non est qui consolétur eam, nisi tu, Deus noster.',
'Plorans plorávit in nocte, et lácrimæ ejus in maxíllis ejus.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Ezekiel the Prophet',
		'lr|1|Chap. 1, 1-4',
		'Now it came to pass in the thirtieth year, in the fourth month, in the fifth day of the month, as I was among the captives by the river of Chebar, that the heavens were opened, and I saw visions of God.  In the fifth day of the month, which was the fifth year of king Jehoiachin’s captivity, the word of the Lord came expressly unto Ezekiel the priest, the son of Buzi, in the land of the Chaldeans by the river Chebar; and the hand of the Lord was there upon him.  And I looked, and, behold, a whirlwind came out of the north, a great cloud, and a fire infolding itself, and a brightness was about it, and out of the midst thereof as the colour of amber, out of the midst of the fire.'];
$e1r = ['R.  I saw the Lord sitting upon a throne high and lifted up, and the whole earth was full of his glory: * And his train filled the temple.',
'Above it stood the Seraphim: each one had six wings.'];

$e2 = ['lr|2|Chap. 1, 5-12',
		'Also out of the midst thereof came the likeness of four living creatures. And this was their appearance; they had the likeness of a man.  And every one had four faces, and every one had four wings.  And their feet were straight feet; and the sole of their feet was like the sole of a calf’s foot: and they sparkled like the colour of burnished brass.  And they had the hands of a man under their wings on their four sides; and they four had their faces and their wings.  Their wings were joined one to another; they turned not when they went; they went every one straight forward. As for the likeness of their faces, they four had the face of a man, and the face of a lion, on the right side: and they four had the face of an ox on the left side; they four also had the face of an eagle.  Thus were their faces: and their wings were stretched upward; two wings of every one were joined one to another, and two covered their bodies.  And they went every one straight forward: whither the spirit was to go, they went; and they turned not when they went.'];
$e2r = ['R.  Consider, O Lord, how that the city sitteth solitary that was full of riches; how is she become as a widow, she that was great among the nations; * She hath none to comfort her, save thee, O our God.',
'She weepeth sore in the night, and her tears are on her cheeks.'];


/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);

lectio($l2, $e2);
rm([$l2r,$e2r],0,0);


?>
