<?php
require_once 'fn/tempora.php';
require_once 'fn/file.php';

$year = getdate()['year'];
if(isset($_GET['y']))
	$year = $_GET['y'];

$c = file_load('Latin/Calendar/univ_temp.txt');
$t = new tempora($year);
echo "<h1>$year</h1>";
foreach($c as $day) {
	$t->hodie($day);	
	//break;
}
$c = file_load('Latin/Calendar/univ_sanct.txt');
foreach($c as $day) {
	$t->hodie($day);	
	//break;
}
		$t->display();

// http://localhost/a/index.php?XDEBUG_SESSION_START=1

/*
for($y = $year; $y < $year+50; $y++) {
	if(($y-$year)%4==0) echo "<hr/>";

	$t = new tempora($y);
	$t->hodie('adv-1-1');
	$e = $t->psch(0);
	$ef = $e->format('d M.');
	$a = $t->adv(0);
	$af = $a->format('d M.');
	$x = $t->aug(5);
	//$x->sub(new DateInterval('P4D'));
	if($x!=null) $xf = $x->format('d M. l');
	else $xf='';
	//echo "$y -- E: $ef -- A1: $af -- X: $xf<br/>";
}
*/

?>

