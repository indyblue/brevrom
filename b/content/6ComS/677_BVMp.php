<?php
	$long = $_GET['long'];

	space('Body');
	img('Saints/0908_nativity_of_bvm.tif',100);
	space('RubricH');
	bookmark('csBVMp');
	head('Officium parvum B. Mariæ Virginis',
		'Little Office of the Bl. Virgin Mary',1,
		'Little Office BVM');

	hidden('Matins',2);
	require '677_BVMp_matins.php';

/*

I: 
	ant('prSanct/0815L.php','xxxxx');
II:
	ant('prSanct/0325L.php','xxxxx');
	prayer('prSanct/0325.php');
III:
	ant('prTemp/0101L.php','xxxxx');
	prayer('prTemp/0101.php');
 */


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

	bvm_head(4);
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
	bvm_head(5);
	prayer('prSanct/0325.php');
	bvm_head(3);
	prayer('csBVMSat1.php');
	vr('dv_de_short.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');

/*
	ant('csBVML.php','20000',2);
	rubrics('ps/SuL1.php');
	ant('csBVML.php','02222',2);
	bookmark('csBVMLlc');
	lc('ecclus24_14.php');
	rubrics('head/HymnVerse.php');
	bookmark('o_gloriosa_virginum');
	hymn('o_gloriosa_virginum.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php',2);
	ant('beata_es_maria_quae_credidisti.php','B',2);
	rubrics('head/Prayer.php',1);
	prayer('csBVM1.php');
	space();

	bookmark('csBVMLH');
	rubrics('head/LittleHours.php');
	rubrics('cs/LittleHours.php');
	PrV('qui_natus_es_de_maria_virgine.php');
	space();

	hour('T');
	lc('ecclus24_14.php');
	rubrics('head/PTnot.php');
	brS('specie_tua_et_pulcritudine_tua.php');
	vrS('adjuvabit_eam_deus_vultu_suo.php');
	rubrics('head/PT.php');
	brS('specie_tua_et_pulcritudine_tua.php',1);
	vrS('adjuvabit_eam_deus_vultu_suo.php',0,1);
	space();

	bookmark('csBVMS');
	hour('S');
	lc('ecclus24_15.php');
	rubrics('head/PTnot.php');
	brS('adjuvabit_eam_deus_vultu_suo.php');
	vrS('elegit_eam_deus_et_praeelegit_eam.php');
	rubrics('head/PT.php');
	brS('adjuvabit_eam_deus_vultu_suo.php',1);
	vrS('elegit_eam_deus_et_praeelegit_eam.php',0,1);
	space();

	hour('N');
	lc('ecclus24_19.php');
	rubrics('head/PTnot.php');
	brS('elegit_eam_deus_et_praeelegit_eam.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	rubrics('head/PT.php');
	brS('elegit_eam_deus_et_praeelegit_eam.php',1);
	vrS('diffusa_est_gratia_in_labiis_tuis.php',0,1);
	space();

	hour('V');
	bookmark('PsComBVM');
	ant('csBVML.php','20000');
	psalm('109.php');
	space('Spacer');
	ant('csBVML.php','12000');
	psalm('112.php');
	space('Spacer');
	ant('csBVML.php','01200');
	psalm('121.php');
	space('Spacer');
	ant('csBVML.php','00120');
	psalm('126.php');
	space('Spacer');
	ant('csBVML.php','00012');
	psalm('147.php');
	space('Spacer');
	ant('csBVML.php','00002');
	bookmark('csBVMVlc');
	lc('ecclus24_14.php');
	rubrics('head/HymnVerse.php');
	hymn('ave_maris_stella.php',0);
	vrS('dignare_me_laudare_te_virgo_sacrata.php',2);
	ant('beatam_me_dicent_omnes_generationes.php','M',2);
	rubrics('cs/Compline.php');
*/

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
	elseif($season==4) $fn('I,III. Extra et Post Adventum.',
		'I,III. From Christmas until Advent.',$size,$option);
	elseif($season==5) $fn('I,II. Extra Adventum et In Adventu.',
		'I,II. From 3 Feb. until Christmas.',$size,$option);
}

// option: 
//  1 - three separate antiphons
//  4 - I,III combined, using (I) antiphons.
function bvm_multiant($part, $option=1, $vespers=0) {
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
