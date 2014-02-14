   <p:P182/>
<?php img('CS/00_common_of_saints.tif',1354,528,100); ?>
	<p:Head1NI/>
	<p:Head0><?php 
echo ($_GET['L']==1?'Commune Sanctorum':'Common of Saints') 
?></p>
   <p:Spacer/>
<?php
require '6ComS/610_Apostles.php';
require '6ComS/612_ApostlesPT.php';
require '6ComS/620_Pope.php';
require '6ComS/630_Martyr.php';
require '6ComS/632_Martyrs.php';
//require '6ComS/634_MartyrsPT.php';
require '6ComS/640_ConfBishop.php';
require '6ComS/645_Confessor.php';
require '6ComS/650_Virgin.php';
require '6ComS/655_HolyWomen.php';
require '6ComS/660_DedicationChurch.php';
require '6ComS/670_BVM.php';
require '6ComS/675_BVMSat.php';
// require '6ComS/690_OfficeDead.php';
?>
