   <text:p text:style-name="P182"/>
<?php img('CS/00_common_of_saints.tif',1354,528,100); ?>
	<text:p text:style-name="Head1NI"/>
	<text:p text:style-name="Head0"><?php 
echo ($_GET['L']==1?'Commune Sanctorum':'Common of Saints') 
?></text:p>
   <text:p text:style-name="Spacer"/>
<?php
require '610_Apostles.php';
require '612_ApostlesPT.php';
require '620_Pope.php';
require '630_Martyr.php';
require '632_Martyrs.php';
//require '634_MartyrsPT.php';
require '640_ConfBishop.php';
require '645_Confessor.php';
require '650_Virgin.php';
require '655_HolyWomen.php';
require '660_DedicationChurch.php';
require '670_BVM.php';
require '675_BVMSat.php';
require '690_OfficeDead.php';
?>
