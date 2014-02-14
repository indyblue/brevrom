<?php 
$_GET['L'] = 0;
$_GET['par'] = 1;
$_GET['long'] = 1;
$_GET['root'] = dirname(__FILE__);
$pos = strpos($_GET['root'],'\\content');
if($pos>0)
	$_GET['root'] = substr($_GET['root'],0,$pos+8);
require $_GET['root'] . '/fn/0list.php';

///////////////////////////////////////////////////////////
// Everything above is needed; don't delete! //////////////
///////////////////////////////////////////////////////////

rubp('abc'.
	'def', //rubp
	'ghi'. //rubp
	'klm');

//psalm(1);
//canticle('benedictus.php');
//reading('bvm/salveregina.php');


?>

