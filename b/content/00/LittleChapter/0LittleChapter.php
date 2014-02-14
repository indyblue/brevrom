<?php
ob_start(); // start buffer
require ($dir.$file);
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

// print_r(explode(chr(13).chr(10),$txtContent));
$pieces = explode(chr(13).chr(10),$txtContent);

$cv = trim($pieces[0]);
$txtL = trim($pieces[1]);
$txtE = trim($pieces[2]);

?>
	<text:p text:style-name="RubricHSm">Capit. (Little Chapt.)<t><?php echo $cv;
?></p>
   <table> <tr> <td:A1>
	  <p:BodyLDrop><?php echo caps_first_word($txtL); ?><t><?php 
if($r==1)
	echo ' <s:VR>R. </s>Deo grátias.</p>
';
?>
     </td> <td:B1>
		<p:BodyEDrop><?php echo caps_first_word($txtE); ?><t><?php 
if($r==1) 
	echo ' <s:VR>R. </s>Thanks be to God.</p>
		';
?>
     </td> </tr> </table>
