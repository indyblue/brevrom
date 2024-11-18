<?php
	head('Antiphonæ Finales B. Mariæ Virg.',
		'Final Antiphons of the Blessed Virgin Mary',$h1?1:2);
	
	global $kindle;
	if($kindle==1) 
		rubp(
		bkref('BVMant1', "I Alma Redemptoris") .', '
			. bkref('BVMant1n', "I - Nativ.") .', '
			. bkref('BVMant2', "II Ave Regina") .' '
			. bkref('BVMant3', "III Regina Caeli") .', '
			. bkref('BVMant4', "IV Salve Regina") 
			.'</s>', 
		bkref('BVMant1', "I Alma Redemptoris") .', '
			. bkref('BVMant1n', "I - Nativ.") .', '
			. bkref('BVMant2', "II Ave Regina") .' '
			. bkref('BVMant3', "III Regina Caeli") .', '
			. bkref('BVMant4', "IV Salve Regina") 
			.'</s>');


	space();
	bookmark('BVMant1');
	rubp('Usque ad diem 23 decembris:','Until 23 December, inclusive:',1);
	reading('bvm/almaredemptoris.php');
	vrS('Ord/angelus_domini_nuntiavit_mariae.php');
	vr('oremus.php');
	prayer('Ord/compline02.php',1);
	vrS('Ord/divinum_auxilium_maneat_semper_nobiscum.php');

	space();
	bookmark('BVMant1n');
	rubp('A die 24 decembris:','From 24 December:',1);
	reading('bvm/almaredemptoris.php');
	vrS('Ord/post_partum_virgo_inviolata_permansisti.php');
	vr('oremus.php');
	prayer('Ord/compline03.php',1);
	vrS('Ord/divinum_auxilium_maneat_semper_nobiscum.php');

	space();
	bookmark('BVMant2');
	reading('bvm/averegina.php');
	vrS('Ord/dignare_me_laudare_te_virgo_sacrata.php');
	vr('oremus.php');
	prayer('Ord/compline04.php',1);
	vrS('Ord/divinum_auxilium_maneat_semper_nobiscum.php');

	space();
	bookmark('BVMant3');
	reading('bvm/reginacaeli.php');
	vrS('Ord/gaude_et_laetare_virgo_maria.php',1);
	vr('oremus.php');
	prayer('Ord/compline05.php',1);
	vrS('Ord/divinum_auxilium_maneat_semper_nobiscum.php');

	space();
	bookmark('BVMant4');
	reading('bvm/salveregina.php');
	vrS('Ord/ora_pro_nobis_sancta_dei_genitrix.php');
	vr('oremus.php');
	prayer('Ord/compline06.php',1);
	vrS('Ord/divinum_auxilium_maneat_semper_nobiscum.php');

?>

