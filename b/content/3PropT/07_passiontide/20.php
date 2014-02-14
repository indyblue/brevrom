<?php 
	space();
	hidden('Passiontide',1);
	hidden('Second Sunday',2);
	head_temp(1,'Dominica II Passionis <br><r>seu</s> in Palmis', 'Second Sunday of Passiontide, <br><r>or</s> Palm Sunday');

	hour('1V');
	rubrics('ps/SaVant.php');	
	lc('phil2_5.php');
	hymn('vexilla_regis_prodeunt.php',1);
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php');
	ant('PrTemp/passiontide/20m1.php','M');
	space();
	rubp('<snr>¶</s> Dominica II Passionis seu in palmis, feria II, III et IV hebdomadæ sanctæ, Officium divinum horis consuetis persolvitur.', '<snr>¶</s> On Palm Sunday, and Monday, Tuesday and Wednesday of Holy Week, the Divine Office is said at the customary hours.');
	space();

	hour('L');
	ant('prTemp/passiontide/20L.php','20000');
	rubrics('ps/SuL2.php'); 
	ant('prTemp/passiontide/20L.php','02222');	
	lc('phil2_5.php');
	hymn('lustra_sex_qui_jam_peregit.php',1);
	vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php');
	ant('PrTemp/passiontide/20b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/20.php');
	space();

	ordref(0,6.1,0);

	hour('T');
	lc('phil2_5.php');
	brS('PrTemp/erue_a_framea_deus_animam_meam.php',0,1);
	vrS('PrTemp/de_ore_leonis_libera_me_domine.php');
	space();

	hour('S');
	lc('phil2_8.php');
	brS('PrTemp/de_ore_leonis_libera_me_domine.php',0,1);
	vrS('PrTemp/ne_perdas_cum_impiis_deus_animam_meam.php');
	space();

	hour('N');
	lc('phil2_10-11.php');
	brS('PrTemp/ne_perdas_cum_impiis_deus_animam_meam.php',0,1);
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php');
	space();

	hour('2V');
	rubrics('ps/SuVant.php');	
	lc('phil2_5.php');
	hymn('vexilla_regis_prodeunt.php',1);
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php');
	ant('PrTemp/passiontide/20m2.php','M');
	space();

	feria(2,-1);
	rubrics('ps/feriaL2.php',2); 
	vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php');
	ant('PrTemp/passiontide/22b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/22L.php');
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php',0,'V');
	ant('PrTemp/passiontide/22m.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/22V.php');
	space();

	feria(3,-1);
	rubrics('ps/feriaL2.php',3); 
	vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php');
	ant('PrTemp/passiontide/23b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/23L.php');
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php',0,'V');
	ant('PrTemp/passiontide/23m.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/23V.php');
	space();

	feria(4,-1);
	rubrics('ps/feriaL2.php',4); 
	vrS('PrTemp/eripe_me_de_inimicis_meis_deus_meus.php');
	ant('PrTemp/passiontide/24b.php','B');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/24L.php');
	vrS('PrTemp/eripe_me_domine_ab_homine_malo.php',0,'V');
	ant('PrTemp/passiontide/24m.php','M');
	rubrics('et_dicuntur_preces.php');
	rubrics('head/Prayer.php');
	prayer('PrTemp/passiontide/24V.php');
	space();

?>
