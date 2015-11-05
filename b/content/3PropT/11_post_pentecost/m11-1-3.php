<?php
space();
feria(3,4);

/******************************* LATINA **************************************/
$l1 = ['c|De Ezechiéle Prophéta',
		'lr|1|Cap. 3, 1-4',
		'Et dixit ad me: Fili hóminis, quodcúmque invéneris cómede, cómede volúmen istud et vadens lóquere ad fílios Ísraël.  Et apérui os meum, et cibávit me volúmine illo et dixit ad me: Fili hóminis, venter tuus cómedet, et víscera tua complebúntur volúmine isto quod ego do tibi.  Et comédi illud, et factum est in ore meo sicut mel dulce.  Et dixit ad me: Fili hóminis, vade ad domum Ísraël et loquéris verba mea ad eos.'];
$l1r = ['A fácie furóris tui, Deus, conturbáta est omnis terra: * Sed miserére, Dómine, et ne fácias consummatiónem.',
'Dómine, Dóminus noster, quam admirábile est nomen tuum!'];

$l2 = ['lr|2|Cap. 3, 5-9',
		'Non enim ad pópulum profúndi sermónis et ignótæ linguæ, tu mítteris ad domum Ísraël; neque ad pópulos multos profúndi sermónis et ignótæ linguæ, quorum non possis audíre sermónes; et, si ad illos míttereris, ipsi audírent te; domus autem Ísraël nolunt audíre te, quia nolunt audíre me; omnis quippe domus Ísraël attríta fronte est et duro corde.  Ecce dedi fáciem tuam valentiórem faciébus eórum et frontem tuam duriórem fróntibus eórum: ut adamántem et ut sílicem dedi fáciem tuam; ne tímeas eos neque métuas a fácie eórum, quia domus exásperans est.'];
$l2r = ['Civitátem istam tu circúmda, Dómine: et Ángeli tui custódiant muros ejus.  * Exáudi, Dómine, pópulum tuum cum misericórdia.',
'Avertátur furor tuus, Dómine, a pópulo tuo et a civitáte sancta tua.'];

$l3 = ['lr|3|Cap. 3, 10-13',
		'Et dixit ad me: fili hóminis, omnes sermónes meos, quos ego loquor ad te, assúme in corde tuo et áuribus tuis audi; et vade, ingrédere ad transmigratiónem, ad fílios pópuli tui et loquéris ad eos et dices eis: Hæc dicit Dóminus Deus.  Si forte áudiant et quiéscant.  Et assúmpsit me spíritus, et audívi post me vocem commotiónis magnæ: Benedícta glória Dómini de loco suo; et vocem alárum animálium percutiéntium álteram ad álteram et vocem rotárum sequéntium animália et vocem commotiónis magnæ.'];
$l3r = ['Genti peccatríci, pópulo pleno peccáto miserére, * Dómine Deus.',
'Esto placábilis super nequítiam pópuli tui.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From the Book of Ezekiel the Prophet',
		'lr|1|Chap. 3, 1-4',
		'Moreover he said unto me, Son of man, eat that thou findest; eat this roll, and go speak unto the house of Israel.  So I opened my mouth, and he caused me to eat that roll.  And he said unto me, Son of man, cause thy belly to eat, and fill thy bowels with this roll that I give thee. Then did I eat it; and it was in my mouth as honey for sweetness.  And he said unto me, Son of man, go, get thee unto the house of Israel, and speak with my words unto them.'];
$e1r = [' Before the face of thine anger, O God, the whole earth shall be desolate ; *  But thou, O Lord, have mercy, and make not an end utterly.',
'O Lord, our Governour, how excellent is thy Name in all the world.'];

$e2 = ['lr|2|Chap. 3, 5-9',
		'For thou art not sent to a people of a strange speech and of an hard language, but to the house of Israel; not to many people of a strange speech and of an hard language, whose words thou canst not understand. Surely, had I sent thee to them, they would have hearkened unto thee.  But the house of Israel will not hearken unto thee; for they will not hearken unto me: for all the house of Israel are impudent and hardhearted.  Behold, I have made thy face strong against their faces, and thy forehead strong against their foreheads.  As an adamant harder than flint have I made thy forehead: fear them not, neither be dismayed at their looks, though they be a rebellious house.'];
$e2r = ['Gird about thy Holy City, O Lord, and let thine Angels keep the walls thereof. * O Lord, hearken unto thy people with mercy.',
'O Lord, let thine anger be turned away from thy people, and from this thine holy city.'];

$e3 = ['lr|3|Chap. 3, 10-13',
		'Moreover he said unto me, Son of man, all my words that I shall speak unto thee receive in thine heart, and hear with thine ears.  And go, get thee to them of the captivity, unto the children of thy people, and speak unto them, and tell them, Thus saith the Lord GOD; whether they will hear, or whether they will forbear.  Then the spirit took me up, and I heard behind me a voice of a great rushing, saying, Blessed be the glory of the Lord from his place.  I heard also the noise of the wings of the living creatures that touched one another, and the noise of the wheels over against them, and a noise of a great rushing.'];
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
