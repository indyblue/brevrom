<?php 
	space();
	hidden('Passiontide',1);
	hidden('First Sunday',2);
	img('Tempore/t04_easter.png',100);
	head_temp(181,'Dominica Resurrectionis', 'Easter Sunday');
	rubp('Cum solemnis Vigiliæ paschalis celebratio locum obtineat officii nocturni dominicæ Resurrectionis, Matutino ejusdem dominicæ Resurrectionis omisso, statim inter Missarum vigiliæ solemnia, post Communionem, cantatur:', 'With the solemn Easter Vigil holding the place of the nocturnal Office of Easter Sunday, Matins of the same Easter Sunday is omitted, and immediately during the solemn Vigil Mass, after Communion, is chanted:');
	hour('pL');
	ant('Psalter/alleluia.php','1');
	psalm(150);
	ant('Psalter/alleluia.php','1');
	rubp('Capitulum, hymnus et versus non dicuntur, sed statim celebrans in cantu incipit:', 'The little chapter, hymn and versicle are not said, but rather the Celebrant immediately intones:');
	ant('prTemp/easter/10b.php','B');
	rubp('Canticum <snr>Benedíctus, p.'. bkref('benedictus') .'</s> cum <snr>Glória Patri</s> in fine.', 'The canticle <snr>Benedictus, p.'. bkref('benedictus') .'</s> followed by the <snr>Glory be</s>.');
	rubp('Repetita antiphona <snr>Et valde mane</s>, celebrans dicit:', 'The antiphon <snr>And very early</s> being repeated, the Celebrant says:');
	vrS('dominus_vobiscum.php');
	vr('oremus.php');
	head('Postcommunio seu oratio', 'Postcommunion prayer',4);
	prayer('prTemp/easter/10p.php');
	rubp('Deinde celebrans dicit:', 'Then the Celebrant says:');
	vrS('dominus_vobiscum.php');
	rubp('Et diaconus dicit:', 'And the Deacon says:');
	vrS('ite_missa_est_aa.php');
	rubp('Officium dominicæ Resurrectionis prosequitur deinde cum Prima ut infra.', 'The Office of Easter Sunday continues, with the next hour being Prime, as below.');
	rubp('Et non flectuntur genua toto tempore paschali.', 'And there is no kneeling for the whole Easter season.');

	space();
	rubp('Qui vero solemni Vigiliæ paschali non interfuerunt, tenentur dicere Matutinum et Laudes dominicæ Resurrectionis, ut infra.', 'Those who did not take part in the solemn Easter Vigil are to say Matins and Lauds of Easter Sunday, [Lauds] as below.');
	hour('L');
	ant('prTemp/easter/10L.php','20000');
	rubrics('ps/SuL1.php');
	ant('prTemp/easter/10L.php','02222');
	rubp('Capitulum, hymnus et versus non dicuntur, sed eorum loco:', 'The little chapter, hymn and versicle are not said, but rather in their place:');
	ant('prTemp/easter/10c.php','*');
	space();
	ant('prTemp/easter/10b.php','B');
	vr('oremus.php');
	prayer('prTemp/easter/10.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino_aa.php');
	rubp('Sic dicitur ad Laudes et ad Vesperas tantum.', 'It is said in this manner at Lauds and Vespers only.');
	vrS('fidelium_animae.php');

	space();
	hour('H');

space();
space();
space();
space();
space();
/*
	hour('1V');
	rubrics('ps/SaVant.php');	
	lc('hebr9_11-12.php');
	hymn('vexilla_regis_prodeunt.php',1);
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php');
	ant('PrTemp/passiontide/10m1.php','M');
	space();
	rubp('Hodie et deinceps usque ad feriam IV Hebdomadæ sanctæ inclusive, responsoria brevia ad Completorium et ad Horas, in Officio tam dominicali quam feriali, dicuntur sine <snr>Glória Patri</s>, prout in Ordinario pro tempore Passionis.', 'Today and on all following days until Wednesday of Holy Week inclusive, the brief response at Compline and at the little Hours is said without the <snr>Glory be</s>, in both the Sunday and ferial office, as in the Ordinary of Passiontide.');
	space();

	hour('L');
	ant('prTemp/passiontide/10L.php','20000');
	rubrics('ps/SuL2.php'); 
	ant('prTemp/passiontide/10L.php','02222');	
	lc('hebr9_11-12.php');
	hymn('lustra_sex_qui_jam_peregit.php',1);
	vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php');
	ant('PrTemp/passiontide/10b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/10.php');
	space();

	ordref(0,6.1,0);
	rubp('Ad Primam, ad absolutionem capituli lectio brevis <snr>Fáciem meam</s>, de tempore Passionis.', 'At Prime, at the end of the hour the brief lesson <snr>I have not turned</s>, of the season of Passiontide.');
	space();

	hour('T');
	lc('hebr9_11-12.php');
	brS('PrTemp/erue_a_framea_deus_animam_meam.php',0,1);
	vrS('PrTemp/de_ore_leonis_libera_me_domine.php');
	space();

	hour('S');
	lc('hebr9_13-14a.php');
	brS('PrTemp/de_ore_leonis_libera_me_domine.php',0,1);
	vrS('PrTemp/ne_perdas_cum_impiis_deus_animam_meam.php');
	space();

	hour('N');
	lc('hebr9_15.php');
	brS('PrTemp/ne_perdas_cum_impiis_deus_animam_meam.php',0,1);
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php');
	space();

	hour('2V');
	rubrics('ps/SuVant.php');	
	lc('hebr9_11-12.php');
	hymn('vexilla_regis_prodeunt.php',1);
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php');
	ant('PrTemp/passiontide/10m2.php','M');
	space();

	feria(2);
	vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php',0,'L');
	ant('PrTemp/passiontide/12b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/12L.php');
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php',0,'V');
	ant('PrTemp/passiontide/12m.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/12V.php');
	space();

	feria(3);
	vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php',0,'L');
	ant('PrTemp/passiontide/13b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/13L.php');
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php',0,'V');
	ant('PrTemp/passiontide/13m.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/13V.php');
	space();

	feria(4);
	vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php',0,'L');
	ant('PrTemp/passiontide/14b.php','B');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/14L.php');
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php',0,'V');
	ant('PrTemp/passiontide/14m.php','M');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/14V.php');
	space();

	feria(5);
	vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php',0,'L');
	ant('PrTemp/passiontide/15b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/15L.php');
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php',0,'V');
	ant('PrTemp/passiontide/15m.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/15V.php');
	space();

	feria(6);
	vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php',0,'L');
	ant('PrTemp/passiontide/16b.php','B');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/16L.php');
	feast_saint(array('Feria VI post Dominicam I Passionis',	'Friday after the 1st Sunday of Passiontide'), -1,'Septem Dolorum B. Mariæ Virg.','The Seven Dolours of the B.V.M.','B','prSanct/03-7dolours.php',0,array('prSanct/ora_pro_nobis_virgo_dolorosissima.php', 'prSanct/03-7dolours.php'));

	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php',0,'V');
	ant('PrTemp/passiontide/16m.php','M');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/16V.php');
	space();

	feria(7);
	vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php',0,'L');
	ant('PrTemp/passiontide/17b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/17L.php');

*/
?>


