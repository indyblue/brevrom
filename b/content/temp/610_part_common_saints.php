   <p:P182/>
<?php img('CS/00_common_of_saints.tif',100); ?>
	<p:Head1NI/>
	<p:Head0><?php 
echo ($_GET['L']==1?'Commune Sanctorum':'Common of Saints') 
?></p>
   <p:Spacer/>
<?php
$dir = $_GET['root'] . '/6ComS';

require $dir .'/610_Apostles.php';
require $dir .'/612_ApostlesPT.php';
require $dir .'/620_Pope.php';
require $dir .'/630_Martyr.php';
require $dir .'/632_Martyrs.php';
//require $dir .'/634_MartyrsPT.php';
require $dir .'/640_ConfBishop.php';
require $dir .'/645_Confessor.php';
require $dir .'/650_Virgin.php';
require $dir .'/655_HolyWomen.php';
require $dir .'/660_DedicationChurch.php';
require $dir .'/670_BVM.php';
require $dir .'/675_BVMSat.php';
// require $dir .'/690_OfficeDead.php';
?>
