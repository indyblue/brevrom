<?php
mb_internal_encoding("UTF-8");

function canticle($num, $part=0, $cross=0) {
	psalm($num, $part, $cross, "/www/b/content/00/Canticle/",'Cant');
}

function reading($num, $part=0, $cross=0) {
	psalm($num, $part, $cross, "/www/b/content/00/Canticle/",'');
}

function psalm($num, $part=0, $cross=0, $dir = "/www/b/content/00/Psalm/",$index='Ps') {

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
	echo '<p:Head2'. $index .'>'. $Lpieces[0] .'</p>
';

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
			if($drop==0 && strpos($Lpieces[$i],'<')===false) {
				echo '
  <tr><td:A1>
   <p:BodyLDrop>'. caps_first_word($Lpieces[$i]) .'<t>
   <text:line-break/>'. style_first_letter($Lpieces[$i+1],'sb') .'</p>
  </td><td:B1>
   <p:BodyEDrop>'. caps_first_word($Epieces[$i]) .'<t>
   <text:line-break/>'. style_first_letter($Epieces[$i+1],'sb') .'</p>
  </td></tr>
';
				$drop=1;
				$i++;
			}
			else
				echo '  <tr><td:A1>
   <p:BodyL>'. style_first_letter($Lpieces[$i],'sb') .'</p>
  </td><td:B1>
   <p:BodyE>'. style_first_letter($Epieces[$i],'sb') .'</p>
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

?>
