<?php
space();
hour('M');

$cap1 = '1, 1-3';
$cap2 = '1, 4-7';
$cap3 = '1, 8-11';
/******************************* LATINA **************************************/
$l1 = ['c|Incipit liber Osée Prophétæ',
		"lr|1|Cap. $cap1",
		'Verbum Dómini, quod factum est ad Osée fílium Béeri in diébus Ozíæ, Jóathan, Achaz, Ezechíæ regum Juda et in diébus Jeróboam fílii Joas regis Ísraël. Princípium loquéndi Dómino in Osée. Et dixit Dóminus ad Osée: Vade, sume tibi uxórem fornicatiónum, quia fórnicans fornicábitur, terra a Dómino. Et ábiit et accépit Gomer fíliam Debélaim, et concépit et péperit ei fílium.'];
$l1r = ['Vidi Dóminum sedéntem super sólium excélsum et elevátum: et plena erat omnis terra majestáte ejus: * Et ea, quæ sub ipso erant, replébant templum.',
'Séraphim stabant super illud: sex alæ uni, et sex alæ álteri.'];

$l2 = ["lr|2|Cap. $cap2",
		'Et dixit Dóminus ad eum: Voca nomen ejus Jézrahel, quóniam adhuc módicum et visitábo sánguinem Jézrahel super domum Jehu et quiéscere fáciam regnum domus Ísraël et in illa die cónteram arcum Ísraël in valle Jézrahel. Et concépit adhuc et péperit fíliam. Et dixit ei: Voca nomen ejus Absque misericórdia, quia non addam ultra miseréri dómui Ísraël, sed oblivióne oblivíscar eórum et dómui Juda miserébor et salvábo eos in Dómino Deo suo et non salvábo eos in arcu et gládio et in bello et in equis et in equítibus. Et ablactávit eam quæ erat Absque misericórdia, et concépit et péperit fílium. Et dixit: Voca nomen ejus Non pópulus meus, quia vos non pópulus meus, et ego non ero vester. Et erit númerus filiórum Ísraël quasi aréna maris, quæ sine mensúra est et non numerábitur. Et erit, in loco ubi dicétur eis: Non pópulus meus vos; dicétur eis: Fílii Dei vivéntis. Et congregabúntur fílii Juda et fílii Ísraël páriter et ponent síbimet caput unum et ascéndent de terra, quia magnus dies Jézrahel.'];
$l2r = ['Áspice, Dómine, quia facta est desoláta cívitas plena divítiis, sedet in tristítia dómina Géntium: * Non est qui consolétur eam, nisi tu, Deus noster.',
'Plorans plorávit in nocte, et lácrimæ ejus in maxíllis ejus.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Hosea the Prophet',
		"lr|1|Chap. $cap1",
		'The word of the Lord that came unto Hosea, the son of Beeri, in the days of Uzziah, Jotham, Ahaz, and Hezekiah, kings of Judah, and in the days of Jeroboam the son of Joash, king of Israel.  The beginning of the word of the Lord by Hosea. And the Lord said to Hosea, Go, take unto thee a wife of whoredoms and children of whoredoms: for the land hath committed great whoredom, departing from the Lord.  So he went and took Gomer the daughter of Diblaim; which conceived, and bare him a son.'];
$e1r = ['I saw the Lord sitting upon a throne high and lifted up, and the whole earth was full of his glory: * And his train filled the temple.',
'Above it stood the Seraphim: each one had six wings.'];

$e2 = ["lr|2|Chap. $cap2",
		'And the Lord said unto him, Call his name Jezreel; for yet a little while, and I will avenge the blood of Jezreel upon the house of Jehu, and will cause to cease the kingdom of the house of Israel.  And it shall come to pass at that day, that I will break the bow of Israel, in the valley of Jezreel.  And she conceived again, and bare a daughter. And God said unto him, Call her name Loruhamah: for I will no more have mercy upon the house of Israel; but I will utterly take them away.  But I will have mercy upon the house of Judah, and will save them by the Lord their God, and will not save them by bow, nor by sword, nor by battle, by horses, nor by horsemen. Now when she had weaned Loruhamah, she conceived, and bare a son.  Then said God, Call his name Loammi: for ye are not my people, and I will not be your God.  Yet the number of the children of Israel shall be as the sand of the sea, which cannot be measured nor numbered; and it shall come to pass, that in the place where it was said unto them, Ye are not my people, there it shall be said unto them, Ye are the sons of the living God.  Then shall the children of Judah and the children of Israel be gathered together, and appoint themselves one head, and they shall come up out of the land: for great shall be the day of Jezreel.'];
$e2r = ['Consider, O Lord, how that the city sitteth solitary that was full of riches; how is she become as a widow, she that was great among the nations; * She hath none to comfort her, save thee, O our God.',
'She weepeth sore in the night, and her tears are on her cheeks.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);

lectio($l2, $e2);
rm([$l2r,$e2r],0,0);

?>
