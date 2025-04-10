<?php
	$long = $_GET['long'];
	global $kindle;
	$h = $kindle == 1 ? 2 : 1;

	space();
	hidden('Preparation for Mass',2);
	head('Præparatio ad Missam','Preparation for Mass',$h);
	ant('ne_reminiscaris.php','*',2);
	if($long==0) {
		psref(83,2);
		rubp('Et in fine cujuslibet psalmi dicitur <snr>Glória Patri</s>.', 'And in conclusion of each psalm is said <snr>Glória Patri</s>.');
		psref(84);
		psref(85);
		psref(115);
		psref(129);
	} else {
		psalm(83);
		reading('vr/gloria_patri-s.php',0);
		psalm(84);
		reading('vr/gloria_patri-s.php',0);
		psalm(85);
		reading('vr/gloria_patri-s.php',0);
		psalm(115);
		reading('vr/gloria_patri-s.php',0);
		psalm(129);
		reading('vr/gloria_patri-s.php',0);
	}
  bookmark('ne_reminiscaris2');
	ant('ne_reminiscaris.php','1',2);
	space();
	reading('vr/kyrie.php',0);
	vr('pater_silent_vr.php');
	vrS('preces/ego_dixi.php');
	vrS('preces/convertere2.php');
	vrS('preces/fiat_misericordia.php');
	vrS('preces/sacerdotes.php');
	vrS('Ord/ab_occultis_meis_munda_me_domine.php');
	vrS('domine_exaudi_orationem_meam.php');
	vr('oremus.php');
	prayer('App/mass_prep1.php');
	prayer('App/mass_prep2.php');
	prayer('App/mass_prep3.php');
	prayer('App/mass_prep4.php');
	prayer('App/mass_prep5.php');
	prayer('App/mass_prep6.php');
	prayer('App/mass_prep7.php',1);

	hidden('Preparation for Mass',2);

	space();
	head('Oratio sancti Thomæ Aquinatis','Prayer of Saint Thomas Aquinas',$kindle == 1 ? 2 : 4);
	prayer('App/mass_prep_thomas.php');

?>
