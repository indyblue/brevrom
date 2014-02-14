<?php 
	hidden('Passiontide',1);
	hidden('Holy Thursday',2);
	head_temp(1,'Feria Quinta in Cena Domini', 'The Thursday of the Lord’s Supper');
	rubp('A Matutino hujus feriæ usque ad Completorium Sabbati sancti, in fine psalmorum, ad omnes Horas, omittitur <snr>Glória Patri</s>.', 'From Matins of this day until Compline of Holy Saturday, at all the Hours, the <snr>Glory be</s> is omitted at the end of the psalms.');
	hour('L');
	rubrics('ps/FeriaL2.php',-5); 
	rubrics('capitulum_et_hymnus_non_dicuntur.php');
	vrS('PrTemp/homo_pacis_meae_in_quo_speravi.php');
	ant('PrTemp/passiontide/25b.php','B');
	rubp('Dum dicitur canticum <snr>Benedíctus</s>, exstinctis prius omnibus candelis in candelabro triangulari, præter unam, quæ accensa remanet in summitate candelabri, extinguuntur paulatim sex candelæ positæ super altare, ita ut ad ultimum versum cantici extinguatur ultima candela.', 'Then, while the canticle <snr>Benedictus</s> is said, all the candles on the triangular candelabra having previously been extinguished, except the one still lit at the summit; the six candles on the altar are extinguished one by one, so that at the last verse of the canticle the final candle is extinguished.');
	rubp('Similiter extinguuntur luminaria et lampades per ecclesiam.', 'Similarly all lights and lamps in the church are extinguished.');
	space();
	rubp('Repetita antiphona ad <snr>Benedíctus</s>, dicitur, flexis genibus:', 'After the antiphon at the <snr>Benedictus</s> is repeated, the following is said while kneeling:');
	ant('PrTemp/passiontide/25c.php','1');
	rubp('Et, ea finita, additur <snr>Pater noster</s> totum sub silentio; postea, clara voce, sine <snr>Orémus</s>, subjungitur:', 'And, when this is finished, the <snr>Our Father</s> is added, all of which is said silently; afterwards, in a clear voice, without <snr>Let us pray</s>, is said:');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/25.php');
	rubp('Deinde omnes surgunt et cum silentio discedunt.', 'Then all arise and depart in silence.');

	space();
	hour('H');
	rubp('Horæ minores dicuntur hora competenti, candelis extinctis et sine cantu.', 'The little Hours are said at a suitable hour, with candles extinguished and without chant.');
	rubp('Absolute inchoatur a psalmis, qui erunt de dominica, ad Primam tamen ut in festis, <snr>p. '. bkref('psDP53') .'</s>.', 'They are begun immediately with the psalms, which are of Sunday, but a Prime as on feasts, <snr>p. '. bkref('psDP53') .'</s>.');
	rubp('Psalmis expletis, dicitur, flexis genibus, ant. <snr>Christus factus est</s>, cum reliquis, ut supra ad Laudes.', 'Once the psalms are completed, the ant. <snr>Christ became</s>, and the rest, are said as above at Lauds.');
	rubp('Ad Primam non legitur Martyrologium, nec dicuntur cetera omnia usque ad finem Horæ.', 'At Prime the Martyrology is not read, nor is said all that which follows it, up to the end of the Hour.');

	space();
	hour('V');
	rubp('Vesperæ ab iis qui Missæ vespertinæ in Cena Domini intersunt, hodie non dicuntur.', 'Vespers is not said by those who take part in the evening Mass of the Lord’s Supper.');
	rubrics('ps/HolySatV.php');
	ant('PrTemp/passiontide/25V.php','2');
	ant('PrTemp/passiontide/25m.php','M');
	rubp('Repetita antiphona ad <snr>Magníficat</s>, dicitur, flexis genibus, ant. <snr>Christus factus est</s>, cum reliquis, ut supra ad Laudes.', 'After the antiphon at the <snr>Magnificat</s> is repeated, the ant. <snr>Christ became</s>, and the rest, are said as above at Lauds.');
	rubp('Deinde omnes surgunt et cum silentio discedunt.', 'Then all arise and depart in silence.');

	space();
	bookmark('ptHolyThursC');
	hour('C');
	rubp('Completorium dicitur post denudationem altarium, candelis extinctis et sine cantu.', 'Compline is said after the stripping of the altars, with candles extinguished and without chant.');

	rubp('Ubi, juxta rubricas, Completorium dicitur tamquam ultima diei precatio, in qua fit examen conscientiæ, tunc, si recitatur in choro vel in communi, moderator chori vel communitatis, signo dato, indicat initiandum esse examen conscientiæ; quo absoluto, dicitur <snr>Confíteor, Misereátur, Indulgéntiam, p. '. bkref('confiteor') .'</s>, et fiunt reliqua ut infra.', 'When, according to the rubrics, Compline is said as the final prayer of the day and the examination of conscience is made, then, if said in choir or community, the leader of the choir or community gives a sign to indicate the beginning of the examination of conscience; when finished, the <snr>Confíteor, Misereátur, Indulgéntiam</s> are said, <snr>p. '. bkref('confiteor') .'</s>, and then the rest as below.');

	if($_GET['long']==1) {
		psalm(4);
		psalm(90);
		psalm(133);
	} else {
		space();
		rubrics('ps/SuC.php');
	}

	space();
	canticle('simeon.php');
	space();
	rubp('Deinde dicitur, flexis genibus:', 'Then the following is said while kneeling:');
	rubp('(quæ non dicitur Sabbato sancto)', '(which is not said on Holy Saturday)');
	ant('PrTemp/passiontide/25c.php','1');
	rubp('Feria VI additur: <snr>Mortem autem crucis.</s>', 'On Friday is added: <snr>Even to the death of the Cross.</s>');
	rubp('<snr>Pater noster</s> totum sub silentio. Postea, clara voce, sine <snr>Orémus</s>, subjungitur:', '<snr>Our Father</s>, all of which is said silently. Afterwards, in a clear voice, without <snr>Let us pray</s>, is said:');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/25Compl.php');
	rubp('Deinde omnes surgunt et cum silentio discedunt.', 'Then all arise and depart in silence.');

?>

