<?php
require_once 'bvm_fns.php';
$_GET['abbrev'] = 1;

	$abbrev = $_GET['abbrev'];
	if(!$abbrev) 
		$_GET['prayer_ending'] = 1;
	$long = 1;
	$weekly = 0;
	$old = $_GET['old'];
	$htm = $_GET['htm'];

	if($htm) {
		hidden('Aperi',2);
		require 'content/0Intro/101_aperi.php'; 
	}
	else 
		bookmark('csBVMp');
	head('Officium parvum B. Mariæ Virginis',
		'Little Office of the Bl. Virgin Mary',1,
		'Little Office BVM',' ');

	space();
	if($htm) 
		img('Saints/0908_nativity_of_bvm.png',100);
	else
		img('FSSR/omps_003.png',90);
	space('RubricH');
	include('bvm01.php');
	include('bvm02.php');
	include('bvm03.php');
	include('bvm04.php');

	if($htm) {
		hidden('Sacrosanctae',2);
		require 'content/0Intro/105_sacrosancte.php'; 
	}


?>
