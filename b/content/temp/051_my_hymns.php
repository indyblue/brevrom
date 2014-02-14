<?php
function hymn2($file, $option=0) {
	$dir = "/www/b/content/00/Hymn/";
echo '<p:Head2>Hymn</p>';
	require $dir.'0Hymn.php';
echo '<p:BodySm/>';
}

$_GET['O'] = 1;
echo '<p:P181/>';

hymn2('te_saeculorum_principem.php');
hymn2('vexilla_christus_inclyta.php');
?>
