<?php
	rubrics('head/HymnVerse.php');
	hymn('te_lucis_ante_terminum.php',0);

	lc('jer14_9.php');
	rubrics('head/PTnot.php');
	brS('Ord/in_manus_tuas_domine_commendo_spiritum_meum.php');
	vrS('Ord/custodi_nos_domine_ut_pupillam_oculi.php');
	rubp('Tempore Passionis omittitur <snr>Glória Patri</s>.','In Passiontide omit the <snr>Glória Patri</s>.');
	rubrics('head/PT.php');
	brS('Ord/in_manus_tuas_domine_commendo_spiritum_meum.php',1);
	vrS('Ord/custodi_nos_domine_ut_pupillam_oculi.php',1);

	space();
	ant('salva_nos.php','*',2);
	canticle('simeon.php');
	ant('salva_nos.php','1',2);

	space();
	vr('dv_de_short2.php');
	vr('oremus.php');
	prayer('Ord/compline01.php',1);
	vr('dv_de_short2.php');
	vrS('benedicamus_domino.php');
	vr('compline_bened.php');

	global $kindle;
	if($kindle==1) 
		rubp('Antiphona B. Mariæ Virg. <snr>'
			. bkref('BVMant1', "I Alma Redemptoris") .', '
			. bkref('BVMant2', "II Ave Regina") .' '
			. bkref('BVMant3', "III Regina Caeli") .', '
			. bkref('BVMant4', "IV Salve Regina") 
			.'</s>', 
		'Antiphon of the Bl. Virgin Mary, <snr>p. '
			. bkref('BVMant1', "I Alma Redemptoris") .', '
			. bkref('BVMant2', "II Ave Regina") .' '
			. bkref('BVMant3', "III Regina Caeli") .', '
			. bkref('BVMant4', "IV Salve Regina") 
			.'</s>');
	else
		rubp('Antiphona B. Mariæ Virg. <snr>p. '. bkref('BVMant') .'</s>', 'Antiphon of the Bl. Virgin Mary, <snr>p. '. bkref('BVMant') .'</s>');
	vrS('Ord/divinum_auxilium_maneat_semper_nobiscum.php');

?>

