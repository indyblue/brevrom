<?php

	hidden('Thanksgiving after Mass',2);
	head('Gratiarum actio post Missam','Act of Thanksgiving after Mass',1);

	ant('trium_puerorum_cantemus.php','*',2);
	canticle('threechildren.php');
	psalm(150);
	reading('vr/gloria_patri-s.php',0);
	ant('trium_puerorum_cantemus.php','1',2);
	space();

	reading('vr/kyrie.php',0);
	rubrics('ord/pater_silent_vr.php');
	vrS('confiteantur_tibi_domine.php');
	vrS('exultabunt_sancti_in_gloria.php');
	vrS('non_nobis_domine.php');
	vrS('domine_exaudi_orationem_meam.php');
	vr('oremus.php');
	prayer('App/mass_thanks1.php');
	prayer('App/mass_thanks2.php');
	prayer('App/mass_thanks3.php',1);

?>

