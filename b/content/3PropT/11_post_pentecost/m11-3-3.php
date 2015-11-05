<?php
space();
feria(3,4);

/******************************* LATINA **************************************/
$l1 = ['c|De Daniéle Prophéta',
		'lr|1|Cap. 3, 14-15',
		'Pronuntiánsque Nabuchodónosor rex ait eis: Veréne, Sidrach, Misach et Abdénago, deos meos non cólitis et státuam áuream, quam constítui, non adorátis?  Nunc ergo si estis paráti, quacúmque hora  audiéritis sónitum tubæ, fístulæ, cítharæ, sambúcæ et psaltérii et symphóniæ omnísque géneris musicórum, prostérnite vos et adoráte státuam quam feci.  Quod si non adoravéritis, eádem hora mittémini in fornácem ignis ardéntis, et quis est Deus qui erípiet vos de manu mea?'];
$l1r = ['A fácie furóris tui, Deus, conturbáta est omnis terra: * Sed miserére, Dómine, et ne fácias consummatiónem.',
'Dómine, Dóminus noster, quam admirábile est nomen tuum!'];

$l2 = ['lr|2|Cap. 3, 16-19',
		'Respondéntes Sidrach, Misach et Abdénago dixérunt regi Nabuchodónosor: Non opórtet nos de hac re respondére tibi: ecce enim Deus noster, quem cólimus, potest erípere nos de camíno ignis ardéntis et de mánibus tuis, o rex, liberáre.  Quod si nolúerit, notum sit tibi, rex, quia deos tuos non cólimus et státuam áuream, quam erexísti, non adorámus.  Tunc Nabuchodónosor replétus est furóre, et aspéctus faciéi illíus immutátus est super Sidrach, Misach et Abdénago, et præcépit ut succenderétur fornax séptuplum quam succéndi consuéverat.'];
$l2r = ['Civitátem istam tu circúmda, Dómine: et Ángeli tui custódiant muros ejus.  * Exáudi, Dómine, pópulum tuum cum misericórdia.',
'Avertátur furor tuus, Dómine, a pópulo tuo et a civitáte sancta tua.'];

$l3 = ['lr|3|Cap. 3, 21-24',
		'Et conféstim viri illi vincti cum braccis suis et tiáris et calceaméntis et véstibus missi sunt in médium fornácis ignis ardéntis; nam jússio regis urgébat.  Fornax autem succénsa erat nimis; porro viros illos, qui míserant Sidrach, Misach et Abdénago, interfécit flamma ignis.  Viri autem hi tres, id est Sidrach, Misach et Abdénago, cecidérunt in médio camíno ignis ardéntis colligáti.  Et ambulábant in médio flammæ laudántes Deum et benedicéntes Dómino.'];
$l3r = ['Genti peccatríci, pópulo pleno peccáto miserére, * Dómine Deus.',
'Esto placábilis super nequítiam pópuli tui.'];

/******************************* ENGLISH **************************************/
$e1 = ['c|From Daniel the Prophet',
		'lr|1|Chap. 3, 14-15',
		'Nebuchadnezzar spake and said unto them, Is it true, O Shadrach, Meshach, and Abednego, do not ye serve my gods, nor worship the golden image which I have set up?  Now if ye be ready that at what time ye hear the sound of the cornet, flute, harp, sackbut, psaltery, and dulcimer, and all kinds of musick, ye fall down and worship the image which I have made; well: but if ye worship not, ye shall be cast the same hour into the midst of a burning fiery furnace; and who is that God that shall deliver you out of my hands?'];
$e1r = ['Before the face of thine anger, O God, the whole earth shall be desolate; *  But thou, O Lord, have mercy, and make not an end utterly.',
'O Lord, our Governour, how excellent is thy Name in all the world.'];

$e2 = ['lr|2|Chap. 3, 16-19',
		'Shadrach, Meshach, and Abednego, answered and said to the king, O Nebuchadnezzar, we are not careful to answer thee in this matter.  If it be so, our God whom we serve is able to deliver us from the burning fiery furnace, and he will deliver us out of thine hand, O king.  But if not, be it known unto thee, O king, that we will not serve thy gods, nor worship the golden image which thou hast set up.  Then was Nebuchadnezzar full of fury, and the form of his visage was changed against Shadrach, Meshach, and Abednego: therefore he spake, and commanded that they should heat the furnace one seven times more than it was wont to be heated.'];
$e2r = ['Gird about thy Holy City, O Lord, and let thine Angels keep the walls thereof. * O Lord, hearken unto thy people with mercy.',
'O Lord, let thine anger be turned away from thy people, and from this thine holy city.'];

$e3 = ['lr|3|Chap. 3, 21-24',
		'Then these men were bound in their coats, their hosen, and their hats, and their other garments, and were cast into the midst of the burning fiery furnace.  Therefore because the king’s commandment was urgent, and the furnace exceeding hot, the flames of the fire slew those men that took up Shadrach, Meshach, and Abednego.  And these three men, Shadrach, Meshach, and Abednego, fell down bound into the midst of the burning fiery furnace.  And they walked in the midst of the fire, praising God and blessing the Lord.'];
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
