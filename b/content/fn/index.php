<?php 
require '/www/b/content/fn/0list.php';
$_GET['root'] = '/www/b/';

function temp($dir = "content/00/Psalm/") {
	$dir = $_GET['root'].$dir;
	echo $dir;
}

function bvm_head($season=1, $option=0) {
	$fn = 'head';
	$size = -4;
	if($option==1) {
		$fn = 'rubp';
		$size = 1;
	}
	if($season==1) $fn('I. Extra Adventum.',
		'I. From Candlemas (2 Feb) until Advent, excl.',$size,$option);
	elseif($season==2) $fn('II. In Adventu.','II. In Advent.',$size,$option);
	elseif($season==3) $fn('III. Post Adventum.',
		'III. From Christmas until Candlemas (2 Feb), incl.',$size,$option);
	elseif($season==4) $fn('I,III. Extra et Post Adventum.',
		'I,III. From Christmas until Advent.',$size,$option);
}

bvm_head(1,0);
bvm_head(4,1);

?>

