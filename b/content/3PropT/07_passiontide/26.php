<?php 
	space();
	hidden('Passiontide',1);
	hidden('Good Friday',2);
	head_temp(1,'Feria Sexta in Passione et Morte Domini', 'The Friday of the Lord’s Passion and Death');
	hour('L');
	rubrics('ps/FeriaL2.php',-6); 
	rubrics('capitulum_et_hymnus_non_dicuntur.php');
	vrS('PrTemp/collocavit_me_in_obscuris.php');
	ant('PrTemp/passiontide/26b.php','B');
	rubp('Repetita antiphona ad <snr>Benedíctus</s>, dicitur, flexis genibus:', 'After the antiphon at the <snr>Benedictus</s> is repeated, the following is said while kneeling:');
	ant('PrTemp/passiontide/26c.php','1');
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
	ant('PrTemp/passiontide/26m.php','M');
	rubp('Repetita antiphona ad <snr>Magníficat</s>, dicitur, flexis genibus, ant. <snr>Christus factus est</s>, cum reliquis, ut supra ad Laudes.', 'After the antiphon at the <snr>Magnificat</s> is repeated, the ant. <snr>Christ became</s>, and the rest, are said as above at Lauds.');
	rubp('Deinde omnes surgunt et cum silentio discedunt.', 'Then all arise and depart in silence.');

	space();
	hour('C');
	rubp('Completorium dicitur post solemnem Actionem liturgicam, candelis exstinctis et sine cantu.', 'Compline is said after the solemn liturgical action, with candles extinguished and without chant.');
	rubp('Omnia ut in Cena Domini, <snr>p. '. bkref('ptHolyThursC') .'</s>.', 'All as on Holy Thursday, <snr>p. '. bkref('ptHolyThursC') .'</s>.');

?>

