<?php

// $byref values:
// 0 - hymn inserted in full, with bookmark
// 1 - reference to hymn inserted
// -1 - hymn inserted in full, no bookmark.
function hymn($file, $byref=-1, $posttxt=0) {
	$dir = $_GET['root'] . "/00/Hymn/";

	$Lpieces = file_load($dir.'L/'.$file);
	$Epieces = file_load($dir.'E/'.$file);
	
	//print_r(array_count_values($Lpieces));
	//print_r(array_count_values($Epieces));
	
	$countL = count($Lpieces);
	$countE = count($Epieces);
	if($countL!=$countE) 
		trigger_error('File ' . $file . ': Line count is different for Latin (' . $countL . ') and English (' . $countE . ').', E_USER_ERROR);
	
	if($byref==1) {
		$Lfl = trimP($Lpieces[3]);
		$Efl = trimP($Epieces[3]);
		$bk = substr($file,0,strlen($file)-4);
		$bkref = ', p. '. bkref($bk) .'</s>';
		$Lpost = ''; $Epost = '';
		if(is_array($posttxt)) {
			$Lpost = $posttxt[0];
			$Epost = $posttxt[1];
		}
		rubp('Hymnus <snr>'. $Lfl . $bkref . $Lpost,
			'Hymn <snr>'. $Efl . $bkref . $Epost);
	}
	else {
		if($byref==0) {
			$bk = substr($file,0,strlen($file)-4);
			echo bookmark($bk) . "\n";
		}
		//Check for preliminary comment line:
		$txtL = trim($Lpieces[1]);
		$txtE = trim($Epieces[1]);
		$lenL = strlen($txtL);
		$lenE = strlen($txtE);
		if($lenL+$lenE > 0)
			rubp($txtL,$txtE);
	
		?>
		   <table>
		<?php 
		
		$strL = '';
		$strE = '';
		for($i=2;$i<$countL;$i++) {
			$txtL = trim($Lpieces[$i]);
			$txtE = trim($Epieces[$i]);
		
			$lenL = mb_strlen($txtL);
			$lenE = mb_strlen($txtE);
		//echo $i . ' ' . $strL;
			if($lenL==0) {
				if($lenL==0 && $lenE>0) trigger_error('File ' . $file . ': Stanza break is different for Latin and English, line ' . $i . '.', E_USER_ERROR);
				if($strL) {
					echo $strL . $strE . '</td></tr>';
					if($i+1<$countL) {
						if (substr($Lpieces[$i+1],0,1)!='>')
							echo '<tr><td:A1><p:HymnS/></td><td:B1><p:HymnS/></td></tr>';
					} else {
						global $kindle;
						if(!$kindle
							&& mb_strlen(trim($Lpieces[0]))>0
							&& mb_strlen(trim($Epieces[0]))>0) {
							echo '<tr><td:A1>'
								.'<p:BodySm><sr>Auct. ' . trim($Lpieces[0]) . '</s></p>'
								. '</td><td:B1>'
								. '<p:BodySm><sr>Trans. ' . trim($Epieces[0]) . '</s></p></td></tr>';
						//echo '	</table><p:BodySm><sr>Auth. ' . trim($Lpieces[0]) . 
						//	'<t2>Trans. ' . trim($Epieces[0]) . '</s></p>';
						}
						echo '</table>';

					}
				}
				$new = 1;
				$strL = '<tr><td:A1>
		';
				$strE = '</td><td:B1>';
			} elseif(mb_substr($txtL,0,1)=='>') {
				$strL = ''; $strE = ''; 
				echo '</table><p:RubricH>'. mb_substr(($_GET['L']?$txtL:$txtE),1).
					'</p><table>';
			} else {
				if($new && mb_substr($txtL,0,1)!='<') {
					$strL .= '<p:HymnL' . ($i==3?'1':'') . '>'
						. style_first_letter($txtL,"s:HymnR") . '</p>
						';
					$strE .= '<p:HymnE' . ($i==3?'1':'') . '>'
						. style_first_letter($txtE,"s:HymnR") . '</p>
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
	}
}

?>
