<?php
/*
	<p:P182/>
<?php img('Saints/00_proper_of_saints.png',100); ?>
   <p:Head1NI/>
	<p:Head0><?php 
echo ($_GET['L']==1?'Proprium Sanctorum':'Proper of Saints')
?></p>
   <p:Spacer/>
   <p:P181/>
   <p:Body/>
 */
space('PgH');
img('Saints/00_proper_of_saints.png',100);
head('Proprium Sanctorum','Proper of Saints',0,2);
space('PgB');
echo '<!--sec 2col -->';


require '11b_November.php';
require '12_December.php';
require '01_January.php';
require '02_February.php';
require '03_March.php';
require '04_April.php';
require '05_May.php';
require '06_June.php';
require '07_July.php';
require '08_August.php';
require '09_September.php';
require '10_October.php';
require '11_November.php';
echo '<!--sec 2col end -->';

?>
