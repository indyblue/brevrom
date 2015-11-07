<?php
space();
hour('M');

$cap1 = '1, 1-3';
$cap2 = '1, 4-9';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Michǽas Prophéta',
		"lr|1|Cap. $cap1",
		'Verbum Dómini, quod factum est ad Michǽam Morasthíten, in diébus Jóathan, Achaz et Ezechíæ regum Juda, quod vidit super Samaríam et Jerúsalem. Audíte, pópuli omnes, et atténdat terra et plenitúdo ejus, et sit Dóminus Deus vobis in testem, Dóminus de templo sancto suo. Quia ecce Dóminus egrediétur de loco suo et descéndet et calcábit super excélsa terræ.'];
$l1r = ['Vidi Dóminum sedéntem super sólium excélsum et elevátum: et plena erat omnis terra majestáte ejus:  * Et ea, quæ sub ipso erant, replébant templum.',
'Séraphim stabant super illud: sex alæ uni, et sex alæ álteri.'];

$l2 = ["lr|2|Cap. $cap2",
		'Et consuméntur montes subtus eum, et valles scindéntur, sicut cera a fácie ignis et sicut aquæ, quæ decúrrunt in præceps. In scélere Jacob omne istud et in peccátis domus Ísraël. Quod scelus Jacob? nonne Samaría? Et quæ excélsa Judæ? nonne Jerúsalem? Et ponam Samaríam quasi acérvum lápidum in agro, cum plantátur vínea, et détraham in vallem lápides ejus et fundaménta ejus revelábo. Et ómnia sculptília ejus concidéntur, et omnes mercédes ejus comburéntur igne, et ómnia idóla ejus ponam in perditiónem, quia de mercédibus meretrícis congregáta sunt et usque ad mercédem meretrícis reverténtur. Super hoc plangam et ululábo, vadam spoliátus et nudus, fáciam planctum velut dracónum et luctum quasi struthiónum: quia desperáta est plaga ejus, quia venit usque ad Judam, tétigit portam pópuli mei usque ad Jerúsalem.'];
$l2r = ['Áspice, Dómine, quia facta est desoláta cívitas plena divítiis, sedet in tristítia dómina Géntium: * Non est qui consolétur eam, nisi tu, Deus noster.',
'Plorans plorávit in nocte, et lácrimæ ejus in maxíllis ejus.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Micah the Prophet',
		"lr|1|Chap. $cap1",
		'The word of the Lord that came to Micah the Morasthite in the days of Jotham, Ahaz, and Hezekiah, kings of Judah, which he saw concerning Samaria and Jerusalem.  Hear, all ye people; hearken, O earth, and all that therein is: and let the Lord GOD be witness against you, the Lord from his holy temple.  For, behold, the Lord cometh forth out of his place, and will come down, and tread upon the high places of the earth.'];
$e1r = ['I saw the Lord sitting upon a throne high and lifted up, and the whole earth was full of his glory: * And his train filled the temple.',
'Above it stood the Seraphim: each one had six wings.'];

$e2 = ["lr|2|Chap. $cap2",
		'And the mountains shall be molten under him, and the valleys shall be cleft, as wax before the fire, and as the waters that are poured down a steep place.  For the transgression of Jacob is all this, and for the sins of the house of Israel. What is the transgression of Jacob? is it not Samaria? and what are the high places of Judah? are they not Jerusalem?  Therefore I will make Samaria as an heap of the field, and as plantings of a vineyard: and I will pour down the stones thereof into the valley, and I will discover the foundations thereof. And all the graven images thereof shall be beaten to pieces, and all the hires thereof shall be burned with the fire, and all the idols thereof will I lay desolate: for she gathered it of the hire of an harlot, and they shall return to the hire of an harlot.  Therefore I will wail and howl, I will go stripped and naked: I will make a wailing like the dragons, and mourning as the owls.  For her wound is incurable; for it is come unto Judah; he is come unto the gate of my people, even to Jerusalem.'];
$e2r = ['Consider, O Lord, how that the city sitteth solitary that was full of riches; how is she become as a widow, she that was great among the nations; * She hath none to comfort her, save thee, O our God.',
'She weepeth sore in the night, and her tears are on her cheeks.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);

lectio($l2, $e2);
rm([$l2r,$e2r],0,0);

?>
