<?php
ob_start(); // start buffer
require ($dir.$file);
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

// print_r(explode(chr(13).chr(10),$txtContent));
$pieces = explode(chr(13).chr(10),$txtContent);

$L11 = trim($pieces[0]);
$L12 = trim($pieces[1]);
$L2 = trim($pieces[2]);

$E11 = trim($pieces[3]);
$E12 = trim($pieces[4]);
$E2 = trim($pieces[5]);


?>
   <table>
    <tr>
     <td:A1>
	  <p:BodyL><?php echo $L11 . ' ' . $L12 ?></p>
     </td>
     <td:B1>
	  <p:BodyE><?php echo $E11 . ' ' . $E12 ?></p>
     </td>
    </tr>
    <tr>
     <td:A1>
	  <p:BodyL><?php echo $L2 ?></p>
     </td>
     <td:B1>
	  <p:BodyE><?php echo $E2 ?></p>
     </td>
    </tr>
   </table>
