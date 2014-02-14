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


///////////////////////////////////////////////////////////
// Content goes here: /////////////////////////////////////
///////////////////////////////////////////////////////////

/*
$_GET['old'] = 1;
$_GET['long'] = 1;
$_GET['weekly'] = 0;
$_GET['matins'] = 1;

require '../6ComS/677_BVMp.php';
require '../6ComS/690_OfficeDead.php';
require '../7App/index.php';
// */

	feast_saint(716,0,'B. Mariæ Virg. de Monte Carmelo', 'Our Lady of Mount Carmel','B',0,
		"rubp('<snr>¶</s> Si commemoratio B. Mariæ Virg. de Monte Carmelo venerit in sabbato, fit quidem Officium de S. Maria in sabbato, sed antiphona ad Bened., et oratio ad omnes Horas dicuntur ut supra.','<snr>¶</s> If the commem. of our Lady of Mount Carmel comes on a Saturday, the Saturday Office of Holy Mary is said, but the antiphon at the Benedictus and the prayer at all Hours is said as above.');", array(0,1));

///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////


?>

