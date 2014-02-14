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

if($option==1) {
	$L11 .= ' ' . $L12;
	$L12 = 'Allelúja.';
	$E11 .= ' ' . $E12;
	$E12 = 'Alleluia.';
	$L2 .= ' Allelúja.';
	$E2 .= ' Alleluia.';
}

?>
   <table:table table:name="Table2298" table:style-name="TableParallel">
    <table:table-column table:style-name="TableParallel.A"/>
    <table:table-column table:style-name="TableParallel.B"/>
    <table:table-row>
     <table:table-cell table:style-name="TableParallel.A1" office:value-type="string">
	  <text:p text:style-name="BodyL"><text:span text:style-name="VR">V. </text:span><?php echo $L11 . ' ' . $L12 ?> <text:span text:style-name="VR">R. </text:span><?php echo $L2 ?></text:p>
     </table:table-cell>
     <table:table-cell table:style-name="TableParallel.B1" office:value-type="string">
	  <text:p text:style-name="BodyE"><text:span text:style-name="VR">V. </text:span><?php echo $E11 . ' ' . $E12 ?> <text:span text:style-name="VR">R. </text:span><?php echo $E2 ?></text:p>
     </table:table-cell>
    </table:table-row>
   </table:table>
