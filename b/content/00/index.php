<?php
$i = 4;
$nums = '11011';
$num = (int)substr($nums,$i/2,1);
// echo $num;
if($num) echo 'it worked';
//echo 'testing '.($i/2+1);
$inc='#';
if($inc) { echo 'yes';}
echo ($inc?1:0);

$ast = array(' *','*');
$L = "If you,* who are weak * do what is wrong...";
// echo str_replace($ast,'',$L);
?>
