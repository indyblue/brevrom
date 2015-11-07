<?php
space();
feria(6,4);

$cap1 = '1, 1-3';
$cap2 = '1, 4-5';
$cap3 = '1, 6';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Zacharías Prophéta',
		"lr|1|Cap. $cap1",
		'In mense octávo in anno secúndo Daríi regis factum est verbum Dómini ad Zacharíam fílium Barachíæ fílii Addo prophétam dicens: Irátus est Dóminus super patres vestros iracúndia; et dices ad eos: Hæc dicit Dóminus exercítuum: Convertímini ad me, ait Dóminus exercítuum, et convértar ad vos, dicit Dóminus exercítuum.'];
$l1r = ['Super muros tuos, Jerúsalem, constítui custódes; * Tota die et nocte non tacébunt laudáre nomen Dómini.',
'Prædicábunt pópulis fortitúdinem meam, et annuntiábunt Géntibus glóriam meam.'];

$l2 = ["lr|2|Cap. $cap2",
		'Ne sitis sicut patres vestri, ad quos clamábant prophétæ prióres dicéntes: Hæc dicit Dóminus exercítuum: Convertímini de viis vestris malis et de cogitatiónibus vestris péssimis; et non audiérunt neque attendérunt ad me, dicit Dóminus. Patres vestri ubi sunt? et prophétæ numquid in sempitérnum vivent?'];
$l2r = [' Muro tuo inexpugnábili circumcínge nos, Dómine, et armis tuæ poténtiæ prótege nos semper: * Líbera, Dómine, Deus Israël, clamántes ad te.',
'Erue nos in mirabílibus tuis, et da glóriam nómini tuo.'];

$l3 = ["lr|3|Cap. $cap3",
		'Verúmtamen verba mea et legítima mea, quæ mandávi servis meis prophétis, numquid non comprehendérunt patres vestros et convérsi sunt et dixérunt: Sicut cogitávit Dóminus exercítuum fácere nobis secúndum vias nostras et secúndum adinventiónes nostras, fecit nobis?'];
$l3r = [' Sustinúimus pacem, et non venit: quæsívimus bona, et ecce turbátio: cognóvimus, Dómine, peccáta nostra: * Non in perpétuum obliviscáris nos.',
'Peccávimus, ímpie géssimus, iniquitátem fécimus, Dómine, in omnem justítiam tuam.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Zechariah the Prophet',
		"lr|1|Chap. $cap1",
		'In the eighth month, in the second year of Darius, came the word of the Lord unto Zechariah, the son of Berechiah, the son of Iddo the prophet, saying, The Lord hath been sore displeased with your fathers.  Therefore say thou unto them, Thus saith the Lord of hosts; Turn ye unto me, saith the Lord of hosts, and I will turn unto you, saith the Lord of hosts.'];
$e1r = [' Upon thy walls have I set watchmen, O Jerusalem; *  Which shall never hold their peace day nor night, praising the Name of the Lord.',
'They shall proclaim my might unto the nations, and declare my glory unto the Gentiles.'];

$e2 = ["lr|2|Chap. $cap2",
		'Be ye not as your fathers, unto whom the former prophets have cried, saying, Thus saith the Lord of hosts; Turn ye now from your evil ways, and from your evil doings: but they did not hear, nor hearken unto me, saith the Lord.  Your fathers, where are they? and the prophets, do they live for ever?'];
$e2r = [' Hedge us about with thine invincible wall, O Lord, and shield us continually with the arms of thy might; * O Lord God of Israel, deliver them that cry unto thee.',
'Deliver us also according to thy marvellous works, and give glory to thy Name.'];

$e3 = ["lr|3|Chap. $cap3",
		'But my words and my statutes, which I commanded my servants the prophets, did they not take hold of your fathers? and they returned and said, Like as the Lord of hosts thought to do unto us, according to our ways, and according to our doings, so hath he dealt with us.'];
$e3r = [' We looked for peace and it came not; we asked for good, and behold trouble: for we have acknowledged our sins, O Lord: * Forget us not for ever.',
'O Lord God, we have sinned, we have done ungodly, we have dealt unrighteously in all thine ordinances.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);
rubrics('lectio_2_3.php');

lectio($l2, $e2);
rm([$l2r,$e2r],0,1);

lectio($l3,$e3);
rm([$l3r,$e3r],0,0);

?>
