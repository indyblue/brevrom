   <p:P182/>
<?php img('Saints/00_proper_of_saints.tif',1371,622,100); ?>
   <p:Head1NI/>
	<p:Head0><?php 
echo ($_GET['L']==1?'Proprium Sanctorum':'Proper of Saints')
?></p>
   <p:Spacer/>
   <p:P181/>
   <p:Body/>
<?php 
require '00_11_November.php';
require '00_12_December.php';
require '01_January.php';
require '02_February.php';

require '07_July.php';

require '08_August.php';
require '09_September.php';
require '10_October.php';
require '11_November.php';

?>
