<?php 
	space();
	hidden('Easter',1);
	hidden('Easter Sunday',2);
	img('Tempore/t04_easter.png',100);
	head_temp(181,'Dominica Resurrectionis', 'Easter Sunday');
	rubp('Cum solemnis Vigiliæ paschalis celebratio locum obtineat officii nocturni dominicæ Resurrectionis, Matutino ejusdem dominicæ Resurrectionis omisso, statim inter Missarum vigiliæ solemnia, post Communionem, cantatur:', 'With the solemn Easter Vigil holding the place of the nocturnal Office of Easter Sunday, Matins of the same Easter Sunday is omitted, and immediately during the solemn Vigil Mass, after Communion, is chanted:');
	hour('pL');
	ant('Psalter/alleluia.php','1');
	psalm(150);
	ant('Psalter/alleluia.php','1');
	rubp('Capitulum, hymnus et versus non dicuntur, sed statim celebrans in cantu incipit:', 'The little chapter, hymn and versicle are not said, but rather the Celebrant immediately intones:');
	ant('prTemp/easter/00b.php','B');
	rubp('Canticum <snr>Benedíctus, p.'. bkref('benedictus') .'</s> cum <snr>Glória Patri</s> in fine.', 'The canticle <snr>Benedictus, p.'. bkref('benedictus') .'</s> followed by the <snr>Glory be</s>.');
	rubp('Repetita antiphona <snr>Et valde mane</s>, celebrans dicit:', 'The antiphon <snr>And very early</s> being repeated, the Celebrant says:');
	vrS('dominus_vobiscum.php');
	vr('oremus.php');
	head('Postcommunio seu oratio', 'Postcommunion prayer',4);
	prayer('prTemp/easter/00p.php');
	rubp('Deinde celebrans dicit:', 'Then the Celebrant says:');
	vrS('dominus_vobiscum.php');
	rubp('Et diaconus dicit:', 'And the Deacon says:');
	vrS('ite_missa_est_aa.php');
	rubp('Officium dominicæ Resurrectionis prosequitur deinde cum Prima ut infra.', 'The Office of Easter Sunday continues, with the next hour being Prime, as below.');
	rubp('Et non flectuntur genua toto tempore paschali.', 'And there is no kneeling for the whole Easter season.');

	space();
	rubp('Qui vero solemni Vigiliæ paschali non interfuerunt, tenentur dicere Matutinum et Laudes dominicæ Resurrectionis, ut infra.', 'Those who did not take part in the solemn Easter Vigil are to say Matins and Lauds of Easter Sunday, [Lauds] as below.');
	hour('L');
	ant('prTemp/easter/00L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prTemp/easter/00L.php','02222');
	rubp('Capitulum, hymnus et versus non dicuntur, sed eorum loco:', 'The little chapter, hymn and versicle are not said, but rather in their place:');
	ant('prTemp/easter/00c.php','*');
	space('line');
	ant('prTemp/easter/00b.php','B');
	vr('oremus.php');
	prayer('prTemp/easter/00.php');
	space('line');
	vr('dv_de_short2.php');
	vrS('benedicamus_domino_aa.php');
	rubp('Sic dicitur ad Laudes et ad Vesperas tantum.', 'It is said in this manner at Lauds and Vespers only.');
	vrS('fidelium_animae.php');

	space();
	hour('H');
	rubp('Ad Primam, post <snr>Deus, in adjutórium</s> et <snr>Glória Patri</s>, dicuntur psalmi de dominica, ut in festis, <snr>p. '. bkref('psDP53') .'</s>.', 'At Prime, after <snr>O God, come</s> and <snr>Glory be</s>, the psalms of Sunday, as on feasts, <snr>p. '. bkref('psDP53') .'</s>, are said immediately.');
	rubp('Expletis vero psalmis dicitur ant. <snr>Hæc dies</s>, ut supra.', 'After the psalms are concluded the ant. <snr>This is the day</s> is said, as above.');
	rubp('Postea <snr>Dóminus vobíscum</s>, or <snr>Dómine exáudi</s>, oratio <snr>Dómine Deus omnípotens</s>, et reliqua ut in Psalterio.', 'After <snr>The Lord be with you</s>, or <snr>O Lord, hear</s>, the prayer <snr>O Lord God almighty</s>, and that which follows, as in the Psalter.');
	rubp('Lectio br. <snr>Si consurrexístis</s>, ut ibidem.', 'Brief lesson <snr>If you be risen</s>, also in the Psalter.');
	space();
	rubp('Ad Tertiam, Sextam et Nonam, post <snr>Deus, in adjutórium</s> et <snr>Glória Patri</s>, dicuntur psalmi de dominica, deinde ant. <snr>Hæc dies</s>, ut supra.', 'At Terce, Sext and None, after <snr>O God, come</s> and <snr>Glory be</s>, the psalms of Sunday, and afterwards the ant. <snr>This is the day</s>, as above.');
	rubp('Postea <snr>Dóminus vobíscum</s>, or <snr>Dómine exáudi</s>, oratio <snr>Deus qui hodiérna</s> ut supra ad Laudes.', 'After <snr>The Lord be with you</s>, or <snr>O Lord, hear</s>, the prayer <snr>O God, who through</s>, as above at Lauds.');
	vr('dv_de_short2.php');
	vr('benedicamus_fidelium.php');

	space();
	hour('V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV.php');
	rubp('Capitulum, hymnus et versus non dicuntur, sed eorum loco:', 'The little chapter, hymn and versicle are not said, but rather in their place:');
	ant('prTemp/easter/00c.php','*');
	space('line');
	ant('prTemp/easter/00m.php','M');
	space('line');
	vr('dv_de_short2.php');
	vrS('benedicamus_domino_aa.php');
	rubp('Sic dicitur ad Laudes et ad Vesperas tantum.', 'It is said in this manner at Lauds and Vespers only.');
	vrS('fidelium_animae.php');

	space();
	hour('C');
	rubp('<s:VR>V. </s><snr>Jube.</s> <snr>Noctem quiétam.</s>, et reliqua usque ad <snr>Deus in adjutórium</s> inclusive, ut in Psalterio.', '<s:VR>V. </s><snr>Pray.</s> <snr>May the almighty.</s>, and as follows, until <snr>O God, come</s> inclusive, as in the Psalter.');
	rubrics('ps/SuC.php');
	ant('prTemp/easter/alleluia4.php','1');
	rubp('Deinde immediate dicitur:', 'Then immediately is said:');
	canticle('simeon.php');
	reading('vr/gloria_patri-s.php',0);
	ant('prTemp/easter/00c.php','*');
	vr('dv_de_short2.php');
	vr('oremus.php');
	prayer('Ord/compline01.php');
	vr('dv_de_short2.php');
	vrS('benedicamus_domino.php');
	vr('compline_bened.php');
	space();
	head('Antiphona beatæ Mariæ Virg.', 'Antiphon of the Bl. Virg. Mary',4);
	reading('bvm/reginacaeli2.php');
	vrS('Ord/gaude_et_laetare_virgo_maria.php',1);
	vr('oremus.php');
	prayer('Ord/compline05.php',1);
	space();
	rubp('Sic recitatur divinum Officium ad singulas Horas usque ad Nonam sabbati in Albis inclusive, exceptis iis quæ singulis diebus habentur propria.', 'The Divine Office is recited in this manner at all Hours until “White Saturday” at None inclusive, except that which is given as proper for the day.');

	space();
	feria(2,31);
	ant('prTemp/easter/02b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/easter/02.php');
	ant('prTemp/easter/02m.php','M');

	space();
	feria(3,31);
	ant('prTemp/easter/03b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/easter/03.php');
	ant('prTemp/easter/03m.php','M');

	space();
	feria(4,31);
	ant('prTemp/easter/04b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/easter/04.php');
	ant('prTemp/easter/04m.php','M');

	space();
	feria(5,31);
	ant('prTemp/easter/05b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/easter/05.php');
	ant('prTemp/easter/05m.php','M');

	space();
	feria(6,31);
	ant('prTemp/easter/06b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/easter/06.php');
	ant('prTemp/easter/06m.php','M');

	space();
	feria('7a',31);
	ant('prTemp/easter/07b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/easter/07.php');

?>
