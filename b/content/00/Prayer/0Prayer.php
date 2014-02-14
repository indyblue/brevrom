<?php
ob_start(); // start buffer
require ($dir.$file);
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

// print_r(explode(chr(13).chr(10),$txtContent));
$pieces = explode(chr(13).chr(10),$txtContent);
$count = count($pieces);
//print_r($pieces);

if($count==4) {
	$txtL = trim($pieces[1]);
	$txtE = trim($pieces[2]);
} elseif($count==6) {
	$N = substr($pieces[0],0,1);
	if(strlen($N)==0) trigger_error('File ' . $file . ': Name indicator expected on first line (N or P).', E_USER_ERROR);
	if($nameL=='N.') {
		if($N=='P') {
			$nameL = '<s:Rubric>N.</s> et <s:Rubric>N.</s>';
			$nameE = '<s:Rubric>N.</s> and <s:Rubric>N.</s>';
		} elseif($N='N') {
			$nameL = '<s:Rubric>N.</s>';
			$nameE = $nameL;
		} else trigger_error('File ' . $file . ': Name indicator expected on first line (N or P).', E_USER_ERROR);
	}
	$txtL = ltrim($pieces[1]) . $nameL . rtrim($pieces[2]);
	$txtE = ltrim($pieces[3]) . $nameE . rtrim($pieces[4]);
} else
		trigger_error('File ' . $file . ': Line count is ' . $count . ', but should be either 2 or 4.', E_USER_ERROR);

?>
   <table>
    <tr>
     <td:A1>
	  <p:BodyLDrop><?php echo $txtL; ?></p>
     </td>
     <td:B1>
		<p:BodyEDrop><?php echo $txtE; ?></p>
     </td>
    </tr>
   </table>
