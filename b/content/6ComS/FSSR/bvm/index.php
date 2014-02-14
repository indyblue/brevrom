<?php
	$_GET['prayer_ending'] = 1;
	$long = 1;
	$weekly = 0;
	$old = 0;

	bookmark('csBVMp');
	head('Officium parvum B. Mariæ Virginis',
		'Little Office of the Bl. Virgin Mary',1,
		'Little Office BVM',' ');

	space();
	img('FSSR/omps_003.png',90);
	space('RubricH');
	include('bvm01.php');
	include('bvm02.php');
	include('bvm03.php');
	include('bvm04.php');


// option:
//  0 - normal size, centered headings
//  1 - small size, left justified
function bvm_head($season=1, $option=0) {
	$fn = 'head';
	$size = -1;
	if($option==1) {
		$fn = 'rubp';
		$size = 1;
	}
	if($season==1) $fn('I. Extra Tempus Paschale.',
		'I. Outside of Paschaltide.',$size,$option);
	elseif($season==2) $fn('II. In Adventu.','II. In Advent.',$size,$option);
	elseif($season==3) $fn('III. Post Adventum.',
		'III. Christmastide.',$size,$option);
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
	$extra = 'prSanct/0815L.php';
	if($vespers) $extra = 'csBVML.php';
	bvm_head($option,1);
	ant($extra,$part);
	space('Line');
	bvm_head(2,1);
	ant('prSanct/0325L.php',$part,0,'','',1);
	if($option==1) {
		bvm_head(3,1);
		ant('prTemp/nativity/0101L.php',$part,0,'','',1);
	}
	space('Line');
}
?>
