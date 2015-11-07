<?php
space();
feria(5,4);

$cap1 = '1, 1-2';
$cap2 = '1, 3-5';
$cap3 = '1, 6-8';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Amos Prophéta',
		"lr|1|Cap. $cap1",
		'Verba Amos, qui fuit in pastóribus de Thécue: quæ vidit super Ísraël in diébus Ozíæ regis Juda et in diébus Jeróboam fílii Joas regis Ísraël, ante duos annos terræmótus. Et dixit: Dóminus de Sion rúgiet et de Jerúsalem dabit vocem suam, et luxérunt speciósa pastórum, et exsiccátus est vertex Carméli.'];
$l1r = ['Vidi Dóminum sedéntem super sólium excélsum et elevátum: et plena erat omnis terra majestáte ejus:  * Et ea, quæ sub ipso erant, replébant templum.',
'Séraphim stabant super illud: sex alæ uni, et sex alæ álteri.'];

$l2 = ["lr|2|Cap. $cap2",
		'Hæc dicit Dóminus: Super tribus sceléribus Damásci et super quátuor non convértam eum, eo quod trituráverint in plaustris férreis Gálaad: et mittam ignem in domum Ázaël, et devorábit domos Bénadad, et cónteram vectem Damásci et dispérdam habitatórem de campo idóli et tenéntem sceptrum de domo voluptátis, et transferétur pópulus Sýriæ Cyrénen, dicit Dóminus.'];
$l2r = ['Áspice, Dómine, de sede sancta tua, et cógita de nobis: inclína, Deus meus, aurem tuam et audi: * Áperi óculos tuos et vide tribulatiónem nostram.',
'Qui regis Ísraël, inténde, qui dedúcis velut ovem Joseph.'];

$l3 = ["lr|3|Cap. $cap3",
		'Hæc dicit Dóminus: Super tribus sceléribus Gazæ et super quátuor non convértam eum, eo quod transtúlerint captivitátem perféctam, ut conclúderent eam in Idumǽa: et mittam ignem in murum Gazæ, et devorábit ædes ejus, et dispérdam habitatórem de Azóto et tenéntem sceptrum de Ascalóne et convértam manum meam super Áccaron, et períbunt réliqui Philisthinórum, dicit Dóminus Deus.'];
$l3r = ['Áspice, Dómine, quia facta est desoláta cívitas plena divítiis, sedet in tristítia dómina Géntium: * Non est qui consolétur eam, nisi tu, Deus noster.',
'Plorans plorávit in nocte, et lácrimæ ejus in maxíllis ejus.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Amos the Prophet',
		"lr|1|Chap. $cap1",
		'The words of Amos, who was among the herdmen of Tekoa, which he saw concerning Israel in the days of Uzziah king of Judah, and in the days of Jeroboam the son of Joash king of Israel, two years before the earthquake.  And he said, The Lord will roar from Zion, and utter his voice from Jerusalem; and the habitations of the shepherds shall mourn, and the top of Carmel shall wither.'];
$e1r = ['I saw the Lord sitting upon a throne high and lifted up, and the whole earth was full of his glory: * And his train filled the temple.',
'Above it stood the Seraphim: each one had six wings.'];

$e2 = ["lr|2|Chap. $cap2",
		'Thus saith the Lord; For three transgressions of Damascus, and for four, I will not turn away the punishment thereof; because they have threshed Gilead with threshing instruments of iron: but I will send a fire into the house of Hazael, which shall devour the palaces of Benhadad.  I will break also the bar of Damascus, and cut off the inhábitant from the plain of Aven, and him that holdeth the sceptre from the house of Eden: and the people of Syria shall go into captivity unto Kir, saith the Lord.'];
$e2r = ['Look down, O Lord, from the dwelling place of thine holiness, and take thought for us: O my God, incline thine ear, and hear: * Open thine eyes, and behold our desolation.',
'Give ear, O Shepherd of Israel, thou that leadest Joseph like a flock.'];

$e3 = ["lr|3|Chap. $cap3",
		'Thus saith the Lord; For three transgressions of Gaza, and for four, I will not turn away the punishment thereof; because they carried away captive the whole captivity, to deliver them up to Edom: but I will send a fire on the wall of Gaza, which shall devour the palaces thereof: and I will cut off the inhábitant from Ashdod, and him that holdeth the sceptre from Ashkelon, and I will turn mine hand against Ekron: and the remnant of the Philistines shall perish, saith the Lord GOD.'];
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
