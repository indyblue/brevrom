   <text:p text:style-name="P182"/>
<?php img('CS/00_common_of_saints.tif',1354,528,100); ?>
	<text:p text:style-name="Head1NI"/>
	<text:p text:style-name="Head0"><?php 
echo ($_GET['L']==1?'Commune Sanctorum':'Common of Saints') 
?></text:p>
   <text:p text:style-name="Spacer"/>
<?php
include '610_Apostles.php';
include '612_ApostlesPT.php';
include '620_Pope.php';
include '630_Martyr.php';
include '632_Martyrs.php';
include '634_MartyrsPT.php';
include '640_ConfBishop.php';
include '645_Confessor.php';
include '650_Virgin.php';
include '655_HolyWomen.php';
include '660_DedicationChurch.php';
include '670_BVM.php';
include '675_BVMSat.php';
include '690_OfficeDead.php';
?>
