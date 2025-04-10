<?php
  $htm =  $_GET['htm'];
require_once 'bvm_fns.php';
$_GET['solo'] = 1;
$_GET['prayer_ending'] = 1;
$_GET['abbrev'] = 0;
$_GET['old'] = 0;
$old = $_GET['old'];
$abbrev = $_GET['abbrev'];
$solo = $_GET['solo'];

	space();
	hidden('Little Office BVM',1);
	bvm_head(1);
	rubp('Quod dicitur a Matutino diei 3 februarii usque ad Nonam Sabbati sancti inclusive, præterquam in festo Annuntiationis; et a Vesperis sabbati post octavam Pentecostes usque ad Nonam sabbati ante dominicam I Adventus inclusive.', 'Which is said from Matins of February 3 until None of Holy Saturday inclusive, except in the feast of the Annuntiation; and from Saturday Vespers after the octave of Pentecost until Saturday None before the first Sunday of Advent inclusive.');
	space();
	bookmark('BVMp1');

	hidden('Matins',2);
	hour('M');
	vrS('Ord/domine_labia_mea_aperies.php');
	vr('deus_in_adjutorium.php');
	space();
	ant('ave_maria.php','I');
	ant('ave_maria.php','R');
	psalm('094bi.php');
	space();
	rubrics('head/HymnVerse.php');
	hymn('quem_terra_pontus_sidera.php');
	space();

	rubp('Dominica, Feria II et V dicatur primus Nocturnus, De I Nocturno <snr>['.bkref('csBVMpMn1').']</s>; Feria III et VI secundus, <snr>['.bkref('csBVMpMn2').']</s>; Feria IV et Sabbato tertius <snr>['.bkref('csBVMpMn3').']</s>.', 
		'Sunday, Monday, and Thursday the first Nocturn is said <snr>['.bkref('csBVMpMn1').']</s>; Tuesday and Friday: from II Nocturn <snr>['.bkref('csBVMpMn2').']</s>; Wednesday and Saturday: from III Nocturn <snr>['.bkref('csBVMpMn3').']</s>.' ,1);

	if($htm) hidden('Matins 1st Nocturn',2);
	bookmark('csBVMpMn1');
	head('Dominica, Feria II et V:',
		'Sunday, Monday, and Thursday:',-4);
	ant('opBVMm.php','N00000000');
	psalm(8);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant('opBVMm.php','120000000');
	psalm(18);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant('opBVMm.php','012000000');
	psalm(23);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant('opBVMm.php','001000000');

rubp('Postea dicitur Versus <snr>Diffúsa est</s> et sequens, ut infra <snr>p. '.bkref('csBVMpML1').'</s>.', 
'After which is said the Verse <snr>Grace is poured</s> and following, as below on <snr>p. '.bkref('csBVMpML1').'</s>, when only one Nocturn is said.');

	space();
	if($htm) hidden('Matins 2nd Nocturn',2);
	bookmark('csBVMpMn2');
	head('Feria III et VI:',
		'Tuesday and Friday:',-4);
	ant('opBVMm.php','000N00000');
	psalm(44);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant('opBVMm.php','000120000');
	psalm(45);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant('opBVMm.php','000012000');
	psalm(86);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant('opBVMm.php','000001000');

rubp('Postea dicitur Versus <snr>Diffúsa est</s> et sequens, ut infra <snr>p. '.bkref('csBVMpML1').'</s>.', 
'After which is said the Verse <snr>Grace is poured</s> and following, as below on <snr>p. '.bkref('csBVMpML1').'</s>, when only one Nocturn is said.');

	space();
	if($htm) hidden('Matins 3rd Nocturn',2);
	bookmark('csBVMpMn3');
	head('Feria IV et Sabbato:',
		'Wednesday and Saturday:',-4);
	ant('opBVMm.php','000000N00');
	psalm(95);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant('opBVMm.php','000000120');
	psalm(96);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant('opBVMm.php','000000012');
	bvm_head(2,1);
	ant('opBVMm.php','00000000-2');
	psalm(97);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant('opBVMm.php','000000001');
	bvm_head(2,1);
	ant('opBVMm.php','0000000001');

	space();
	if($htm) hidden('Matins Lessons',2);
	bookmark('csBVMpML1');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	vr('pater_silent_vr.php');

	space();
	head('Absolutio.','The Absolution',-4);
	reading('bvm/precibus.php',0,10);
	vr('jube_domine.php');
	reading('bvm/nos_cum_prole.php',0,10);
	lc('ecclus24_11-13.php',0,'L1');
	rm('BVMp/mr1.php',0,1);
	space();

	vr('jube_domine.php');
	reading('bvm/ipsa_virgo.php',0,10);
	lc('ecclus24_15-16.php',0,'L2');
	rm('BVMp/mr2.php',0,3);
	space();

	vr('jube_domine.php');
	reading('bvm/per_virginem_matrem.php',0,10);
	lc('ecclus24_17-20.php',0,'L3');
	space();
	rubp('Sequens Responsorium omittitur quando dicitur <snr>Te Deum</s>.', 'When the <snr>Te Deum</s> is said, the following Responsory is omitted.',1);
	rm('BVMp/mr3.php',0,0);
	space();
	rubp('Sequens Hymnus <snr>Te Deum</s> dic. a Nativ. Domini usque ad Septuag., et a Dom. Resurrectionis usque ad Advent., et quando dicitur, omittitur III Responsorium, et in II Responsorio dicitur <snr>Glória Patri</s>, ut dictum est supra: in Adventu autem et a Septuag. usque ad Pascha non dic. nisi in Festis B. Mariæ.', 'The following Hymn, <snr>Te Deum</s>, is said from Christmas until Septuagesima, and from Easter Sunday until Advent. When it is said, the third Responsory is omitted, and the <snr>Glória Patri</s> is said in the second Responsory, as noted above. In Advent and from Septuagesima until Easter it is not said except on feasts of the Bl. Virgin Mary.',1);
	reading('tedeum.php');
	space();

	// ************************************************************
	hidden('<s:Visible>Lauds</s>',2);
	bookmark('csBVMpL');
	hour('L');
	vr('deus_in_adjutorium.php');
	space();

	$ant = 'prSanct/0815L.php';
	ant($ant,'20000');
	psalm(92);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'12000');
	psalm(99);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'01200');
	psalm(62);
	if($old==1) {
		rubp('Hic non dicitur <snr>Glória Patri</s>.','Here is not said the <snr>Glory be</s>.');
		psalm(66);
	}
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
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
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
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
	canticle('benedictus.php');
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space();
	ant('beata_dei_genitrix_maria_virgo_perpetua.php','1');
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
		prayer('BVMp_c2.php');
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
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(84);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(116);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
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
	rubrics('head/HymnVerse.php');
	hymn('memento_rerum_conditor.php');
	space();

	ant($ant,'0*000');
	psalm(119);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(120);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(121);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
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
	rubrics('head/HymnVerse.php');
	hymn('memento_rerum_conditor.php');
	space();

	ant($ant,'00*00');
	psalm(122);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(123);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(124);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
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
	rubrics('head/HymnVerse.php');
	hymn('memento_rerum_conditor.php');
	space();

	ant($ant,'0000*');
	psalm(125);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(126);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(127);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
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
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'12000');
	psalm(112);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'01200');
	psalm(121);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'00120');
	psalm(126);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'00012');
	psalm(147);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	ant($ant,'00001');
	space();	

	lc('ecclus24_14.php');

	rubrics('head/HymnVerse.php');
	hymn('ave_maris_stella.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	space();	

	ant('opBVMVm.php','M');
	canticle('magnificat.php');
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space();
	ant('opBVMVm.php','1');
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
		prayer('BVMp_c2.php');
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
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(129);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	psalm(130);
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space('Spacer');
	space();

	rubrics('head/HymnVerse.php');
	hymn('memento_rerum_conditor.php');
	space();

	lc('ecclus24_24.php');
	vrS('Ord/ora_pro_nobis_sancta_dei_genitrix.php');
	space();

	ant('sub_tuum_praesidium.php','*');
	canticle('simeon.php');
	if(!$abbrev) reading('vr/gloria_patri-a.php',0);
	space();
	ant('sub_tuum_praesidium.php','1');
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

	require('08_compline_BVMant.php');

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
