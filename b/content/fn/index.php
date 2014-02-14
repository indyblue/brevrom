<?php 
require '/www/b/content/fn/0list.php';
/*
$tmp = 0;
if($tmp==='H') echo 'oh no!';
feast_saint(203,0,'Sancti Blasii','Saint Blaise','EM',
	array('csMartyrBishop2.php','Blásii','Blaise'));
 */

$txtContent = "ÚSQUEQÚO";
$txtContent = preg_replace('/\bÚ/','U',$txtContent);
echo $txtContent;
// psalm(12);

?>

