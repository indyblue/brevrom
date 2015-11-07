<?php
space();
feria(2,4);

$cap1 = '1, 1-4';
$cap2 = '1, 4-6';
$cap3 = '1, 7-10';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Nahum Prophéta',
		"lr|1|Cap. $cap1",
		'Onus Nínive. Liber visiónis Nahum Elcesǽi. Deus æmulátor et ulcíscens Dóminus, ulcíscens Dóminus et habens furórem; ulcíscens Dóminus in hostes suos et iráscens ipse inimícis suis. Dóminus pátiens et magnus fortitúdine et mundans non fáciet innocéntem; Dóminus in tempestáte et túrbine viæ ejus, et nébulæ pulvis pedum ejus; íncrepans mare et exsíccans illud et ómnia flúmina ad desértum dedúcens.'];
$l1r = ['Redémit pópulum suum et liberávit eum, et vénient et exsultábunt in monte Sion et gaudébunt de bonis Dómini super fruménto, vino et óleo, * Et ultra non esúrient.',
'Erítque ánima eórum quasi hortus irríguus.'];

$l2 = ["lr|2|Cap. $cap2",
		'Infirmátus est Basan et Carmélus, et flos Líbani elánguit, montes commóti sunt ab eo, et colles desoláti sunt, et contrémuit terra a fácie ejus, et orbis et omnes habitántes in eo. Ante fáciem indignatiónis ejus quis stabit? et quis resístet in ira furóris ejus? Indignátio ejus effúsa est ut ignis, et petræ dissolútæ sunt ab eo.'];
$l2r = ['Angústiæ mihi sunt úndique, et quid éligam ignóro; * Mélius est mihi incídere in manus hóminum, quam derelínquere legem Dei mei.',
'Si enim hoc égero, mors mihi est; si autem non égero, non effúgiam manus vestras.'];

$l3 = ["lr|3|Cap. $cap3",
		'Bonus Dóminus et confórtans in die tribulatiónis et sciens sperántes in se. Et in dilúvio prætereúnte consummatiónem fáciet loci ejus, et inimícos ejus persequéntur ténebræ. Quid cogitátis contra Dóminum? Consummatiónem ipse fáciet; non consúrget duplex tribulátio. Quia, sicut spinæ se ínvicem complectúntur sic convívium eórum páriter potántium: consuméntur quasi stípula ariditáte plena.'];
$l3r = ['Misit Dóminus Ángelum suum et conclúsit ora leónum, * Et non contaminavérunt, quia coram eo injustítia invénta non est in me.',
'Misit Deus misericórdiam suam et veritátem suam: ánimam meam erípuit de médio catulórum leónum.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Nahum the Prophet',
		"lr|1|Chap. $cap1",
		'The burden of Nineveh. The book of the vision of Nahum the Elkoshite.  God is jealous, and the Lord revengeth; the Lord revengeth, and is furious; the Lord will take vengeance on his adversaries, and he reserveth wrath for his enemies.  The Lord is slow to anger, and great in power, and will not at all acquit the wicked: the Lord hath his way in the whirlwind and in the storm, and the clouds are the dust of his feet.  He rebuketh the sea, and maketh it dry, and drieth up all the rivers. '];
$e1r = ['He hath redeemed his people, and ransomed them; therefore shall they come and sing in the height of Sion, and shall rejoice in the goodness of the Lord, unto the wheat and the wine and the oil; * And they shall hunger no more.',
'And their soul shall be as a watered garden.'];

$e2 = ["lr|2|Chap. $cap2",
		'Bashan languisheth, and Carmel, and the flower of Lebanon languisheth.  The mountains quake at him, and the hills melt, and the earth is burned at his presence, yea, the world, and all that dwell therein.  Who can stand before his indignation? and who can abide in the fierceness of his anger? his fury is poured out like fire, and the rocks are thrown down by him.'];
$e2r = [' I am straitened on every side, and know not what to choose; * It is better for me to fall into the hands of men, than to sin against the law of God.',
'For if I do this thing, it is death unto me: and if I do it not, I cannot escape your hands.'];

$e3 = ["lr|3|Chap. $cap3",
		'The Lord is good, a strong hold in the day of trouble; and he knoweth them that trust in him.  But with an overrunning flood he will make an utter end of the place thereof, and darkness shall pursue his enemies.  What do ye imagine against the Lord? he will make an utter end: affliction shall not rise up the second time.  For while they be folden together as thorns, and while they are drunken as drunkards, they shall be devoured as stubble fully dry.'];
$e3r = ['The Lord hath sent his Angel, and hath shut the lions’ mouths, * That they have not hurt me; forasmuch as before him innocency was found in me.',
'God hath sent forth his mercy and his truth, and delivered my soul from among the lions’ whelps.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);
rubrics('lectio_2_3.php');

lectio($l2, $e2);
rm([$l2r,$e2r],0,1);

lectio($l3,$e3);
rm([$l3r,$e3r],0,0);

?>
