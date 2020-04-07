<?php 
	space();
	hidden('Passiontide',1);
	hidden('Good Friday',2);
	head_temp(1,'Feria Sexta in Passione et Morte Domini', 'The Friday of the Lord’s Passion and Death');
	hour('L');
	// rubrics('ps/FeriaL2.php',-6); 
	function multiant2($day, $hour, $incs){
		ant('prTemp/passiontide/2'. $day .'L.php',$incs,0,'','',1);	
	}
	multiant2(6,1,'20000');
	psalm(50);
	space(2);
	multiant2(6,1,'12000');
	psalm(142);
	space(2);
	multiant2(6,1,'01200');
	psalm(84);
	space(2);
	multiant2(6,1,'00120');
	canticle('habacuc.php');
	space(2);
	multiant2(6,1,'00012');
	psalm(147);
	space(2);
	multiant2(6,1,'00001');

	rubrics('capitulum_et_hymnus_non_dicuntur.php');
	vrS('prTemp/collocavit_me_in_obscuris.php');
	ant('prTemp/passiontide/26b.php','B');
	rubp('Repetita antiphona ad <snr>Benedíctus</s>, dicitur, flexis genibus:', 'After the antiphon at the <snr>Benedictus</s> is repeated, the following is said while kneeling:');
	
	function ending() {
		space();
		ant('prTemp/passiontide/26c.php','1');
		rubp('Et, ea finita, additur <snr>Pater noster</s> totum sub silentio; postea, clara voce, sine <snr>Orémus</s>, subjungitur:', 'And, when this is finished, the <snr>Our Father</s> is added, all of which is said silently; afterwards, in a clear voice, without <snr>Let us pray</s>, is said:');
		rubrics('head/Prayer.php');
		prayer('prTemp/passiontide/25.php');
		rubp('Deinde omnes surgunt et cum silentio discedunt.', 'Then all arise and depart in silence.');
	}
	ending();

	space();
	hour('H');
	rubp('Horæ minores dicuntur hora competenti, candelis extinctis et sine cantu.', 'The little Hours are said at a suitable hour, with candles extinguished and without chant.');
	rubp('Absolute inchoatur a psalmis, qui erunt de dominica, ad Primam tamen ut in festis, <snr>p. '. bkref('psDP53') .'</s>.', 'They are begun immediately with the psalms, which are of Sunday, but a Prime as on feasts, <snr>p. '. bkref('psDP53') .'</s>.');

	hour('P');
	psalm(53);
	psalm(118,1);
	psalm(118,2);
	rubp('Ad Primam non legitur Martyrologium, nec dicuntur cetera omnia usque ad finem Horæ.', 'At Prime the Martyrology is not read, nor is said all that which follows it, up to the end of the Hour.');
	ending();

	hour('T');
	psalm(118,3);
	psalm(118,4);
	psalm(118,5);
	ending();

	hour('S');
	psalm(118,6);
	psalm(118,7);
	psalm(118,8);
	ending();

	hour('N');
	psalm(118,9);
	psalm(118,10);
	psalm(118,11);
	ending();

	space();
	hour('V');
	rubp('Vesperæ ab iis qui Missæ vespertinæ in Cena Domini intersunt, hodie non dicuntur.', 'Vespers is not said by those who take part in the evening Mass of the Lord’s Supper.');
	rubrics('ps/HolySatV.php');
	
	ant('prTemp/passiontide/25V.php','2');
	psalm(115);
	ant('prTemp/passiontide/25V.php','1');
	ant('prTemp/passiontide/27V.php','02000');
	psalm(119);
	ant('prTemp/passiontide/27V.php','01200');
	psalm(139);
	ant('prTemp/passiontide/27V.php','00120');
	psalm(140);
	ant('prTemp/passiontide/27V.php','00012');
	psalm(141);
	ant('prTemp/passiontide/27V.php','00001');
	
	space();
	rubrics('capitulum_et_hymnus_non_dicuntur.php');
	space();
	ant('prTemp/passiontide/26m.php','*');
	canticle('magnificat.php');
	ant('prTemp/passiontide/26m.php','1');
	
	rubp('Repetita antiphona ad <snr>Magníficat</s>, dicitur, flexis genibus, ant. <snr>Christus factus est</s>, cum reliquis, ut supra ad Laudes.', 'After the antiphon at the <snr>Magnificat</s> is repeated, the ant. <snr>Christ became</s>, and the rest, are said as above at Lauds.');
	ending();

	space();
	hour('C');
	rubp('Completorium dicitur post solemnem Actionem liturgicam, candelis exstinctis et sine cantu.', 'Compline is said after the solemn liturgical action, with candles extinguished and without chant.');

	rubp('Ubi, juxta rubricas, Completorium dicitur tamquam ultima diei precatio, in qua fit examen conscientiæ, tunc, si recitatur in choro vel in communi, moderator chori vel communitatis, signo dato, indicat initiandum esse examen conscientiæ; quo absoluto, dicitur <snr>Confíteor, Misereátur, Indulgéntiam, p. '. bkref('confiteor') .'</s>, et fiunt reliqua ut infra.', 'When, according to the rubrics, Compline is said as the final prayer of the day and the examination of conscience is made, then, if said in choir or community, the leader of the choir or community gives a sign to indicate the beginning of the examination of conscience; when finished, the <snr>Confíteor, Misereátur, Indulgéntiam</s> are said, <snr>p. '. bkref('confiteor') .'</s>, and then the rest as below.');

		psalm(4);
		psalm(90);
		psalm(133);

	space();
	canticle('simeon.php');
	space();
	rubp('Deinde dicitur, flexis genibus:', 'Then the following is said while kneeling:');
	rubp('(quæ non dicitur Sabbato sancto)', '(which is not said on Holy Saturday)');
	ant('prTemp/passiontide/25c.php','1');
	rubp('Feria VI additur: <snr>Mortem autem crucis.</s>', 'On Friday is added: <snr>Even to the death of the Cross.</s>');
	rubp('<snr>Pater noster</s> totum sub silentio. Postea, clara voce, sine <snr>Orémus</s>, subjungitur:', '<snr>Our Father</s>, all of which is said silently. Afterwards, in a clear voice, without <snr>Let us pray</s>, is said:');
	rubrics('head/Prayer.php');
	prayer('prTemp/passiontide/25Compl.php');
	rubp('Deinde omnes surgunt et cum silentio discedunt.', 'Then all arise and depart in silence.');

?>

