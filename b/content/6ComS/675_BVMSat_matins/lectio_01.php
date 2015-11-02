<?php
space();
head('Mense Januario','Month of January',2);

/******************************* LATINA **************************************/
$l3 = ['c|Ex Epístola sancti Ambrósii Epíscopi ad Sirícium Papam',
		'cr|Epist. 81, alias 7 post initium',
		'cr|3',
		'De via perversitátis prodúntur dícere: Virgo concépit, sed non virgo generávit.  Pótuit ergo virgo concípere, non pótuit virgo generáre, cum semper concéptus præcédat, partus sequátur?  Sed, si doctrínis non créditur sacerdótum, credátur oráculis Christi; credátur mónitis Angelórum dicéntium: Quia non est impossíbile Deo omne verbum; credátur Sýmbolo Apostolórum, quod Ecclésia Romána intemerátum semper custódit et servat.  Audívit María vocem Ángeli, et, quæ ante díxerat: Quómodo fiet istud; non de fide generatiónis intérrogans, respóndit póstea: Ecce ancílla Dómini, contíngat mihi secúndum verbum tuum.'];

/******************************* ENGLISH **************************************/
$e3 = ['c|From the Epistle to Pope Siricius by St. Ambrose the Bishop',
		'cr|3',
		'Some contentious persons are wont to say: She was virgin when she conceived, but when she brought forth she thereby ceased to be virgin.  But where conception  hath taken place, childbirth of necessity followeth.  For which reason, would not a virgin-conception make a virgin-motherhood?  Therefore, if the contentious will not accept the instruction given them by the Church’s priesthood, let them at least believe the words which have come down from Christ.  Yea, let them believe the declaration of the Angel who said: With God nothing shall be impossible.  Or let them believe the Apostles’ Creed, which same the Church in Rome hath ever guarded, and held ínviolate.  Mary heard the Angel speak, and then made an enquiry: How shall this be?  Now this question of hers was no lack of faith, but rather was a questioning in preparation for that obedience of faith which moved her immediately to say: Behold the handmaid of the Lord; be it done unto me according to thy word.'];

/******************************* CODE **************************************/
ant('Matins/bvm_n1b3_per_virginem_matrem.php','b');
lectio($l3,$e3);
rubrics('te_deum.php');

?>
