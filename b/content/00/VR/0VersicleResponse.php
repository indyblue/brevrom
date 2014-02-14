<?php
ob_start(); // start buffer
require ($dir.$file);
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

// print_r(explode(chr(13).chr(10),$txtContent));
$txtContent = str_replace(array(' * ','* '),' ',$txtContent);
$pieces = explode(chr(13).chr(10),$txtContent);

$L11 = trim($pieces[0]);
$L12 = trim($pieces[1]);
$L2 = trim($pieces[2]);

$E11 = trim($pieces[3]);
$E12 = trim($pieces[4]);
$E2 = trim($pieces[5]);

if($option==1) {
	$L11 .= ' ' . $L12;
	$L12 = 'Allelúja.';
	$E11 .= ' ' . $E12;
	$E12 = 'Alleluia.';
	$L2 .= ' Allelúja.';
	$E2 .= ' Alleluia.';
}

?>
   <table>
    <tr>
     <td:A1>
	  <p:BodyL><s:VR>V. </s><?php echo $L11 . ' ' . $L12 ?> <s:VR>R. </s><?php echo $L2 ?></p>
     </td>
     <td:B1>
	  <p:BodyE><s:VR>V. </s><?php echo $E11 . ' ' . $E12 ?> <s:VR>R. </s><?php echo $E2 ?></p>
     </td>
    </tr>
   </table>
