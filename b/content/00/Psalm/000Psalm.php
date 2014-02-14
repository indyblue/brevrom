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
if($lenL>0) echo '<p:RubricH>' . mb_substr(($_GET['L']?$txtL:$txtE),1) . '</p>';

?>
   <table>
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
			echo $strL . $strE . '</td></tr>';
			if($i+1<$countL) {
				if (substr($Lpieces[$i+1],0,1)!='>') {
?>
    <tr>
     <td:A1>
      <p:HymnS/>
     </td>
     <td:B1>
      <p:HymnS/>
     </td>
    </tr>
<?php
				}
			} else {
				echo '	</table><p:BodySm><s:Rubric>Auth. ' . trim($Lpieces[0]) . '<text:tab/>Trans. ' . trim($Epieces[0]) . '</s></p>';

			}
		}
		$new = 1;
		$strL = '<tr><td:A1>
';
		$strE = '</td><td:B1>';
	} elseif(mb_substr($txtL,0,1)=='>') {
		$strL = ''; $strE = ''; 
?>
	</table>
	<p:RubricH><?php echo mb_substr(($_GET['L']?$txtL:$txtE),1) ?></p>
	<table>
<?php
	} else {
		if($new) {
			$strL .= '<p:HymnL' . ($i==3?'1':'') . '><s:HymnR>'
				. mb_substr($txtL,0,1) . '</s>' . mb_substr($txtL,1) . '</p>
				';
			$strE .= '<p:HymnE' . ($i==3?'1':'') . '><s:HymnR>'
				. mb_substr($txtE,0,1) . '</s>' . mb_substr($txtE,1) . '</p>
				';
			$new = 0;
		} else {
			$strL .= '<p:HymnL>'
				. $txtL . '</p>
				';
			$strE .= '<p:HymnE>'
				. $txtE . '</p>
				';
		}
	}
}

?>
