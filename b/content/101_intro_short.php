<?php 
space('PgI');
$h1=1;
require '0Intro/101_aperi.php'; 
space();

require '0Intro/105_sacrosancte.php';
require '0Intro/106_o_clementissime.php';
$h1=0;

space();

require '6ComS/BVMp/08_compline_BVMant.php';

space();
  head('De Profundis', 'De Profundis', 1);
	psalm(129);
	reading('vr/requiem_aeternam.php',0);
	space('Spacer');
	vrS('a_porta_inferi.php');
	vrS('requiescant_in_pace.php');
	vrS('domine_exaudi_orationem_meam.php'); 
	vr('oremus.php'); 
		prayer('offDef/brethren2.php',0);
		prayer('offDef/offDef.php');


?>

