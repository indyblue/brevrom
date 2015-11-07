<?php
space();
feria(6,4);

$cap1 = 'Vers. 1-4';
$cap2 = 'Vers. 5-7';
$cap3 = 'Vers. 8-11';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Abdías Prophéta',
		"lr|1|$cap1",
		'Vísio Abdíæ. Hæc dicit Dóminus Deus ad Edom: Audítum audívimus a Dómino, et legátum ad Gentes misit: Súrgite, et consurgámus advérsus eum in prœ́lium. Ecce párvulum dedi te in Géntibus, contemptíbilis tu es valde. Supérbia cordis tui éxtulit te habitántem in scissúris petrárum, exaltántem sólium tuum, qui dicis in corde tuo: Quis détrahet me in terram? Si exaltátus fúeris ut áquila et si inter sídera posúeris nidum tuum, inde détraham te, dicit Dóminus.'];
$l1r = ['Super muros tuos, Jerúsalem, constítui custódes; * Tota die et nocte non tacébunt laudáre nomen Dómini.',
'Prædicábunt pópulis fortitúdinem meam, et annuntiábunt Géntibus glóriam meam.'];

$l2 = ["lr|2|$cap2",
		'Si fures introíssent ad te, si latrónes per noctem, quómodo conticuísses? Nonne furáti essent sufficiéntia sibi? Si vindemiatóres introíssent ad te, numquid saltem racémum reliquíssent tibi? Quómodo scrutáti sunt Esau? Investigavérunt abscóndita ejus. Usque ad términum emisérunt te, omnes viri fœ́deris tui illusérunt tibi, invaluérunt advérsum te viri pacis tuæ; qui cómedunt tecum ponent insídias subter te: non est prudéntia in eo.'];
$l2r = ['Muro tuo inexpugnábili circumcínge nos, Dómine, et armis tuæ poténtiæ prótege nos semper: * Líbera, Dómine, Deus Ísraël, clamántes ad te.',
'Érue nos in mirabílibus tuis, et da glóriam nómini tuo.'];

$l3 = ["lr|3|$cap3",
		'Numquid non in die illa, dicit Dóminus, perdam sapiéntes de Idumǽa et prudéntiam de monte Esau? Et timébunt fortes tui a Merídie, ut intéreat vir de monte Esau. Propter interfectiónem et propter iniquitátem in fratrem tuum Jacob opériet te confúsio, et períbis in ætérnum. In die, cum stares advérsus eum, quando capiébant aliéni exércitum ejus, et extránei ingrediebántur portas ejus et super Jerúsalem mittébant sortem, tu quoque eras quasi unus ex eis.'];
$l3r = [' Sustinúimus pacem, et non venit: quæsívimus bona, et ecce turbátio: cognóvimus, Dómine, peccáta nostra: * Non in perpétuum obliviscáris nos.',
'Peccávimus, ímpie géssimus, iniquitátem fécimus, Dómine, in omnem justítiam tuam.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Amos the Prophet',
		"lr|1|$cap1",
		'The vision of Obadiah. Thus saith the Lord GOD concerning Edom; We have heard a rumour from the Lord, and an ambassador is sent among the heathen, Arise ye, and let us rise up against her in battle.  Behold, I have made thee small among the heathen: thou art greatly despised.  The pride of thine heart hath deceived thee, thou that dwellest in the clefts of the rock, whose habitation is high; that saith in his heart, Who shall bring me down to the ground?  Though thou exalt thyself as the eagle, and though thou set thy nest among the stars, thence will I bring thee down, saith the Lord.'];
$e1r = ['Upon thy walls have I set watchmen, O Jerusalem; *  Which shall never hold their peace day nor night, praising the Name of the Lord.',
'They shall proclaim my might unto the nations, and declare my glory unto the Gentiles.'];

$e2 = ["lr|2|$cap2",
		'If thieves came to thee, if robbers by night, (how art thou cut off!) would they not have stolen till they had enough? if the grapegatherers came to thee, would they not leave some grapes?  How are the things of Esau searched out! how are his hidden things sought up!  All the men of thy confederacy have brought thee even to the border: the men that were at peace with thee have deceived thee, and prevailed against thee; they that eat thy bread have laid a wound under thee: there is none understanding in him.'];
$e2r = ['Hedge us about with thine invincible wall, O Lord, and shield us continually with the arms of thy might; * O Lord God of Israel, deliver them that cry unto thee.',
'Deliver us also according to thy marvellous works, and give glory to thy Name.'];

$e3 = ["lr|3|$cap3",
		'Shall I not in that day, saith the Lord, even destroy the wise men out of Edom, and understanding out of the mount of Esau?  And thy mighty men, O Teman, shall be dismayed, to the end that every one of the mount of Esau may be cut off by slaughter.  For thy violence against thy brother Jacob shame shall cover thee, and thou shalt be cut off for ever.  In the day that thou stoodest on the other side, in the day that the strangers carried away captive his forces, and foreigners entered into his gates, and cast lots upon Jerusalem, even thou wast as one of them.'];
$e3r = ['We looked for peace and it came not; we asked for good, and behold trouble: for we have acknowledged our sins, O Lord: * Forget us not for ever.',
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
