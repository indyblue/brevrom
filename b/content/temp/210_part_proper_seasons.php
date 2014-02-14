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
$dir = $_GET['root'] . '/3PropT';
// require $dir .'\01_advent.php';
require $dir .'\02_nativity.php';
require $dir .'\03_epiphany.php';
// require $dir .'\04_post_epiphany.php';
// require $dir .'\05_septuagesima.php';
// require $dir .'\06_lent.php';
// require $dir .'\07_passiontide.php';
// require $dir .'\08_easter.php';
// require $dir .'\09_ascension.php';
// require $dir .'\10_post_ascension.php';
// require $dir .'\200_proper_seasons.php';


?>
