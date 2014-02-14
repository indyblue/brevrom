<?php
ob_start(); // start buffer
require ($dir.'L/'.$file);
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents
$Lpieces = explode(chr(13).chr(10),$txtContent);

mb_internal_encoding("UTF-8");

ob_start(); // start buffer
require ($dir.'E/'.$file);
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents
$Epieces = explode(chr(13).chr(10),$txtContent);

//print_r(array_count_values($Lpieces));
//print_r(array_count_values($Epieces));

$countL = count($Lpieces);
$countE = count($Epieces);
if($countL!=$countE) 
	trigger_error('File ' . $file . ': Line count is different for Latin (' . $countL . ') and English (' . $countE . ').', E_USER_ERROR);

//Check for preliminary comment line:
$txtL = trim($Lpieces[1]);
$txtE = trim($Epieces[1]);
$lenL = strlen($txtL);
$lenE = strlen($txtE);
if($lenL>0) echo '<text:p text:style-name="RubricH">' . mb_substr(($_GET['L']?$txtL:$txtE),1) . '</text:p>';

?>
   <table:table table:name="Table2298" table:style-name="TableParallel">
    <table:table-column table:style-name="TableParallel.A"/>
    <table:table-column table:style-name="TableParallel.B"/>
<?php 

$strL = '';
$strE = '';
for($i=2;$i<$countL;$i++) {
	$txtL = trim($Lpieces[$i]);
	$txtE = trim($Epieces[$i]);

	$lenL = strlen($txtL);
	$lenE = strlen($txtE);
//echo $i . ' ' . $strL;
	if($lenL==0) {
		if($lenL==0 && $lenE>0) trigger_error('File ' . $file . ': Stanza break is different for Latin and English, line ' . $i . '.', E_USER_ERROR);
		if($strL) {
			echo $strL . $strE . '</table:table-cell></table:table-row>';
			if($i+1<$countL) {
				if (substr($Lpieces[$i+1],0,1)!='>') {
?>
    <table:table-row>
     <table:table-cell table:style-name="TableParallel.A1" office:value-type="string">
      <text:p text:style-name="HymnS"/>
     </table:table-cell>
     <table:table-cell table:style-name="TableParallel.B1" office:value-type="string">
      <text:p text:style-name="HymnS"/>
     </table:table-cell>
    </table:table-row>
<?php
				}
			} else {
				echo '	</table:table><text:p text:style-name="BodySm"><text:span text:style-name="Rubric">Auth. ' . trim($Lpieces[0]) . '<text:tab/>Trans. ' . trim($Epieces[0]) . '</text:span></text:p>';

			}
		}
		$new = 1;
		$strL = '<table:table-row><table:table-cell table:style-name="TableParallel.A1" office:value-type="string">
';
		$strE = '</table:table-cell><table:table-cell table:style-name="TableParallel.B1" office:value-type="string">';
	} elseif(mb_substr($txtL,0,1)=='>') {
		$strL = ''; $strE = ''; 
?>
	</table:table>
	<text:p text:style-name="RubricH"><?php echo mb_substr(($_GET['L']?$txtL:$txtE),1) ?></text:p>
	<table:table table:name="Table1103" table:style-name="TableParallel">
    <table:table-column table:style-name="TableParallel.A"/>
    <table:table-column table:style-name="TableParallel.B"/>
<?php
	} else {
		if($new) {
			$strL .= '<text:p text:style-name="HymnL' . ($i==3?'1':'') 
				. '"><text:span text:style-name="HymnR">'
				. mb_substr($txtL,0,1) . '</text:span>' 
				. mb_substr($txtL,1) . '</text:p>';
			$strE .= '<text:p text:style-name="HymnE' . ($i==3?'1':'') 
				. '"><text:span text:style-name="HymnR">'
				. mb_substr($txtE,0,1) . '</text:span>' 
				. mb_substr($txtE,1) . '</text:p>';
			$new = 0;
		} else {
			$strL .= '<text:p text:style-name="HymnL">'
				. $txtL . '</text:p>';
			$strE .= '<text:p text:style-name="HymnE">'
				. $txtE . '</text:p>';
		}
	}
}

?>
