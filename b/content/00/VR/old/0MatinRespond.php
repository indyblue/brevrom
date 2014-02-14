<?php
ob_start(); // start buffer
require ($dir.$file);
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents


mb_internal_encoding("UTF-8");
// print_r(explode(chr(13).chr(10),$txtContent));
$pieces = explode(chr(13).chr(10),$txtContent);

//first section
$L11 = trim($pieces[0]);
$L12 = trim($pieces[1]);
$L12 = mb_substr(mb_strtoupper($L12),0,1) . mb_substr($L12,1);
$E11 = trim($pieces[3]);
$E12 = ucfirst(trim($pieces[4]));

//abbrev. 2nd half of 1st section for repeats
$L12p = explode(' ',$L12,5);
$E12p = explode(' ',$E12,5);
$L12r = trim($L12p[0]) . ' ' . trim($L12p[1]) 
	. ' ' . trim($L12p[2]) . ' ' . trim($L12p[3]) . '...';
$E12r = trim($E12p[0]) . ' ' . trim($E12p[1]) 
	. ' ' . trim($E12p[2]) . ' ' . trim($E12p[3]) . '...';

//second section
$L2 = trim($pieces[2]);
$E2 = trim($pieces[5]);

//requiem section (if needed)
if($option>0) {
	ob_start(); // start buffer
	require ($dir . 'requiem_aeternam.php');
	$txtRequiem = ob_get_contents(); // assign buffer contents to variable
	ob_end_clean(); // end buffer and remove buffer contents

	$pieces = explode(chr(13).chr(10),$txtRequiem);
	$L3 = trim($pieces[0]) . ' ' . trim($pieces[2]);
	$E3 = trim($pieces[3]) . ' ' . trim($pieces[5]);
}

//special mod for 3-part first verse
if($option==3) {
	$pieces = explode('*',$L12);
	$L12 = trim($pieces[0]);
	$L13 = trim($pieces[1]);
	$pieces = explode('*',$E12);
	$E12 = trim($pieces[0]);
	$E13 = trim($pieces[1]);

	$L12r = $L12;
	$E12r = $E12;
	$L11p = explode(' ',$L11 . $L13);
	$i = count($L11p);
	$L11r = $L11p[0] . ' ' . $L11p[1] . '...' . $L11p[i-1];
	$E11p = explode(' ',$E11 . $E13);
	$i = count($E11p);
	$E11r = $E11p[0] . ' ' . $E11p[1] . '...' . $E11p[i-1];
}

echo '   <table> <tr> <td:A1>
	<p:BodyL><s:VR>R. </s>' . $L11 . ' * ' . $L12 
	. '<s:VR>V. </s>' . $L2 
	. '<s:VR>R. </s>' . $L12r;
if($option==1) 
	echo '<s:VR>V. </s>' . $L3 . '<s:VR>R. </s>' . ($option==3?$L11r:$L12r);
echo '</p>
     </td> <td:B1>
	  <p:BodyE><s:VR>R. </s>' . $E11 . ' * ' . $E12 
	. '<s:VR>V. </s>' . $E2 
	. '<s:VR>R. </s>' . $E12r;
if($option==1) 
	echo '<s:VR>V. </s>' . $E3 . '<s:VR>R. </s>' . ($option==3?$L11r:$L12r);

echo '</p>
	</td> </tr> </table>';
?>
