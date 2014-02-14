<?php
ob_start(); // start buffer
require ($dir.$file);
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

// print_r(explode(chr(13).chr(10),$txtContent));
$pieces = explode(chr(13).chr(10),$txtContent);

$L = trim($pieces[0]);
$E = trim($pieces[1]);


?>
   <table>
    <tr>
     <td:A1>
	  <p:BodyL><s:VR>V. </s><?php echo $L ?></p>
     </td>
     <td:B1>
	  <p:BodyE><s:VR>V. </s><?php echo $E ?></p>
     </td>
    </tr>
   </table>
