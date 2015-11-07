<?php
space();
feria(3,4);

$cap1 = '1, 1-4';
$cap2 = '1, 5-7';
$cap3 = '1, 8-10';
/******************************* LATINA **************************************/
$l1 = ['c|Íncipit Hábacuc Prophéta',
		"lr|1|Cap. $cap1",
		'Onus quod vidit Hábacuc prophéta. Úsquequo, Dómine, clamábo, et non exáudies? vociferábor ad te vim pátiens, et non salvábis? Quare ostendísti mihi iniquitátem et labórem, vidére prædam et injustítiam contra me, et factum est judícium et contradíctio poténtior? Propter hoc laceráta est lex, et non pervénit usque ad finem judícium; quia ímpius prǽvalet advérsus justum, proptérea egréditur judícium pervérsum.'];
$l1r = ['A fácie furóris tui, Deus, conturbáta est omnis terra: * Sed miserére, Dómine, et ne fácias consummatiónem.',
'Dómine, Dóminus noster, quam admirábile est nomen tuum!'];

$l2 = ["lr|2|Cap. $cap2",
		'Aspícite in géntibus et vidéte, admirámini et obstupéscite; quia opus factum est in diébus vestris, quod nemo credet cum narrábitur; quia ecce ego suscitábo Chaldǽos, gentem amáram et velócem, ambulántem super latitúdinem terræ, ut possídeat tabernácula non sua. Horríbilis et terríbilis est, ex semetípsa judícium et onus ejus egrediétur.'];
$l2r = ['Civitátem istam tu circúmda, Dómine: et Ángeli tui custódiant muros ejus. * Exáudi, Dómine, pópulum tuum cum misericórdia.',
'Avertátur furor tuus, Dómine, a pópulo tuo et a civitáte sancta tua.'];

$l3 = ["lr|3|Cap. $cap3",
		'Levióres pardis equi ejus et velocióres lupis vespertínis, et diffundéntur équites ejus; équites namque ejus de longe vénient, volábunt quasi áquila festínans ad comedéndum. Omnes ad prædam vénient, fácies eórum ventus urens; et congregábit quasi arénam captivitátem. Et ipse de régibus triumphábit, et tyránni ridículi ejus erunt; ipse super omnem munitiónem ridébit et comportábit ággerem et cápiet eam.'];
$l3r = ['Genti peccatríci, pópulo pleno peccáto miserére, * Dómine Deus.',
'Esto placábilis super nequítiam pópuli tui.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Habakkuk the Prophet',
		"lr|1|Chap. $cap1",
		'The burden which Habakkuk the prophet did see.  O Lord, how long shall I cry, and thou wilt not hear! even cry out unto thee of violence, and thou wilt not save!  Why dost thou shew me iniquity, and cause me to behold grievance? for spoiling and violence are before me: and there are that raise up strife and contention.  Therefore the law is slacked, and judgment doth never go forth: for the wicked doth compass about the righteous; therefore wrong judgment proceedeth.'];
$e1r = ['Before the face of thine anger, O God, the whole earth shall be desolate; *  But thou, O Lord, have mercy, and make not an end utterly.',
'O Lord, our Governour, how excellent is thy Name in all the world.'];

$e2 = ["lr|2|Chap. $cap2",
		'Behold ye among the heathen, and regard, and wonder marvelously: for I will work a work in your days which ye will not believe, though it be told you.  For, lo, I raise up the Chaldeans, that bitter and hasty nation, which shall march through the breadth of the land, to possess the dwellingplaces that are not theirs.  They are terrible and dreadful: their judgment and their dignity shall proceed of themselves.'];
$e2r = ['Gird about thy Holy City, O Lord, and let thine Angels keep the walls thereof. * O Lord, hearken unto thy people with mercy.',
'O Lord, let thine anger be turned away from thy people, and from this thine holy city.'];

$e3 = ["lr|3|Chap. $cap3",
		'Their horses also are swifter than the leopards, and are more fierce than the evening wolves: and their horsemen shall spread themselves, and their horsemen shall come from far; they shall fly as the eagle that hasteth to eat.  They shall come all for violence: their faces shall sup up as the east wind, and they shall gather the captivity as the sand.  And they shall scoff at the kings, and the princes shall be a scorn unto them: they shall deride every strong hold; for they shall heap dust, and take it.'];
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
