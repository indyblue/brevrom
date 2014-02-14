<?php
ob_start(); // start buffer
require ($dir.$file);
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

mb_internal_encoding("UTF-8");
// print_r(explode(chr(13).chr(10),$txtContent));
$pieces = explode(chr(13).chr(10),$txtContent);

$firstL = explode(' ',$pieces[0],3);
$firstE = explode(' ',$pieces[3],3);

$L10 = trim($firstL[0]) . ' ' . trim($firstL[1]) . '...';
$E10 = trim($firstE[0]) . ' ' . trim($firstE[1]) . '...';
$L2 = trim($pieces[2]);
$E2 = trim($pieces[5]);

if($option==1) {
	$L11 = trim($pieces[0]) . ' ' . trim($pieces[1]);
	$L12 = 'Allelúja, allelúja.';
	$E11 = trim($pieces[3]) . ' ' . trim($pieces[4]);
	$E12 = 'Alleluia, alleluia.';
} else {
	$L11 = trim($pieces[0]);
	$L12 = trim($pieces[1]);
	$L12 = mb_substr(mb_strtoupper($L12),0,1) . mb_substr($L12,1);
	$E11 = trim($pieces[3]);
	$E12 = ucfirst(trim($pieces[4]));
}

?>
   <table>
    <tr>
     <td:A1>
	  <p:BodyL><s:VR>V. </s><?php echo $L11 . ' * ' . $L12 ?> <s:VR>R. </s><?php echo $L10 ?></p>
     </td>
     <td:B1>
	  <p:BodyE><s:VR>V. </s><?php echo $E11 . ' * ' . $E12 ?> <s:VR>R. </s><?php echo $E10 ?></p>
     </td>
    </tr>
    <tr>
     <td:A1>
	  <p:BodyL><s:VR>V. </s><?php echo $L2 ?> <s:VR>R. </s><?php echo $L12 ?></p>
     </td>
     <td:B1>
	  <p:BodyE><s:VR>V. </s><?php echo $E2 ?> <s:VR>R. </s><?php echo $E12 ?></p>
     </td>
    </tr>
    <tr>
     <td:A1>
	  <p:BodyL><s:VR>V. </s>Glória Patri...Sancto. <s:VR>R. </s><?php echo $L10 ?></p>
     </td>
     <td:B1>
	  <p:BodyE><s:VR>V. </s>Glory be...Spirit. <s:VR>R. </s><?php echo $E10 ?></p>
     </td>
    </tr>
   </table>
