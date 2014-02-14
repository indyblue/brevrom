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

feast_saint(414,3,'Sancti Justini','Saint Justin','M',0,
	'feast_saint(414,-1,"Ss. Tiburtii, Valeriani et Maximi","Ss. Tiburtius, Valerian and Maximius","M+",0,0,
	array(0,0,0,0,"lux_perpetua_lucebit_sanctis_tuis_domine.php",
		"sancti_et_justi_in_domino_gaudete.php"));');

// require $root. '/5PropS/0202-2_purification_bvm.php';

// var_dump($test);

//require 'test.php';

//psalm(1);
//canticle('benedictus.php');
//reading('bvm/salveregina.php');

echo '</pre>';
?>

