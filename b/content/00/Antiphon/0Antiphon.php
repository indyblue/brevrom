<?php
ob_start(); // start buffer
require ($dir.$file);

$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

// print_r(explode(chr(13).chr(10),$txtContent));
$pieces = explode(chr(13).chr(10),$txtContent);
// print_r($pieces);

$iFile = (int)(count($pieces)/2);
$iSpec = (int)(strlen($incs));

//echo 'File contains ' . $iFile . ', and ' . $iSpec . ' are specified.';
if($iFile<$iSpec) 
	trigger_error('Antiphon count is incorrect for ' . $file . '. File contains ' . $iFile . ', but ' . $iSpec . ' are specified.', E_USER_ERROR);

?>
   <table>
<?php 

for($i=0;$i<$iSpec*2;$i+=2) {
	$L = trim($pieces[$i]);
	$E = trim($pieces[$i+1]);
	$inc = substr($incs,$i/2,1);
	$subst = array(' *','*');
	$ant = 1;
	if($inc) {
		if($inc==1) {
			$num=0; $ast=0;
		} elseif($inc=='*') {
			$num=0; $ast=1; 
		} elseif($inc=='+') {
			$num=0; $ast=1; $ant=0;
		} elseif($inc=='#') {
			$num=1; $ast=0; 
		} elseif($inc==2) {
			$num=1; $ast=1; 
		}
		if(!$ast) {
			$L = str_replace($subst,'',$L);
			$E = str_replace($subst,'',$E);
		}
?>
    <tr>
     <td:A1>
	  <p:BodyL><?php 
if($ant) { 
	?><s:Rubric>Ant<?php echo ($num?' '.($i/2+1):'') ?>. </s><?php 
} 
echo $L ?></p>
     </td>
     <td:B1>
		<p:BodyE><?php
if($ant) {
	?><s:Rubric>Ant<?php echo ($num?' '.($i/2+1):'') ?>. </s><?php
}
echo $E ?></p>
     </td>
    </tr>
<?php
	}
}
echo '   </table>';
?>
