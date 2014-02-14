   <p:P182/>
<?php img('Saints/00_proper_of_saints.tif',100); ?>
   <p:Head1NI/>
	<p:Head0><?php 
echo ($_GET['L']==1?'Proprium Sanctorum':'Proper of Saints')
?></p>
   <p:P181/>
<?php 
$dir = $_GET['root'] . '/5PropS';

// require $dir .'/00_11_November.php';
// require $dir .'/00_12_December.php';
// require $dir .'/01_January.php';
require $dir .'/02_February.php';
// 
// require $dir .'/07_July.php';
// 
// require $dir .'/08_August.php';
// require $dir .'/09_September.php';
// require $dir .'/10_October.php';
// require $dir .'/11_November.php';

?>
