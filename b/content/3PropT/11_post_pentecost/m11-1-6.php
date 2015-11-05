<?php
space();
feria(6,4);

/******************************* LATINA **************************************/
$l1 = ['c|Incipit liber Ezechiélis Prophétæ',
		'lr|1|Cap. 15, 1-5',
		'Et factus est sermo Dómini ad me dicens:  Fili hóminis, quid fiet de ligno vitis ex ómnibus lignis némorum, quæ sunt inter ligna silvárum?  Numquid tollétur de ea lignum, ut fiat opus, aut fabricábitur de ea paxíllus, ut depéndeat in eo quodcúmque vas?  Ecce igni datum est in escam, utrámque partem ejus consúmpsit ignis, et medíetas ejus redácta est in favíllam.  Numquid útile erit ad opus?  Étiam cum esset íntegrum non erat aptum ad opus, quanto magis cum illud ignis devoráverit et combússerit: nihil ex eo fiet óperis.'];
$l1r = ['Super muros tuos, Jerúsalem, constítui custódes; * Tota die et nocte non tacébunt laudáre nomen Dómini.',
'Prædicábunt pópulis fortitúdinem meam, et annuntiábunt Géntibus glóriam meam.'];

$l2 = ['lr|2|Cap. 15, 6-8',
		'Proptérea hæc dicit Dóminus Deus: Quómodo lignum vitis inter ligna silvárum, quod dedi igni ad devorándum, sic tradam habitatóres Jerúsalem.  Et ponam fáciem meam in eos: de igne egrediéntur, et ignis consúmet eos, et sciétis quia ego Dóminus, cum posúero fáciem meam in eos et dédero terram ínviam et desolátam, eo quod prævaricatóres exstíterint, dicit Dóminus Deus.'];
$l2r = ['Muro tuo inexpugnábili circumcínge nos, Dómine, et armis tuæ poténtiæ prótege nos semper: * Líbera, Dómine, Deus Ísraël, clamántes ad te.',
'Érue nos in mirabílibus tuis, et da glóriam nómini tuo.'];

$l3 = ['lr|3|Cap. 16, 1-5',
		'Et factus est sermo Dómini ad me dicens: Fili hóminis, notas fac Jerúsalem abominatiónes suas et dices: Hæc dicit Dóminus Deus Jerúsalem: Radix tua et generátio tua de terra Chánaan, pater tuus Amorrhǽus, et mater tua Cethǽa.  Et quando nata es, in die ortus tui, non est præcísus umbilícus tuus, et aqua non es lota in salútem nec sale salíta nec involúta pannis.  Non pepércit super te óculus, ut fáceret tibi unum de his, misértus tui, sed projécta es super fáciem terræ in abjectióne ánimæ tuæ, in die qua nata es.'];
$l3r = [' Sustinúimus pacem, et non venit: quæsívimus bona, et ecce turbátio: cognóvimus, Dómine, peccáta nostra: * Non in perpétuum obliviscáris nos.',
'Peccávimus, ímpie géssimus, iniquitátem fécimus, Dómine, in omnem justítiam tuam.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Ezekiel the Prophet',
		'lr|1|Chap. 15, 1-5',
		'And the word of the Lord came unto me, saying, Son of man, what is the vine tree more than any tree, or than a branch which is among the trees of the forest?  Shall wood be taken thereof to do any work? or will men take a pin of it to hang any vessel thereon?  Behold, it is cast into the fire for fuel; the fire devoureth both the ends of it, and the midst of it is burned. Is it meet for any work?  Behold, when it was whole, it was meet for no work: how much less shall it be meet yet for any work, when the fire hath devoured it, and it is burned?'];
$e1r = ['Upon thy walls have I set watchmen, O Jerusalem; *  Which shall never hold their peace day nor night, praising the Name of the Lord.',
'They shall proclaim my might unto the nations, and declare my glory unto the Gentiles.'];

$e2 = ['lr|2|Chap. 15, 6-8',
		'Therefore thus saith the Lord GOD; As the vine tree among the trees of the forest, which I have given to the fire for fuel, so will I give the inhabitants of Jerusalem.  And I will set my face against them; they shall go out from one fire, and another fire shall devour them; and ye shall know that I am the Lord, when I set my face against them.  And I will make the land desolate, because they have committed a trespass, saith the Lord GOD.'];
$e2r = ['Hedge us about with thine invincible wall, O Lord, and shield us continually with the arms of thy might; * O Lord God of Israel, deliver them that cry unto thee.',
'Deliver us also according to thy marvellous works, and give glory to thy Name.'];

$e3 = ['lr|3|Chap. 7, 20-23',
		'Again the word of the Lord came unto me, saying, Son of man, cause Jerusalem to know her abominations, and say, Thus saith the Lord GOD unto Jerusalem; Thy birth and thy nativity is of the land of Canaan; thy father was an Amorite, and thy mother an Hittite.  And as for thy nativity, in the day thou wast born thy navel was not cut, neither wast thou washed in water to supple thee; thou wast not salted at all, nor swaddled at all.  None eye pitied thee, to do any of these unto thee, to have compassion upon thee; but thou wast cast out in the open field, to the lothing of thy person, in the day that thou wast born.'];
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
