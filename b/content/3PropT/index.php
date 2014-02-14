   <p:P182/>
<?php img('Tempore/t00_proprium_tempore.png',100); ?>
   <p:Head1NI/>
	<p:Head0><?php 
echo ($_GET['L']==1?'Proprium de Tempore':'Proper of Seasons')
?></p>
   <p:Spacer/>
   <p:P181/>
   <p:Body/>
<?php 
require '01_advent/index.php';
require '02_nativity/index.php';
require '03_epiphany/index.php';
require '04_post_epiphany/index.php';
require '05_septuagesima/index.php';
require '06_lent/index.php';
require '07_passiontide/index.php';
require '08_easter/index.php';
require '09_ascension/index.php';
require '10_pentecost.php';
require '11_post_pentecost/index.php';


?>
