<?php
mb_internal_encoding("UTF-8");

function canticle($num, $part=0, $cross=0) {
	psalm($num, $part, $cross, "/www/b/content/00/Canticle/",'Cant');
}

function reading($num, $part=0, $cross=0) {
	psalm($num, $part, $cross, "/www/b/content/00/Canticle/",'');
}

function psref($num, $parts=0, $dir = "/www/b/content/00/Psalm/") {

	$fname = sprintf("%03s",$num) . ($parts>0?'-1':'') . '.php';
	$Lpieces = file_load($dir.$fname);

	$pt = '';
	if($parts==2) $pt = ' (Parts i &amp; ii)';
	if($parts==3) $pt = ' (Parts i, ii &amp; iii)';

	$title = str_replace(' i.','.',$Lpieces[0]);
	head('',$title .', p. ' . bkref('Ps' . $num) . $pt,2);

}
	
function psalm($num, $part=0, $cross=0, $dir = "/www/b/content/00/Psalm/",$index='Ps', $comm=1) {

	// scan latin directory, filter return for matches
	$ls = scandir($dir);
	// see if actual file name has been passed, or just psalm number
	if(strpos($num,'.php')!==false) 
		$fname = $num;
	else
		$fname = sprintf("%03s",$num) . ($part>0?'-'.dechex($part):'');
	$callback = create_function('$args',
		'return strpos($args,"'.$fname.'")!==false;');
	$ls = array_values(array_filter($ls,$callback));

	// error if there are no matching files based on psalm & part
	if(count($ls)==0) 
		trigger_error('File for Ps '. $fname .' does not exist.', E_USER_ERROR);

	// the file name returns are in an alphabetical array. 
	// this pulls the first file name out of the array,
	// and loads the latin and english files.
	$i = array_shift($ls);
	$Lpieces = file_load($dir.$i);
	$Epieces = file_load($dir.E($i));
	if($comm) {
		$iC = ereg_replace('-[0-9a-f]\.','.',$i);
		$Cpieces = file_load($dir.C($iC));
	}

	// for line counting, psalm parts other than the 1st
	// need a count of previous lines of the psalm
	$verse_count = 0;
	if($part>1) $verse_count = line_count($num,$part,$dir);

	// this creates a dynamic "callback" function
	// to remove the ‡ character from lines
	$callback = create_function('$args',
		'return mb_ereg_replace("‡","",$args);');
	// if there are more parts of the psalm that need
	// to be loaded, this iterates through them. for every
	// section which is loaded, ‡ characters are eliminated,
	// as it should only appear in the beginning line of the
	// first section.
	if(count($ls)>0) {
		foreach($ls as $i) {
			$tmp = array_map($callback,array_slice(file_load($dir.$i),1));
			$Lpieces = array_merge($Lpieces,$tmp);
			$tmp = array_map($callback,array_slice(file_load($dir.E($i)),1));
			$Epieces = array_merge($Epieces,$tmp);
		}
	}

	// error if the latin & english are different lengths
	if(count($Lpieces)!=count($Epieces)) 
		trigger_error('For Ps '. $fname .', Latin (' .
		count($Lpieces) .') and English ('.
		count($Epieces) .') are different lengths', E_USER_ERROR);

	// if there is not supposed to be a ‡ in the first line,
	// this will get rid of it.  It is applied to the entire
	// array for simplicity's sake, since it is possible to
	// have a subheader in some cases (i.e. ps. 118)
	if($cross==0) {
		$Lpieces = array_map($callback,$Lpieces);
		$Epieces = array_map($callback,$Epieces);
	}


	// this actually starts generating the xml text,
	// beginning with the header.
	if(strlen($Lpieces[0])>0) {
		if($part==0) 
			$Lpieces[0] = str_replace(' i.','.',$Lpieces[0]);
		echo '<p:Head2'. $index .'>'. $Lpieces[0] . "</p>\n";
	}
	if($comm && $part<=1) {

	// $table=0: the table tag hasn't been inserted yet
	// $drop=0: the drop cap hasn't been done yet.
	$table=0; $drop=0;

	// this section will iterate through the remaining 
	// lines of the psalm
	for($i=1;$i<count($Lpieces);$i++) {
		if(strlen($Lpieces[$i])==0);
		// if the line contains ~, it is a subheader
		// this is for Ps 118, which allows the section
		// headings to be included.
		elseif(strpos($Lpieces[$i],'~')!==false) 
			echo ($table?'</table>':'') .'
<p:Head5>'. str_replace('~','',$Lpieces[$i]) .'</p>
'. ($table?'<table>':'') .'
';
		else {
			if($table==0) {
				echo '<table>
';
				$table=1;
			}
			if(strpos($Lpieces[$i],'<')===0) {
				echo '  <tr><td:A1>
   <p:BodyL>'. style_first_letter($Lpieces[$i],'sb') .'</p>
  </td><td:B1>
   <p:BodyE>'. style_first_letter($Epieces[$i],'sb') .'</p>
  </td></tr>
';
			} elseif($drop==0) {
				$verse_count++;
				$v2 = 0;
				if(strlen($Lpieces[$i+1])==0) {
					$l2L = '';
					$l2E = '';
				} elseif(strpos($Lpieces[$i+1],'<')===0) {
					$l2L = '<t><text:line-break/>'.
						style_first_letter($Lpieces[$i+1],'sb');
					$l2E = '<t><text:line-break/>'. 
					  	style_first_letter($Epieces[$i+1],'sb');
				} else {
					$l2L = '<t><text:line-break/>'.
						style_first_letter($Lpieces[$i+1],'sb');
					$l2E = '<t><text:line-break/>'. 
						numComm($comm,$verse_count+1,$Cpieces) .
						style_first_letter($Epieces[$i+1],'sb');
					$v2 = 1;
				}
				echo '
  <tr><td:A1>
  <p:BodyLDrop>'. caps_first_word($Lpieces[$i]) . $l2L .'</p>
  </td><td:B1>
  <p:BodyEDrop>'. caps_first_word($Epieces[$i]) .
  						numComm($comm,$verse_count,$Cpieces,1) .
						$l2E .'</p>
  </td></tr>
';
				$drop=1;
				$i++;
				$verse_count += $v2;
			} else
				$verse_count++;
				echo '  <tr><td:A1>
   <p:BodyL>'. style_first_letter($Lpieces[$i],'sb') .'</p>
  </td><td:B1>
   <p:BodyE>'. numComm($comm,$verse_count,$Cpieces) .
			style_first_letter($Epieces[$i],'sb') .'</p>
  </td></tr>
';
/*
				echo '  <tr><td:A1>
   <p:BodyLIndent>'. $Lpieces[$i] .'</p>
  </td><td:B1>
   <p:BodyEIndent>'. $Epieces[$i] .'</p>
  </td></tr>
';
*/
		}  

	}
	echo '</table>
';

}

// OLD FUNCTION
/*
function psalm($file, $part=0, $cross=0) {
	$dir = "/www/b/content/00/Psalm/old/";
		require $dir.$file;
}
 */

function line_count($num, $part, $dir) {
	// scan directory, filter return for matches
	$ls = scandir($dir);
	$fname = sprintf("%03s",$num);
	$fpart = '-'.dechex($part);
	$callback = create_function('$args',
		'return strpos($args,"'.$fname.'")!==false;');
	$ls = array_values(array_filter($ls,$callback));

	// error if there are no matching files based on psalm & part
	if(count($ls)==0) 
		trigger_error('File for Ps '. $fname .' does not exist.', E_USER_ERROR);

	$callback = create_function('$args',
		'return ereg("^[~<]|^$",$args)===False;');
	$pieces = array();
	foreach($ls as $i) {
		if(strpos($i,$fpart)!==false) break;
		$tmp = array_slice(file_load($dir.$i),1);
		$tmp = array_values(array_filter($tmp,$callback));
		// print_r($tmp);
		$pieces = array_merge($pieces,$tmp);
	}
	// print_r($pieces);
	return count($pieces);
}

function numComm($comm, $verse_count, $Cpieces, $line_num=2) {
	if($comm==0) return '';
	// line numbers only
	elseif($comm==-1 && $line_num>1)
		return '<s:Super>' . $verse_count . '</s>';
	else {
		$callback = create_function('$args',
			'return ereg("^[~<]|^$",$args)===False;');
	
	}
}
function findlnum($verse_count, $comm, $beginning=true) {
		$tmp = explode('~',$comm);
		if(ereg('[,-]',$comm[0]) && $beginning) {
			

}

?>
