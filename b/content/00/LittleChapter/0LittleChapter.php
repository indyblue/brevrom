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
	<text:p text:style-name=<?php 
echo ($text==''?'"RubricHSm">':'"RubricH">'.$text) . '<text:tab/>' . $cv;
?></text:p>
   <table:table table:name="Table2299" table:style-name="TableParallel">
    <table:table-column table:style-name="TableParallel.A"/>
    <table:table-column table:style-name="TableParallel.B"/>
    <table:table-row>
     <table:table-cell table:style-name="TableParallel.A1" office:value-type="string">
	  <text:p text:style-name="BodyLDrop"><?php echo $txtL; ?></text:p>
      <text:p text:style-name="BodyL"><text:span text:style-name="VR">R. </text:span>Deo grátias.</text:p>
     </table:table-cell>
     <table:table-cell table:style-name="TableParallel.B1" office:value-type="string">
      <text:p text:style-name="BodyEDrop"><?php echo $txtE; ?></text:p>
      <text:p text:style-name="BodyE"><text:span text:style-name="VR">R. </text:span>Thanks be to God.</text:p>
     </table:table-cell>
    </table:table-row>
   </table:table>
