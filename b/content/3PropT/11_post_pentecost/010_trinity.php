<?php 
	space();
	hidden('After Pentecost',1);
	hidden('Trinity Sunday',2);
	img('Tempore/t07_trinity.png',100);
	head_temp(1,'in Festo Sanctissimæ Trinitatis', 'The Feast of the Most Holy Trinity',array('Dominica I Post Pentecosten', 'First Sunday after Pentecost'));

	hour('1V');
	rubrics('ps/antLauds.php');
	rubrics('ps/SuV116.php');
	lc('rom11_33.php');
	hymn('jam_sol_recedit_igneus_amorem.php',1);
	vrS('prTemp/benedicamus_patrem_et_filium_cum_sancto_spiritu.php');
	ant('prTemp/post_pentecost/010m1.php','M');
	rubrics('et_non_fit_com_dominicae.php');
	rubrics('prSanct/ComplineSun.php');
	space();

	hour('L');
	ant('prTemp/post_pentecost/010L.php','20000');
	rubrics('ps/SuL1.php'); 
	ant('prTemp/post_pentecost/010L.php','02222');	
	lc('rom11_33.php');
	rubrics('head/HymnVerse.php');	
	hymn('tu_trinitatis_unitas.php');
	vrS('prTemp/benedicamus_patrem_et_filium_cum_sancto_spiritu.php');
	ant('prTemp/post_pentecost/010b.php','B');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_pentecost/010t.php');
	rubrics('et_non_fit_com_dominicae.php');
	space();

	ordref(0,5,0);

	hour('P');
	ant('prTemp/post_pentecost/010L.php','*0000');
	rubp('Psalmi ut in festis, <snr>p. '. bkref('psDP53') .'</s>, quibus persolutis additur sequens:', 'Psalms as on feasts, <snr>p. '. bkref('psDP53') .'</s>, and on completion the following is added:');
	reading('athanasian.php');
	reading('vr/gloria_patri-s.php',0);
	ant('prTemp/post_pentecost/010L.php','10000');
	space();


	hour('T');
	ant('prTemp/post_pentecost/010L.php','0*000');
	lc('rom11_33.php');
	brS('prTemp/benedicamus_patrem_et_filium_cum_sancto_spiritu.php');
	vrS('prTemp/benedictus_es_domine_in_firmamento_caeli.php');
	space();

	hour('S');
	ant('prTemp/post_pentecost/010L.php','00*00');
	lc('2cor13_13.php');
	brS('prTemp/benedictus_es_domine_in_firmamento_caeli.php');
	vrS('prTemp/verbo_domini_caeli_firmati_sunt.php');
	space();

	hour('N');
	ant('prTemp/post_pentecost/010L.php','0000*');
	lc('1john5_7.php');
	brS('prTemp/verbo_domini_caeli_firmati_sunt.php');
	vrS('prTemp/sit_nomen_domini_benedictum.php');
	space();

	hour('2V');
	ant('prTemp/post_pentecost/010L.php','20000');
	rubrics('ps/SuV.php');
	ant('prTemp/post_pentecost/010L.php','02222');	
	lc('rom11_33.php');
	rubrics('head/HymnVerse.php');	
	hymn('jam_sol_recedit_igneus_amorem.php',0);
	vrS('prTemp/benedictus_es_domine_in_firmamento_caeli.php');
	ant('prTemp/post_pentecost/010m2.php','M');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_pentecost/010t.php');
	rubrics('et_non_fit_com_dominicae.php');
	rubrics('prSanct/ComplineSun.php');
	space();
	bookmark('1_post_pentecost');
	rubp('In Officio feriæ:', 'In the ferial Office:');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_pentecost/010.php');

?>


