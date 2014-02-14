<?php 
	space();
	hidden('Passiontide',1);
	hidden('First Sunday',2);
	head_temp(1,'Dominica I Passionis', 'First Sunday of Passiontide');

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

?>

