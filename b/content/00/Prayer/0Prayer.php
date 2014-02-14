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
			$nameL = '<text:span text:style-name="Rubric">N.</text:span> et <text:span text:style-name="Rubric">N.</text:span>';
			$nameE = '<text:span text:style-name="Rubric">N.</text:span> and <text:span text:style-name="Rubric">N.</text:span>';
		} elseif($N='N') {
			$nameL = '<text:span text:style-name="Rubric">N.</text:span>';
			$nameE = $nameL;
		} else trigger_error('File ' . $file . ': Name indicator expected on first line (N or P).', E_USER_ERROR);
	}
	$txtL = ltrim($pieces[1]) . $nameL . rtrim($pieces[2]);
	$txtE = ltrim($pieces[3]) . $nameE . rtrim($pieces[4]);
} else
		trigger_error('File ' . $file . ': Line count is ' . $count . ', but should be either 2 or 4.', E_USER_ERROR);

?>
   <table:table table:name="Table2182" table:style-name="TableParallel">
    <table:table-column table:style-name="TableParallel.A"/>
    <table:table-column table:style-name="TableParallel.B"/>
    <table:table-row>
     <table:table-cell table:style-name="TableParallel.A1" office:value-type="string">
	  <text:p text:style-name="BodyLDrop"><?php echo $txtL; ?></text:p>
     </table:table-cell>
     <table:table-cell table:style-name="TableParallel.B1" office:value-type="string">
		<text:p text:style-name="BodyEDrop"><?php echo $txtE; ?></text:p>
     </table:table-cell>
    </table:table-row>
   </table:table>
