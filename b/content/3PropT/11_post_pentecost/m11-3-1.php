<?php
space();
hour('M');

/******************************* LATINA **************************************/
$l1 = ['c|Incipit liber Daniélis Prophétæ',
		'lr|1|Cap. 1, 1-4',
		'Anno tértio regni Jóakim regis Juda venit Nabuchodónosor rex Babylónis in Jerúsalem et obsédit eam, et trádidit Dóminus in manu ejus Jóakim regem Juda et partem vasórum domus Dei, et asportávit ea in terram Sénnaar in domum dei sui et vasa íntulit in domum thesáuri dei sui.  Et ait rex Ásphenez præpósito eunuchórum, ut introdúceret de fíliis Ísraël et de sémine régio et tyrannórum púeros, in quibus nulla esset mácula, decóros forma et erudítos omni sapiéntia, cautos sciéntia et doctos disciplína et qui possent stare in palátio regis, ut docéret eos lítteras et linguam Chaldæórum.'];
$l1r = ['Vidi Dóminum sedéntem super sólium excélsum et elevátum: et plena erat omnis terra majestáte ejus:  * Et ea, quæ sub ipso erant, replébant templum.',
'Séraphim stabant super illud: sex alæ uni, et sex alæ álteri.'];

$l2 = ['lr|2|Cap. 1, 5-15',
		'Et constítuit eis rex annónam per síngulos dies de cibis suis et de vino unde bibébat ipse, ut enutríti tribus annis póstea starent in conspéctu regis.  Fuérunt ergo inter eos de fíliis Juda Dániel, Ananías, Mísaël et Azarías.  Et impósuit eis præpósitus eunuchórum nómina: Daniéli Baltássar, Ananíæ Sidrach, Misaéli Misach, et Azaríæ Abdénago.  Propósuit autem Dániel in corde suo, ne polluerétur de mensa regis neque de vino potus ejus, et rogávit eunuchórum præpósitum ne contaminarétur.  Dedit autem Deus Daniéli grátiam et misericórdiam in conspéctu príncipis eunuchórum. Et ait princeps eunuchórum ad Daniélem: Tímeo ego dóminum meum regem, qui constítuit vobis cibum et potum; qui, si víderit vultus vestros macilentióres præ céteris adolescéntibus coǽvis vestris, condemnábitis caput meum regi.  Et dixit Dániel ad Málasar, quem constitúerat princeps eunuchórum super Daniélem, Ananíam, Misaélem et Azaríam: Tenta nos, óbsecro, servos tuos diébus decem, et dentur nobis legúmina ad vescéndum et aqua ad bibéndum, et contempláre vultus nostros et vultus puerórum qui vescúntur cibo régio, et, sicut víderis, fácies cum servis tuis.  Qui, audíto sermóne hujuscémodi, tentávit eos diébus decem.  Post dies autem decem, apparuérunt vultus eórum melióres et corpulentióres præ ómnibus púeris qui vescebántur cibo régio.'];
$l2r = ['Áspice, Dómine, quia facta est desoláta cívitas plena divítiis, sedet in tristítia dómina Géntium: * Non est qui consolétur eam, nisi tu, Deus noster.',
'Plorans plorávit in nocte, et lácrimæ ejus in maxíllis ejus.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|The beginning of the Book of Daniel the Prophet',
		'lr|1|Chap. 1, 1-4',
		'In the third year of the reign of Jehoiakim king of Judah came Nebuchadnezzar king of Babylon unto Jerusalem, and besieged it.  And the Lord gave Jehoiakim king of Judah into his hand, with part of the vessels of the house of God: which he carried into the land of Shinar to the house of his god; and he brought the vessels into the treasure house of his god.  And the king spake unto Ashpenaz the master of his eunuchs, that he should bring certain of the children of Israel, and of the king’s seed, and of the princes; children in whom was no blemish, but well favoured, and skilful in all wisdom, and cunning in knowledge, and understanding science, and such as had ability in them to stand in the king’s palace, and whom they might teach the learning and the tongue of the Chaldeans.'];
$e1r = ['I saw the Lord sitting upon a throne high and lifted up, and the whole earth was full of his glory: * And his train filled the temple.',
'Above it stood the Seraphim: each one had six wings.'];

$e2 = ['lr|2|Chap. 1, 5-15',
		'And the king appointed them a daily provision of the king’s meat, and of the wine which he drank: so nourishing them three years, that at the end thereof they might stand before the king.  Now among these were of the children of Judah, Daniel, Hananiah, Mishael, and Azariah: unto whom the prince of the eunuchs gave names: for he gave unto Daniel the name of Belteshazzar; and to Hananiah, of Shadrach; and to Mishael, of Meshach; and to Azariah, of Abednego.  But Daniel purposed in his heart that he would not defile himself with the portion of the king’s meat, nor with the wine which he drank: therefore he requested of the prince of the eunuchs that he might not defile himself.  Now God had brought Daniel into favour and tender love with the prince of the eunuchs. And the prince of the eunuchs said unto Daniel, I fear my lord the king, who hath appointed your meat and your drink: for why should he see your faces worse liking than the children which are of your sort? then shall ye make me endanger my head to the king.  Then said Daniel to Melzar, whom the prince of the eunuchs had set over Daniel, Hananiah, Mishael, and Azariah, Prove thy servants, I beseech thee, ten days; and let them give us pulse to eat, and water to drink.  Then let our countenances be looked upon before thee, and the countenance of the children that eat of the portion of the king’s meat: and as thou seest, deal with thy servants.  So he consented to them in this matter, and proved them ten days.  And at the end of ten days their countenances appeared fairer and fatter in flesh than all the children which did eat the portion of the king’s meat.'];
$e2r = ['Consider, O Lord, how that the city sitteth solitary that was full of riches; how is she become as a widow, she that was great among the nations; * She hath none to comfort her, save thee, O our God.',
'She weepeth sore in the night, and her tears are on her cheeks.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);

lectio($l2, $e2);
rm([$l2r,$e2r],0,0);

?>
