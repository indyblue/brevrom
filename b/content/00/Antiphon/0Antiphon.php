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
   <table:table table:name="Table2298" table:style-name="TableParallel">
    <table:table-column table:style-name="TableParallel.A"/>
    <table:table-column table:style-name="TableParallel.B"/>
<?php 

for($i=0;$i<$iSpec*2;$i+=2) {
	$L = trim($pieces[$i]);
	$E = trim($pieces[$i+1]);
	$inc = substr($incs,$i/2,1);
	$subst = array(' *','*');
	if($inc) {
		if($inc==1) {
			$num=0; $ast=0;
		} elseif($inc=='*') {
			$num=0; $ast=1; 
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
    <table:table-row>
     <table:table-cell table:style-name="TableParallel.A1" office:value-type="string">
	  <text:p text:style-name="BodyL"><text:span text:style-name="Rubric">Ant<?php echo ($num?' '.($i/2+1):'') ?>. </text:span><?php echo $L ?></text:p>
     </table:table-cell>
     <table:table-cell table:style-name="TableParallel.B1" office:value-type="string">
      <text:p text:style-name="BodyE"><text:span text:style-name="Rubric">Ant<?php echo ($num?' '.($i/2+1):'') ?>. </text:span><?php echo $E ?></text:p>
     </table:table-cell>
    </table:table-row>
<?php
	}
}
echo '   </table:table>';
?>
