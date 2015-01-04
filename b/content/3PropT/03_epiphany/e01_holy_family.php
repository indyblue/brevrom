<?php 
	space();
	hidden('Epiphany',1);
	hidden('Holy Family',2);
	bookmark('HolyFamily');
	head_temp(1,'Sanctæ Familiæ Jesu, Mariæ, Joseph', 'The Holy Family: Jesus, Mary and Joseph',array('dominica I post Epiphaniam', 'First Sunday after the Epiphany'));

	rubp('<snr>¶</s> Si hoc festum in die 13 januarii inciderit, de occurrenti Commemoratione Baptismatis Domini nihil fit.', '<snr>¶</s> If this feast occurs on January 13, no mention is made of the occurring Commemoration of the Baptism of the Lord.');
	space();

	hour('1V');
	ant('prTemp/epiphany/e01_hf_V1.php','20000');
	rubrics('ps/ComBVM.php');	
	ant('prTemp/epiphany/e01_hf_V1.php','02222');	
	lc('luke2_51.php');
	hymn('o_lux_beata_caelitum.php',1);
	vrS('prTemp/beati_qui_habitant_in_domo_tua_domine.php');
	ant('prTemp/epiphany/e01_hf_m1.php','M');
	rubp('Et non fit commemoratio dominicæ.', 'And commemoration is not made of the Sunday.');
	rubrics('prSanct/ComplineSun.php');
	space();

	hour('L');
	ant('prTemp/epiphany/e01_hf_L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/epiphany/e01_hf_L.php','02222');	
	lc('luke2_51.php');
	rubrics('head/HymnVerse.php');
	hymn('o_gente_felix_hospita.php');
	vrS('prTemp/ponam_universos_filios_tuos_doctos_a_domino.php');
	ant('prTemp/epiphany/e01_hf_b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/epiphany/e01_hf.php');
	rubp('Et non fit com. dominicæ.', 'And commem. is not made of the Sunday.');
	space();

	ordref(0,4.1,0);
	PrV('qui_mariae_et_joseph_subditus_fuisti.php');
	space();

	hour('T');
	lc('luke2_51.php');
	brS('prTemp/propter_nos_egenus_factus_est_cum_esset_dives.php');
	vrS('prTemp/dominus_vias_suas_docebit_nos.php');
	space();

	hour('S');
	lc('rom5_19.php');
	brS('prTemp/dominus_vias_suas_docebit_nos.php');
	vrS('prTemp/pauper_sum_ego_et_in_laboribus_a_juventute_mea.php');
	space();

	hour('N');
	lc('phil2_7.php');
	brS('prTemp/pauper_sum_ego_et_in_laboribus_a_juventute_mea.php');
	vrS('prTemp/ponam_universos_filios_tuos_doctos_a_domino.php');
	space();


	hour('2V');
	rubrics('ps/antLauds.php');
	rubrics('ps/ComBVM.php');	
	lc('luke2_51.php');
	rubrics('head/HymnVerse.php');
	hymn('o_lux_beata_caelitum.php',0);
	vrS('prTemp/ponam_universos_filios_tuos_doctos_a_domino.php');
	ant('prTemp/epiphany/e01_hf_m2.php','M');
	rubp('Et non fit com. dominicæ.', 'And commem. is not made of the Sunday.');
	rubrics('prSanct/ComplineSun.php');

?>



