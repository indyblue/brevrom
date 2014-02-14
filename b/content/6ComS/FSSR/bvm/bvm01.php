<?php
	space();
	hidden('Little Office BVM',1);
	bvm_head(1);
	rubp('Quod dicitur a Matutino diei 3 februarii usque ad Nonam Sabbati sancti inclusive, præterquam in festo Annuntiationis; et a Vesperis sabbati post octavam Pentecostes usque ad Nonam sabbati ante dominicam I Adventus inclusive.', 'Which is said from Matins of February 3 until None of Holy Saturday inclusive, except in the feast of the Annuntiation; and from Saturday Vespers after the octave of Pentecost until Saturday None before the first Sunday of Advent inclusive.');
	space();
	bookmark('BVMp1');

	hidden('Matins',2);
	if($_GET['matins']) require 'bvm01_matins.php';

	// ************************************************************
	hidden('<s:Visible>Lauds</s>',2);
	hour('L');
	vr('deus_in_adjutorium.php');
	space();

	$ant = 'prSanct/0815L.php';
	ant($ant,'20000');
	psalm(92);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'12000');
	psalm(99);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'01200');
	psalm(62);
	if($old==1) {
		rubp('Hic non dicitur <snr>Glória Patri</s>.','Here is not said the <snr>Glory be</s>.');
		psalm(66);
	}
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'00120');
	canticle('threechildren.php');
	space('Spacer');
	ant($ant,'00012');
	psalm(148);
	if($old==1) {
		rubp('Hic non dicitur <snr>Glória Patri</s>.','Here is not said the <snr>Glory be</s>.');
		psalm(149);
		rubp('Hic non dicitur <snr>Glória Patri</s>.','Here is not said the <snr>Glory be</s>.');
		psalm(150);
	}
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'00001');
	space();	

	lc('cant6_8.php');
	space();	

	rubrics('head/HymnVerse.php');
	hymn('o_gloriosa_virginum.php');
	vrS('benedicta_tu_in_mulieribus.php');
	space();	

	ant('beata_dei_genitrix_maria_virgo_perpetua.php','B');
	if($long==0) {
		rubp('Canticum <snr>Benedíctus</s>, p. <snr>'.bkref('benedictus').'</s>', 'The Canticle <snr>Benedíctus</s>, p. <snr>'.bkref('benedictus').'</s>',1);
	} else {
		canticle('benedictus.php');
		reading('vr/gloria_patri-a.php',0);
		space();

		ant('beata_dei_genitrix_maria_virgo_perpetua.php','1');
	}
	space();	
	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vr('dv_de.php');
	vr('oremus.php');
	prayer('prSanct/0325.php');

	if($old==1) {
		space();	
		ant('sancti_dei_omnes_intercedere.php');
		vrS('laetamini_in_domino_et_exultate_justi.php');
		vr('oremus.php');
		prayer('BVMp_c1.php');
		prayer('BVMp_c2.php',1);
		space();
	}

	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Prime',2);
	hour('P');
	vr('deus_in_adjutorium.php');
	space();
	rubrics('head/HymnVerse.php');
	hymn('memento_rerum_conditor.php',0);
	space();

	ant($ant,'*0000');
	psalm(53);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(84);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(116);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'10000');
	space();

	lc('cant6_9.php');
	space();	

	vrS('dignare_me_laudare_te_virgo_sacrata.php');
	space();	

	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vr('dv_de.php');
	vr('oremus.php');
	prayer('BVMp_P.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Terce',2);
	hour('T');
	vr('deus_in_adjutorium.php');
	space();
	if($long==0) {
		hymn('memento_rerum_conditor.php',1);
	} else {
		rubrics('head/HymnVerse.php');
		hymn('memento_rerum_conditor.php');
	}
	space();

	ant($ant,'0*000');
	psalm(119);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(120);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(121);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'01000');
	space();

	lc('ecclus24_15.php');
	space();	

	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	space();	

	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vr('dv_de.php');
	vr('oremus.php');
	prayer('csBVMSat1.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Sext',2);
	hour('S');
	vr('deus_in_adjutorium.php');
	space();
	if($long==0) {
		hymn('memento_rerum_conditor.php',1);
	} else {
		rubrics('head/HymnVerse.php');
		hymn('memento_rerum_conditor.php');
	}
	space();

	ant($ant,'00*00');
	psalm(122);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(123);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(124);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'00100');
	space();

	lc('ecclus24_16.php');
	space();	

	vrS('benedicta_tu_in_mulieribus.php');
	space();	

	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vr('dv_de.php');
	vr('oremus.php');
	prayer('BVMp_S.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('None',2);
	hour('N');
	vr('deus_in_adjutorium.php');
	space();
	if($long==0) {
		hymn('memento_rerum_conditor.php',1);
	} else {
		rubrics('head/HymnVerse.php');
		hymn('memento_rerum_conditor.php');
	}
	space();

	ant($ant,'0000*');
	psalm(125);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(126);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(127);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'00001');
	space();

	lc('ecclus24_19.php');
	vrS('prSanct/post_partum_virgo_inviolata_permansisti.php');
	space();

	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vr('dv_de.php');
	vr('oremus.php');
	prayer('BVMp_N.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Vespers',2);
	hour('V');
	vr('deus_in_adjutorium.php');
	space();

	$ant = 'csBVML.php';
	ant($ant,'20000');
	psalm(109);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'12000');
	psalm(112);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'01200');
	psalm(121);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'00120');
	psalm(126);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'00012');
	psalm(147);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'00001');
	space();	

	lc('ecclus24_14.php');

	rubrics('head/HymnVerse.php');
	hymn('ave_maris_stella.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	space();	

	ant('opBVMVm.php','M');
	if($long==0) {
		rubp('Canticum <snr>Magníficat</s>, p. <snr>'.bkref('magnificat').'</s>', 'The Canticle <snr>Magníficat</s>, p. <snr>'.bkref('magnificat').'</s>',1);
	} else {
		canticle('magnificat.php');
		reading('vr/gloria_patri-a.php',0);
		space();

		ant('opBVMVm.php','1');
	}
	space();	
	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vr('dv_de.php');
	vr('oremus.php');
	prayer('csBVM1.php');

	if($old==1) {
		space();	
		ant('sancti_dei_omnes_intercedere.php');
		vrS('laetamini_in_domino_et_exultate_justi.php');
		vr('oremus.php');
		prayer('BVMp_c1.php');
		prayer('BVMp_c2.php',1);
		space();
	}

	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Compline',2);
	hour('C');
	vrS('Ord/converte_nos_deus_salutaris_noster.php');
	vr('deus_in_adjutorium.php');
	space();

	psalm(128);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(129);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(130);
	reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	space();

	if($long==0) {
		hymn('memento_rerum_conditor.php',1);
	} else {
		rubrics('head/HymnVerse.php');
		hymn('memento_rerum_conditor.php');
	}
	space();

	lc('ecclus24_24.php');
	vrS('Ord/ora_pro_nobis_sancta_dei_genitrix.php');
	space();

	ant('sub_tuum_praesidium.php','*');
	if($long==0) {
		rubp('Canticum <snr>Nunc dimíttis</s>, p. <snr>'.bkref('simeon').'</s>', 'The Canticle <snr>Nunc dimíttis</s>, p. <snr>'.bkref('simeon').'</s>',1);
	} else {
		canticle('simeon.php');
		reading('vr/gloria_patri-a.php',0);
		space();

		ant('sub_tuum_praesidium.php','1');
	}
	space();	

	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vr('dv_de.php');
	vr('oremus.php');
	prayer('BVMp_C.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vr('compline_bened.php');

	if($long==0) {
		rubp('Ant. B. Mariæ Virg., p. <snr>'.bkref('BVMant').'</s>', 'Ant. of the Bl. Virgin Mary, p. <snr>'.bkref('BVMant').'</s>',1);
		vrS('Ord/divinum_auxilium_maneat_semper_nobiscum.php');
	} else {
		space();
		require('08_compline_BVMant.php');
	}

if($old==2) {
	
	space();
	hidden('',2);
	head('','Summary of Changes',2);
	space();

	rubp('','At Lauds, Psalms 62 and 66 were previously said together, as a single psalm. There is no <snr>Glória Patri</s> between the psalms.');
	psalm(66);
	space();

	rubp('','At Lauds, Psalms 148, 149 &amp; 150 were previously said together, as a single psalm. There is no <snr>Glória Patri</s> between the psalms.');
	psalm(149);
	psalm(150);
	space();

	rubp('','In all hours, the <snr>Ave María</s> was previously said at the beginning of the hour. (When Matins &amp; Lauds are said together, the <snr>Ave</s> is not said between the hours.)');
	space();

	rubp('','In all hours except Matins: Immediately before the collect, preceding the <snr>Dómine exáudi</s>, or <snr>Dóminus vobíscum</s>, the following was previously said:');
	reading('vr/kyrie.php');
	space();

	rubp('','At Lauds &amp; Vespers, the following commemoration was previously said, immediately following the collect:');
	bvm_head(13);
	ant('sancti_dei_omnes_intercedere.php');
	vrS('laetamini_in_domino_et_exultate_justi.php');
	vr('oremus.php');
	prayer('BVMp_c1.php');
	prayer('BVMp_c2.php',1);
	space();
	bvm_head(2);
	ant('ecce_dominus_veniet.php');
	vrS('ecce_apparebit_dominus.php');
	vr('oremus.php');
	prayer('BVMp_c1a.php',1);
	space();

}


?>
