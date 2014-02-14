<?php 
$_GET['L'] = 0;
$_GET['par'] = 1;
$_GET['long'] = 1;
$_GET['root'] = dirname(__FILE__);
$pos = strpos($_GET['root'],'\\content');
if($pos>0)
	$_GET['root'] = substr($_GET['root'],0,$pos+8);
require $_GET['root'] . '/fn/0list.php';
$root = $_GET['root'];

echo '<pre>';
///////////////////////////////////////////////////////////
// Everything above is needed; don't delete! //////////////
///////////////////////////////////////////////////////////

	feast_saint(224,2,'Sancti Matthiæ','Saint Matthias','A');

// require $root. '/5PropS/0202-2_purification_bvm.php';

// var_dump($test);

//require 'test.php';

//psalm(1);
//canticle('benedictus.php');
//reading('bvm/salveregina.php');

echo '</pre>';
?>

