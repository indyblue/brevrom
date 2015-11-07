<?php
space();
feria(3,4);

$cap1 = '1, 1-4';
$cap2 = '1, 5-7';
$cap3 = '1, 8-11';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Joël Prophéta',
		"lr|1|Cap. $cap1",
		'Verbum Dómini, quod factum est ad Joël fílium Phátuel. Audíte hoc, senes, et áuribus percípite, omnes habitatóres terræ, si factum est istud in diébus vestris aut in diébus patrum vestrórum? Super hoc fíliis vestris narráte, et fílii vestri fíliis suis, et fílii eórum generatióni álteræ. Resíduum erúcæ comédit locústa, et resíduum locústæ comédit bruchus, et resíduum bruchi comédit rubígo.'];
$l1r = ['A fácie furóris tui, Deus, conturbáta est omnis terra: * Sed miserére, Dómine, et ne fácias consummatiónem.',
'Dómine, Dóminus noster, quam admirábile est nomen tuum!'];

$l2 = ["lr|2|Cap. $cap2",
		'Expergiscímini, ébrii, et flete et ululáte, omnes qui bíbitis vinum in dulcédine, quóniam périit ab ore vestro. Gens enim ascéndit super terram meam fortis et innumerábilis: dentes ejus ut dentes leónis, et moláres ejus ut cátuli leónis. Pósuit víneam meam in desértum et ficum meam decorticávit, nudans, spoliávit eam et projécit, albi facti sunt rami ejus.'];
$l2r = ['Civitátem istam tu circúmda, Dómine: et Ángeli tui custódiant muros ejus. * Exáudi, Dómine, pópulum tuum cum misericórdia.',
'Avertátur furor tuus, Dómine, a pópulo tuo et a civitáte sancta tua.'];

$l3 = ["lr|3|Cap. $cap3",
		'Plange, quasi virgo accíncta sacco super virum pubertátis suæ. Périit sacrifícium et libátio de domo Dómini, luxérunt sacerdótes minístri Dómini. Depopuláta est régio, luxit humus, quóniam devastátum est tríticum, confúsum est vinum, elánguit óleum, confúsi sunt agrícolæ, ululavérunt vinitóres super fruménto et hórdeo, quia périit messis agri.'];
$l3r = ['Genti peccatríci, pópulo pleno peccáto miserére, * Dómine Deus.',
'Esto placábilis super nequítiam pópuli tui.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Joel the Prophet',
		"lr|1|Chap. $cap1",
		'The word of the Lord that came to Joel the son of Pethuel.  Hear this, ye old men, and give ear, all ye inhabitants of the land. Hath this been in your days, or even in the days of your fathers?  Tell ye your children of it, and let your children tell their children, and their children another generation.  That which the palmerworm hath left hath the locust eaten; and that which the locust hath left hath the cankerworm eaten; and that which the cankerworm hath left hath the caterpiller eaten.'];
$e1r = ['Before the face of thine anger, O God, the whole earth shall be desolate; *  But thou, O Lord, have mercy, and make not an end utterly.',
'O Lord, our Governour, how excellent is thy Name in all the world.'];

$e2 = ["lr|2|Chap. $cap2",
		'Awake, ye drunkards, and weep; and howl, all ye drinkers of wine, because of the new wine; for it is cut off from your mouth.  For a nation is come up upon my land, strong, and without number, whose teeth are the teeth of a lion, and he hath the cheek teeth of a great lion.  He hath laid my vine waste, and barked my fig tree: he hath made it clean bare, and cast it away; the branches thereof are made white.'];
$e2r = ['Gird about thy Holy City, O Lord, and let thine Angels keep the walls thereof. * O Lord, hearken unto thy people with mercy.',
'O Lord, let thine anger be turned away from thy people, and from this thine holy city.'];

$e3 = ["lr|3|Chap. $cap3",
		'Lament like a virgin girded with sackcloth for the husband of her youth.  The meat offering and the drink offering is cut off from the house of the Lord; the priests, the Lord’s ministers, mourn.  The field is wasted, the land mourneth; for the corn is wasted: the new wine is dried up, the oil languisheth.  Be ye ashamed, O ye husbandmen; howl, O ye vinedressers, for the wheat and for the barley; because the harvest of the field is perished.'];
$e3r = ['Upon a sinful nation have mercy, upon a people laden with iniquity, * O Lord God.',
'Let it repent thee concerning the transgression of the people.'];

/******************************* CODE **************************************/
lectio($l1, $e1);
rm([$l1r,$e1r],0,1);
rubrics('lectio_2_3.php');

lectio($l2, $e2);
rm([$l2r,$e2r],0,1);

lectio($l3,$e3);
rm([$l3r,$e3r],0,0);

?>
