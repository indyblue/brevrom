<?php 
	space();
	hidden('Passiontide',1);
	hidden('Holy Saturday',2);
	head_temp(1,'Sabbato Sancto', 'Holy Saturday');
	hour('L');
	rubrics('ps/FeriaL2.php',-7);
	rubrics('capitulum_et_hymnus_non_dicuntur.php');
	vrS('PrTemp/caro_mea_requiescet_in_spe.php');
	ant('PrTemp/passiontide/27b.php','B');
	rubp('Repetita antiphona ad <snr>Benedíctus</s>, dicitur, flexis genibus:', 'After the antiphon at the <snr>Benedictus</s> is repeated, the following is said while kneeling:');
	ant('PrTemp/passiontide/27c.php','1');
	rubp('Et, ea finita, additur <snr>Pater noster</s> totum sub silentio; postea, clara voce, sine <snr>Orémus</s>, subjungitur:', 'And, when this is finished, the <snr>Our Father</s> is added, all of which is said silently; afterwards, in a clear voice, without <snr>Let us pray</s>, is said:');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/27.php');
	rubp('Deinde omnes surgunt et cum silentio discedunt.', 'Then all arise and depart in silence.');

	space();
	hour('H');
	rubp('Horæ minores dicuntur hora competenti, candelis extinctis et sine cantu.', 'The little Hours are said at a suitable hour, with candles extinguished and without chant.');
	rubp('Absolute inchoatur a psalmis, qui erunt de dominica, ad Primam tamen ut in festis, <snr>p. '. bkref('psDP53') .'</s>.', 'They are begun immediately with the psalms, which are of Sunday, but a Prime as on feasts, <snr>p. '. bkref('psDP53') .'</s>.');
	rubp('Psalmis expletis, dicitur, flexis genibus, ant. <snr>Christus factus est</s>, cum reliquis, ut supra ad Laudes.', 'Once the psalms are completed, the ant. <snr>Christ became</s>, and the rest, are said as above at Lauds.');
	rubp('Ad Primam non legitur Martyrologium, nec dicuntur cetera omnia usque ad finem Horæ.', 'At Prime the Martyrology is not read, nor is said all that which follows it, up to the end of the Hour.');

	space();
	hour('V');
	rubp('Vesperæ dicuntur post meridiem, hora competenti, candelis exstinctis et sine cantu.', 'Vespers is said after noon, at a suitable hour, with candles extinguished and without chant.');
	rubp('Absolute inchoantur ab antiphona primi psalmi.', 'It is begun immediately with the antiphon of the first psalm.');
	bookmark('PsPrHolySat');
	space('line');
	rubp('Feria V et VI:', 'Thursday and Friday:',0,1);
	ant('PrTemp/passiontide/25V.php','2',0,'','',1);
	space('line');
	rubp('Sabbato sancto:', 'Holy Saturday:',0,1);
	ant('PrTemp/passiontide/27V.php','20000');
	psalm(115);
	space('line');
	rubp('Feria V et VI:', 'Thursday and Friday:',0,1);
	ant('PrTemp/passiontide/25V.php','1');
	space('line');
	rubp('Sabbato sancto:', 'Holy Saturday:',0,1);
	ant('PrTemp/passiontide/27V.php','12000');
	psalm(119);
	ant('PrTemp/passiontide/27V.php','01200');
	psalm(139);
	ant('PrTemp/passiontide/27V.php','00120');
	psalm(140);
	ant('PrTemp/passiontide/27V.php','00012');
	psalm(141);
	ant('PrTemp/passiontide/27V.php','00001');
	space();

	rubrics('capitulum_et_hymnus_non_dicuntur.php');
	space('line');
	rubp('Feria V in Cena Domini:', 'Holy Thursday:',0,1);
	ant('PrTemp/passiontide/25m.php','M',0,'','',1);
	rubp('Feria VI in Passione et Morte Domini:', 'Friday of the Passion and Death of the Lord:',0,1);
	ant('PrTemp/passiontide/26m.php','M',0,'','',1);
	space('line');
	rubp('Sabbato sancto:', 'Holy Saturday:',0,1);
	ant('PrTemp/passiontide/27m.php','M');
	space();

	rubp('Repetita antiphona ad <snr>Magníficat</s>, omissis antiphona <snr>Christus factus est</s> et <snr>Pater noster</s>, statim dicitur:', 'After the antiphon at the <snr>Magnificat</s> is repeated, the antiphon <snr>Christ became</s> and the <snr>Our Father</s> are omitted, and immediately is said:');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/27.php');
	rubp('Et sic terminatur Vesperæ.', 'And thus Vespers in ended.');
	rubp('Ante Missam Vigiliæ paschalis explicit tempus Passionis, et ab initio ejusdem Missæ incipit tempus paschale.', 'Before the Vigil Mass of Easter the season of Passiontide ends, and at the beginning of the same Mass the season of Easter begins.');

	space();
	hour('C');
	rubp('Completorium dicitur tantum ab iis qui solemni vigilæ paschali non intersunt.', 'Compline is said only by those who do not take part in the solemn Easter Vigil.');
	rubp('Omnia ut in Cena Domini, <snr>p. '. bkref('ptHolyThursC') .'</s>, omissa antiphona <snr>Christus factus est</s>.', 'All as on Holy Thursday, <snr>p. '. bkref('ptHolyThursC') .'</s>, except the antiphon <snr>Christ became</s> is omitted.');

?>

