<?php
	$_GET['season'] = 0;
	$season = $_GET['season'];
	$long = $_GET['long'];
	$weekly = $_GET['weekly'];
	$old = $_GET['old'];

	space();
	hidden('Aperi',2);
	require 'content/0Intro/101_aperi.php'; 

	space();
	img('Saints/0908_nativity_of_bvm.png',100);
	space('RubricH');
	bookmark('csBVMp');
	head('Officium parvum B. Mariæ Virginis',
		'Little Office of the Bl. Virgin Mary',1,
		'Little Office BVM');

	space();
	bvm_head(2);
	rubp('Quod dicitur a I Vesperis dominicæ I Adventus usque ad Nonam vigiliæ Nativitatis Domini inclusive, et in festo Annuntiationis.', 'Which is said from I Vespers of the first Sunday of Advent until None of the vigil of the Nativity of the Lord inclusive, and on the feast of the Annuntiation.');
	space();

	hidden('Matins',2);
	if($_GET['matins']) require '677_BVMp2_matins.php';

	// ************************************************************
	hidden('Lauds',2);
	bookmark('csBVMpL');
	hour('L');
	//vr('deus_in_adjutorium.php');
	vr('deus_in_adjutorium.php');
	space();

	bvm_multiant('20000');
	psalm(92);
	space('Spacer');
	bvm_multiant('12000');
	psalm(99);
	space('Spacer');
	bvm_multiant('01200');
	psalm(62);
	if($old==1) {
		rubp('Hic non dicitur <snr>Glória Patri</s>.','Here is not said the <snr>Glory be</s>.');
		psalm(66);
	}
	space('Spacer');
	bvm_multiant('00120');
	canticle('threechildren.php');
	space('Spacer');
	bvm_multiant('00012');
	psalm(148);
	if($old==1) {
		rubp('Hic non dicitur <snr>Glória Patri</s>.','Here is not said the <snr>Glory be</s>.');
		psalm(149);
		rubp('Hic non dicitur <snr>Glória Patri</s>.','Here is not said the <snr>Glory be</s>.');
		psalm(150);
	}
	space('Spacer');
	bvm_multiant('00001');
	space();	

	lc('is11_1-2.php');
	space();	

	rubrics('head/HymnVerse.php');
	hymn('o_gloriosa_virginum.php');
	vrS('benedicta_tu_in_mulieribus.php');
	space();	

	ant('spiritus_sanctus_in_te_descendet.php','*');
	if($long==0) {
		rubp('Canticum <snr>Benedíctus</s>, p. <snr>'.bkref('benedictus').'</s>', 'The Canticle <snr>Benedíctus</s>, p. <snr>'.bkref('benedictus').'</s>',1);
	} else {
		canticle('benedictus.php');
		reading('vr/gloria_patri-s.php',0);
		space();
		ant('spiritus_sanctus_in_te_descendet.php','1');
	}
	space();	
	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vrS('domine_exaudi_orationem_meam.php');
	vr('oremus.php');
	prayer('prSanct/0325.php');

	if($old==1) {
		space();	
		ant('ecce_dominus_veniet.php');
		vrS('ecce_apparebit_dominus.php');
		vr('oremus.php');
		prayer('BVMp_c1a.php',1);
		space();
	}

	vrS('domine_exaudi_orationem_meam.php');
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

if($weekly) rubp('','Full Psalter: 
		Sunday (<snr>p. '. bkref('psDP') .'</s>) 
		Monday (<snr>'. bkref('ps2P') .'</s>) 
		Tuesday (<snr>'. bkref('ps3P') .'</s>) 
		Wednesday (<snr>'. bkref('ps4P') .'</s>) 
		Thursday (<snr>'. bkref('ps5P') .'</s>) 
		Friday (<snr>'. bkref('ps6P') .'</s>) 
		Saturday (<snr>'. bkref('psSP') .'</s>).');

	bvm_multiant('*0000');
	psalm(53);
	space('Spacer');
	psalm(84);
	space('Spacer');
	psalm(116);
	space('Spacer');
	bvm_multiant('10000');
	space();

	lc('is7_14-15.php');
	space();	

	vrS('dignare_me_laudare_te_virgo_sacrata.php');
	space();	

	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vrS('domine_exaudi_orationem_meam.php');
	vr('oremus.php');
	prayer('prSanct/0325.php');
	vrS('domine_exaudi_orationem_meam.php');
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

if($weekly) rubp('','Full Psalter: 
		Sunday (<snr>p. '. bkref('psDT') .'</s>) 
		Monday (<snr>'. bkref('ps2T') .'</s>) 
		Tuesday (<snr>'. bkref('ps3T') .'</s>) 
		Wednesday (<snr>'. bkref('ps4T') .'</s>) 
		Thursday (<snr>'. bkref('ps5T') .'</s>) 
		Friday (<snr>'. bkref('ps6T') .'</s>) 
		Saturday (<snr>'. bkref('psST') .'</s>).');

	bvm_multiant('0*000');
	psalm(119);
	space('Spacer');
	psalm(120);
	space('Spacer');
	psalm(121);
	space('Spacer');
	bvm_multiant('01000');
	space();

	lc('is11_1-2.php');
	space();	

	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	space();	

	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vrS('domine_exaudi_orationem_meam.php');
	vr('oremus.php');
	prayer('prSanct/0325.php');
	vrS('domine_exaudi_orationem_meam.php');
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

if($weekly) rubp('','Full Psalter: 
		Sunday (<snr>p. '. bkref('psDS') .'</s>) 
		Monday (<snr>'. bkref('ps2S') .'</s>) 
		Tuesday (<snr>'. bkref('ps3S') .'</s>) 
		Wednesday (<snr>'. bkref('ps4S') .'</s>) 
		Thursday (<snr>'. bkref('ps5S') .'</s>) 
		Friday (<snr>'. bkref('ps6S') .'</s>) 
		Saturday (<snr>'. bkref('psSS') .'</s>).');

	bvm_multiant('00*00');
	psalm(122);
	space('Spacer');
	psalm(123);
	space('Spacer');
	psalm(124);
	space('Spacer');
	bvm_multiant('00100');
	space();

	lc('luke1_32-33.php');
	space();	

	vrS('benedicta_tu_in_mulieribus.php');
	space();	

	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vrS('domine_exaudi_orationem_meam.php');
	vr('oremus.php');
	prayer('prSanct/0325.php');
	vrS('domine_exaudi_orationem_meam.php');
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

if($weekly) rubp('','Full Psalter: 
		Sunday (<snr>p. '. bkref('psDN') .'</s>) 
		Monday (<snr>'. bkref('ps2N') .'</s>) 
		Tuesday (<snr>'. bkref('ps3N') .'</s>) 
		Wednesday (<snr>'. bkref('ps4N') .'</s>) 
		Thursday (<snr>'. bkref('ps5N') .'</s>) 
		Friday (<snr>'. bkref('ps6N') .'</s>) 
		Saturday (<snr>'. bkref('psSN') .'</s>).');

	bvm_multiant('0000*');
	psalm(125);
	space('Spacer');
	psalm(126);
	space('Spacer');
	psalm(127);
	space('Spacer');
	bvm_multiant('00001');
	space();

	lc('is7_14-15.php');
	vrS('Ord/angelus_domini_nuntiavit_mariae.php');
	space();

	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vrS('domine_exaudi_orationem_meam.php');
	vr('oremus.php');
	prayer('prSanct/0325.php');
	vrS('domine_exaudi_orationem_meam.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Vespers',2);
	hour('V');
	//vr('deus_in_adjutorium.php');
	vr('deus_in_adjutorium_short.php');
	space();

if($weekly) rubp('','Full Psalter: 
		Sunday (<snr>p. '. bkref('psDV') .'</s>) 
		Monday (<snr>'. bkref('ps2V') .'</s>) 
		Tuesday (<snr>'. bkref('ps3V') .'</s>) 
		Wednesday (<snr>'. bkref('ps4V') .'</s>) 
		Thursday (<snr>'. bkref('ps5V') .'</s>) 
		Friday (<snr>'. bkref('ps6V') .'</s>) 
		Saturday (<snr>'. bkref('psSV') .'</s>).');

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
	bvm_multiant('00001',1);
	space();	

	lc('is11_1-2.php');
	space();	

	rubrics('head/HymnVerse.php');
	hymn('ave_maris_stella.php');
	vrS('diffusa_est_gratia_in_labiis_tuis.php');
	space();	

	ant('spiritus_sanctus_in_te_descendet.php');
	if($long==0) {
		rubp('Canticum <snr>Magníficat</s>, p. <snr>'.bkref('magnificat').'</s>', 'The Canticle <snr>Magníficat</s>, p. <snr>'.bkref('magnificat').'</s>',1);
	} else {
		canticle('magnificat.php');
		reading('vr/gloria_patri-s.php',0);
		space();

		ant('spiritus_sanctus_in_te_descendet.php');
	}
	space();	
	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vrS('domine_exaudi_orationem_meam.php');
	vr('oremus.php');
	prayer('prSanct/0325.php');

	if($old==1) {
		space();	
		ant('ecce_dominus_veniet.php');
		vrS('ecce_apparebit_dominus.php');
		vr('oremus.php');
		prayer('BVMp_c1a.php',1);
		space();
	}

	vrS('domine_exaudi_orationem_meam.php');
	vrS('benedicamus_domino.php');
	vrS('fidelium_animae.php');
	space();


	// ************************************************************
	hidden('Compline',2);
	hour('C');
	vrS('Ord/converte_nos_deus_salutaris_noster.php');
	vr('deus_in_adjutorium_short.php');
	space();

if($weekly) rubp('','Full Psalter: 
		Sunday (<snr>p. '. bkref('psDC') .'</s>) 
		Monday (<snr>'. bkref('ps2C') .'</s>) 
		Tuesday (<snr>'. bkref('ps3C') .'</s>) 
		Wednesday (<snr>'. bkref('ps4C') .'</s>) 
		Thursday (<snr>'. bkref('ps5C') .'</s>) 
		Friday (<snr>'. bkref('ps6C') .'</s>) 
		Saturday (<snr>'. bkref('psSC') .'</s>).');

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

	lc('is7_14-15.php');
	vrS('Ord/angelus_domini_nuntiavit_mariae.php');
	space();

	ant('spiritus_sanctus_in_te_descendet.php');
	if($long==0) {
		rubp('Canticum <snr>Nunc dimíttis</s>, p. <snr>'.bkref('simeon').'</s>', 'The Canticle <snr>Nunc dimíttis</s>, p. <snr>'.bkref('simeon').'</s>',1);
	} else {
		canticle('simeon.php');
		reading('vr/gloria_patri-s.php',0);
		space();

		ant('spiritus_sanctus_in_te_descendet.php','1');
	}
	space();	

	if($old==1) {
		reading('vr/kyrie.php');
		space();
	}
	vrS('domine_exaudi_orationem_meam.php');
	vr('oremus.php');
	prayer('prSanct/0325.php');
	vrS('domine_exaudi_orationem_meam.php');
	vrS('benedicamus_domino.php');
	vr('compline_bened.php');

	if($long==0) {
		rubp('Ant. B. Mariæ Virg., p. <snr>'.bkref('BVMant').'</s>', 'Ant. of the Bl. Virgin Mary, p. <snr>'.bkref('BVMant').'</s>',1);
		vrS('Ord/divinum_auxilium_maneat_semper_nobiscum.php');
	} else {
		space();
		require '08_compline_BVMant.php';
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

space();
hidden('Sacrosanctæ',2);
require 'content/0Intro/105_sacrosancte.php'; 


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
	elseif($season==4) $fn('IV. Tempore Paschali.',
		'IV. Easter Season.',$size,$option);

	elseif($season==12) $fn('I,II. Extra Adventum et In Adventu.',
		'I,II. From 3 Feb. until Christmas.',$size,$option);
	elseif($season==13) $fn('I,III. Extra et Post Adventum.',
		'I,III. From Christmas until Advent.',$size,$option);
}

// option: 
//  1 - three separate antiphons
//  4 - I,III combined, using (I) antiphons.
function bvm_multiant($part, $vespers=0, $option=1) {
	$season = $_GET['season'];

	ant('prSanct/0325L.php',$part);
}
?>
