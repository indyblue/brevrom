<?php
mb_internal_encoding("UTF-8");

$files = explode(',',$txtContent);
$filecount = array_count_values($files);
ob_start(); // start buffer
for($i=0;$i<$filecount;$i++) 
	require ($dir.'L/'.$files[$i]);
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents
$Lpieces = explode(chr(13).chr(10),$txtContent);

ob_start(); // start buffer
for($i=0;$i<$filecount;$i++) 
	require ($dir.'E/'.$files[$i]);
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents
$Epieces = explode(chr(13).chr(10),$txtContent);

//print_r(array_count_values($Lpieces));
//print_r(array_count_values($Epieces));

$countL = count($Lpieces);
$countE = count($Epieces);
if($countL!=$countE) 
	trigger_error('File ' . $file . ': Line count is different for Latin (' . $countL . ') and English (' . $countE . ').', E_USER_ERROR);

echo '
	<p:Head2Ps>Psalmus . </p>
	<table>
';

$strL = '';
$strE = '';
for($i=0;$i<$countL;$i++) {
	$txtL = trim($Lpieces[$i]);
	$txtE = trim($Epieces[$i]);

	$lenL = strlen($txtL);
	$lenE = strlen($txtE);

	if (substr($txtL,0,1)!='~') echo '
	</table>

?>
