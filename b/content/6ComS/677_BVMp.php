<?php
	$long = $_GET['long'];

	space();
	img('Saints/0908_nativity_of_bvm.tif',100);
	space('RubricH');
	bookmark('csBVMp');
	head('Officium parvum B. Mariæ Virginis',
		'Little Office of the Bl. Virgin Mary',1,
		'Little Office BVM');

	hidden('Matins',2);
	require '677_BVMp_matins.php';

	// ************************************************************
	hidden('Lauds',2);
	hour('L');
	//vr('deus_in_adjutorium.php');
	vr('deus_in_adjutorium_short.php');
	space();

	bvm_multiant('20000');
	psalm(92);
	space('Spacer');
	bvm_multiant('12000');
	psalm(99);
	space('Spacer');
	bvm_multiant('01200');
	psalm(62);
	space('Spacer');
	bvm_multiant('00120');
	canticle('threechildren.php');
	space('Spacer');
	bvm_multiant('00012');
	psalm(148);
	space('Spacer');
	bvm_multiant('00001');
	space();	

	bvm_head(13);
	lc('cant6_8.php');
	bvm_head(2);
	lc('is11_1-2.php');
	space();	

	rubrics('head/HymnVerse.php');
	hymn('o_gloriosa_virginum.php');
	vrS('benedicta_tu_in_mulieribus.php');
	space();	

	bvm_head(1);
	ant('beata_dei_genitrix_maria_virgo_perpetua.php','B');
	rubrics('head/PT.php');
	ant('regina_caeli_laetare_alleluia.php','B',1,'','',1);
	bvm_head(2);
	ant('spiritus_sanctus_in_te_descendet.php','B',0,'','',1);
	bvm_head(3);
	ant('mirabile_mysterium_delcaratur_hodie.php','B',0,'','',1);
	if($long==0) {
		rubp('Canticum <snr>Benedíctus</s>, p. <snr>'.bkref('benedictus').'</s>', 'The Canticle <snr>Benedíctus</s>, p. <snr>'.bkref('benedictus').'</s>',1);
	} else {
		canticle('benedictus.php');
		reading('vr/gloria_patri-s.php',0);
		space();

		bvm_head(1);
		ant('beata_dei_genitrix_maria_virgo_perpetua.php','1');
		rubrics('head/PT.php');
		ant('regina_caeli_laetare_alleluia.php','1',1,'','',1);
		bvm_head(2);
		ant('spiritus_sanctus_in_te_descendet.php','1',0,'','',1);
		bvm_head(3);
		ant('mirabile_mysterium_delcaratur_hodie.php','1',0,'','',1);
	}
	space();	
	vr('dv_de.php');
	vr('oremus.php');
	bvm_head(12);
	prayer('prSanct/0325.php');
	bvm_head(3);
	prayer('csBVMSat1.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Prime',2);
	hour('P');
	vr('deus_in_adjutorium_short.php');
	space();
	rubrics('head/HymnVerse.php');
	hymn('memento_rerum_conditor.php',0);
	space();

	bvm_multiant('*0000');
	psalm(53);
	space('Spacer');
	psalm(84);
	space('Spacer');
	psalm(116);
	space('Spacer');
	bvm_multiant('10000');
	space();

	bvm_head(13);
	lc('cant6_9.php');
	bvm_head(2);
	lc('is7_14-15.php');
	space();	

	vrS('dignare_me_laudare_te_virgo_sacrata.php');
	space();	

	vr('dv_de.php');
	vr('oremus.php');
	bvm_head(1);
	prayer('BVMp_P.php');
	bvm_head(2);
	prayer('prSanct/0325.php');
	bvm_head(3);
	prayer('csBVMSat1.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Terce',2);
	hour('T');
	vr('deus_in_adjutorium_short.php');
	space();
	if($long==0) {
		hymn('memento_rerum_conditor.php',1);
	} else {
		rubrics('head/HymnVerse.php');
		hymn('memento_rerum_conditor.php');
	}
	space();

	bvm_multiant('0*000');
	psalm(119);
	space('Spacer');
	psalm(120);
	space('Spacer');
	psalm(121);
	space('Spacer');
	bvm_multiant('01000');
	space();

	bvm_head(13);
	lc('ecclus24_15.php');
	bvm_head(2);
	lc('is11_1-2.php');
	space();	

	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	space();	

	vr('dv_de.php');
	vr('oremus.php');
	bvm_head(13);
	prayer('csBVMSat1.php');
	bvm_head(2);
	prayer('prSanct/0325.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Sext',2);
	hour('S');
	vr('deus_in_adjutorium_short.php');
	space();
	if($long==0) {
		hymn('memento_rerum_conditor.php',1);
	} else {
		rubrics('head/HymnVerse.php');
		hymn('memento_rerum_conditor.php');
	}
	space();

	bvm_multiant('00*00');
	psalm(122);
	space('Spacer');
	psalm(123);
	space('Spacer');
	psalm(124);
	space('Spacer');
	bvm_multiant('00100');
	space();

	bvm_head(13);
	lc('ecclus24_16.php');
	bvm_head(2);
	lc('luke1_32-33.php');
	space();	

	vrS('benedicta_tu_in_mulieribus.php');
	space();	

	vr('dv_de.php');
	vr('oremus.php');
	bvm_head(1);
	prayer('BVMp_S.php');
	bvm_head(2);
	prayer('prSanct/0325.php');
	bvm_head(3);
	prayer('csBVMSat1.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('None',2);
	hour('N');
	vr('deus_in_adjutorium_short.php');
	space();
	if($long==0) {
		hymn('memento_rerum_conditor.php',1);
	} else {
		rubrics('head/HymnVerse.php');
		hymn('memento_rerum_conditor.php');
	}
	space();

	bvm_multiant('0000*');
	psalm(125);
	space('Spacer');
	psalm(126);
	space('Spacer');
	psalm(127);
	space('Spacer');
	bvm_multiant('00001');
	space();

	bvm_head(13);
	lc('ecclus24_19.php');
	vrS('prSanct/post_partum_virgo_inviolata_permansisti.php');
	space();
	bvm_head(2);
	lc('is7_14-15.php');
	vrS('Ord/angelus_domini_nuntiavit_mariae.php');
	space();

	vr('dv_de.php');
	vr('oremus.php');
	bvm_head(1);
	prayer('BVMp_N.php');
	bvm_head(2);
	prayer('prSanct/0325.php');
	bvm_head(3);
	prayer('csBVMSat1.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Vespers',2);
	hour('V');
	//vr('deus_in_adjutorium.php');
	vr('deus_in_adjutorium_short.php');
	space();

	bvm_multiant('20000',1);
	psalm(109);
	space('Spacer');
	bvm_multiant('12000',1);
	psalm(112);
	space('Spacer');
	bvm_multiant('01200',1);
	psalm(121);
	space('Spacer');
	bvm_multiant('00120',1);
	psalm(126);
	space('Spacer');
	bvm_multiant('00012',1);
	psalm(147);
	space('Spacer');
	bvm_multiant('00001');
	space();	

	bvm_head(13);
	lc('ecclus24_14.php');
	bvm_head(2);
	lc('is11_1-2.php');
	space();	

	rubrics('head/HymnVerse.php');
	hymn('ave_maris_stella.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	space();	

	bvm_head(1);
	ant('opBVMVm.php','M');
	rubrics('head/PT.php');
	ant('regina_caeli_laetare_alleluia.php','M',1,'','',1);
	bvm_head(2);
	ant('spiritus_sanctus_in_te_descendet.php','M',0,'','',1);
	bvm_head(3);
	ant('prTemp/0101m2.php','M',0,'','',1);
	if($long==0) {
		rubp('Canticum <snr>Magníficat</s>, p. <snr>'.bkref('magnificat').'</s>', 'The Canticle <snr>Magníficat</s>, p. <snr>'.bkref('magnificat').'</s>',1);
	} else {
		canticle('magnificat.php');
		reading('vr/gloria_patri-s.php',0);
		space();

		bvm_head(1);
		ant('opBVMVm.php','1');
		rubrics('head/PT.php');
		ant('regina_caeli_laetare_alleluia.php','1',1,'','',1);
		bvm_head(2);
		ant('spiritus_sanctus_in_te_descendet.php','1',0,'','',1);
		bvm_head(3);
		ant('prTemp/0101m2.php','1',0,'','',1);
	}
	space();	
	vr('dv_de.php');
	vr('oremus.php');
	bvm_head(1);
	prayer('csBVM1.php');
	bvm_head(2);
	prayer('prSanct/0325.php');
	bvm_head(3);
	prayer('csBVMSat1.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Compline',2);
	hour('C');
	vrS('Ord/converte_nos_deus_salutaris_noster.php');
	vr('deus_in_adjutorium_short.php');
	space();

	psalm(128);
	space('Spacer');
	psalm(129);
	space('Spacer');
	psalm(130);
	space('Spacer');
	space();

	if($long==0) {
		hymn('memento_rerum_conditor.php',1);
	} else {
		rubrics('head/HymnVerse.php');
		hymn('memento_rerum_conditor.php');
	}
	space();

	bvm_head(13);
	lc('ecclus24_24.php');
	vrS('Ord/ora_pro_nobis_sancta_dei_genitrix.php');
	space();
	bvm_head(2);
	lc('is7_14-15.php');
	vrS('Ord/angelus_domini_nuntiavit_mariae.php');
	space();

	bvm_head(1);
	ant('sub_tuum_praesidium.php','*');
	rubrics('head/PT.php');
	ant('regina_caeli_laetare_alleluia.php','*',1,'','',1);
	bvm_head(2);
	ant('spiritus_sanctus_in_te_descendet.php','*',0,'','',1);
	bvm_head(3);
	ant('prTemp/0101m2.php','*',0,'','',1);
	if($long==0) {
		rubp('Canticum <snr>Nunc dimíttis</s>, p. <snr>'.bkref('simeon').'</s>', 'The Canticle <snr>Nunc dimíttis</s>, p. <snr>'.bkref('simeon').'</s>',1);
	} else {
		canticle('simeon.php');
		reading('vr/gloria_patri-s.php',0);
		space();

		bvm_head(1);
		ant('sub_tuum_praesidium.php','1');
		rubrics('head/PT.php');
		ant('regina_caeli_laetare_alleluia.php','1',1,'','',1);
		bvm_head(2);
		ant('spiritus_sanctus_in_te_descendet.php','1',0,'','',1);
		bvm_head(3);
		ant('prTemp/0101m2.php','1',0,'','',1);
	}
	space();	

	vr('dv_de.php');
	vr('oremus.php');
	bvm_head(1);
	prayer('BVMp_C.php');
	bvm_head(2);
	prayer('prSanct/0325.php');
	bvm_head(3);
	prayer('csBVMSat1.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vr('compline_bened.php');

	if($long==0) {
		rubp('Ant. B. Mariæ Virg., p. <snr>'.bkref('BVMant').'</s>', 'Ant. of the Bl. Virgin Mary, p. <snr>'.bkref('BVMant').'</s>',1);
		vrS('Ord/divinum_auxilium_maneat_semper_nobiscum.php');
	} else {
		require $_GET['root'] . '/1Ordinary/08_compline_BVMant.php';
	}





// option:
//  0 - normal size, centered headings
//  1 - small size, left justified
function bvm_head($season=1, $option=0) {
	$fn = 'head';
	$size = -4;
	if($option==1) {
		$fn = 'rubp';
		$size = 1;
	}
	if($season==1) $fn('I. Extra Adventum.',
		'I. From 3 Feb. until Advent.',$size,$option);
	elseif($season==2) $fn('II. In Adventu.','II. In Advent.',$size,$option);
	elseif($season==3) $fn('III. Post Adventum.',
		'III. From Christmas to 2 Feb.',$size,$option);
	elseif($season==12) $fn('I,II. Extra Adventum et In Adventu.',
		'I,II. From 3 Feb. until Christmas.',$size,$option);
	elseif($season==13) $fn('I,III. Extra et Post Adventum.',
		'I,III. From Christmas until Advent.',$size,$option);
}

// option: 
//  1 - three separate antiphons
//  4 - I,III combined, using (I) antiphons.
function bvm_multiant($part, $vespers=0, $option=1) {
	$extra = 'prSanct/0815L.php';
	if($vespers) $extra = 'csBVML.php';
	bvm_head($option,1);
	ant($extra,$part);
	space('Line');
	bvm_head(2,1);
	ant('prSanct/0325L.php',$part,0,'','',1);
	if($option==1) {
		bvm_head(3,1);
		ant('prTemp/0101L.php',$part,0,'','',1);
	}
	space('Line');
}
?>
