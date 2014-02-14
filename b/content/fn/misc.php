<?php

function space($type='BodySm') {
	if($type=='Line') $type='P191';
	elseif($type=='Pg') $type='P1';
	elseif($type=='PgB') $type='P181';
	elseif($type=='PgH') $type='P182';
	elseif($type=='PgH1') $type='P180';
	elseif($type=='PgI') $type='P179';
	elseif($type==2) $type = 'Spacer';
	elseif($type==4) $type = 'HymnS';
	echo '
  <p:'. $type .'/>
';
}

// checks to see if $str exists in the 
// comma-separated value list $csv.
// returns either TRUE or FALSE
function csv_match($str, $csv) {
	$arr = explode(',',$csv);
	if(array_search($str,$arr)===false)
		return false;
	else
		return true;
}

function convert_date($date) {
	// arrays defining month text to be used in dates
	$Lm = array('', 'Januarii', 'Februarii', 'Martii', 'Aprilis', 'Maii', 'Juni', 
		'Julii', 'Augusti', 'Septembris', 'Octobris', 'Novembris', 'Decembris');		
	$Lms = array('', 'Jan.', 'Feb.', 'Mar.', 'Apr.', 'Maii', 'Juni', 
		'Jul.', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.');		
	$Em = array('', 'January', 'February', 'March', 'April',	'May', 'June', 
		'July', 'August', 'September', 'October', 'November', 'December');		
	$Ems = array('', 'Jan.', 'Feb.', 'Mar.', 'Apr.', 'May', 'June', 
		'Jul.', 'Aug.', 'Sept.', 'Oct.', 'Nov.', 'Dec.');		

	$month = (int)($date/100);
	$day = $date - $month*100;

	if($month>0 && $day>0) {
		$Ldate = $day . ' ' . $Lms[$month] ;
		$Edate = $Ems[$month] . ' ' . $day;
		if($month==2 && $day>23) {
			$Ldate .= ' ('. ($day+1) .' in anno bissextili)';
			$Edate .= ' ('. ($day+1) .' in leap year)';
		}
	} 
	return array($Ldate,$Edate);
}
function bookmark($link='') {
	echo "<p:BkHidden><text:bookmark text:name=\"" . $link . "\"/></p>\n";
}

function bklist($bk=0) {
	if(!array_key_exists('list',$_GET))
		$_GET['list'] = '';
	if($bk===0) return $_GET['list'];
	elseif($bk===1) return strlen($_GET['list']);
	else
		$_GET['list'] .= "<p:BkHidden><text:bookmark text:name=\"" . 
			$bk . "\"/>". $bk ."</p>\n";
}

// regex search to check for bkref not in echo
// \v(echo.*)@<!bkref\(
function bkref($link='') {
	if(bklist(1)>0) bklist($link);
	return '<text:bookmark-ref text:reference-format="page" text:ref-name="' . $link . '">1</text:bookmark-ref>';
}

/*
function PrV($file, $option=0) {
	$dir = $_GET['root'] . "/00/VR/prime/";
	if($option==0)
		rubrics('ord/prime_brv.php');
		require $dir.'0Versicle.php';
}
 */

/*
function hymn($file, $option=0) {
	$dir = $_GET['root'] . "/00/Hymn/";
//	echo '<p:Head0/>';
	require $dir.'0Hymn.php';
//	echo '<p:BodySm/>';
}

function lc($file, $text='', $r=1) {
	$dir = $_GET['root'] . "/00/LittleChapter/";
	require $dir.'0LittleChapter.php';
}
 */



?>
