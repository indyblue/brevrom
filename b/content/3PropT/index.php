   <p:P182/>
<?php img('Tempore/t00_proprium_tempore.tif',100); ?>
   <p:Head1NI/>
	<p:Head0><?php 
echo ($_GET['L']==1?'Proprium de Tempore':'Proper of Seasons')
?></p>
   <p:Spacer/>
   <p:P181/>
   <p:Body/>
<?php 
require '01_advent.php';
require '02_nativity.php';
require '03_epiphany.php';
require '04_post_epiphany.php';
require '05_septuagesima.php';
require '06_lent.php';
require '07_passiontide.php';
require '08_easter.php';
require '09_ascension.php';
require '10_post_ascension.php';


?>