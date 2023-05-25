<?php
	global $kindle;
	$h = $kindle == 1 ? 2 : 1;

	space();
	hidden('Come Holy Spirit',2);
	head('Veni Sancte Spiritus','Come Holy Spirit',$h);
	prayer('App/veni_sancte.php');
	space();
	vrS('app/emitte_spiritum_tuum_et_creabuntur.php');
	vr('oremus.php');
	prayer('App/veni_sancte2.php');

?>
