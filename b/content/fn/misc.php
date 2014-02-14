<?php

function space($type='BodySm') {
	if($type=='Pg') $type='P1';
	elseif($type=='PgB') $type='P181';
	elseif($type=='PgH') $type='P182';
	elseif($type=='PgHM') $type='P183';
	elseif($type=='PgH1') $type='P180';
	elseif($type=='PgI') $type='P179';
	elseif($type==2) $type = 'Spacer';
	elseif($type==4) $type = 'HymnS';
	
	if($type=='Line')
		echo "\n<table><tr><td:A1><p:Line/></td><td:B1><p:Line/></td></tr></table>\n";
	else echo "\n<p:". $type ."/>\n";
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
	if(bklist(1)>0) bklist($link,1);
	echo "<p:BkHidden><text:bookmark text:name=\"" . $link . "\"/></p>\n";
}

function bklist($bk=0, $anchor=0) {
	if(!array_key_exists('list',$_GET))
		$_GET['list'] = '';
	if(!array_key_exists('list_ref',$_GET))
		$_GET['list_ref'] = array();
	if(!array_key_exists('list_anc',$_GET))
		$_GET['list_anc'] = array('test');


	if($bk=='0LH') trigger_error('Here is that pesky 0LH!', E_USER_ERROR);


	if($anchor==1) array_push($_GET['list_anc'],$bk);

	elseif($bk===0) return $_GET['list'];
	elseif($bk===1) return strlen($_GET['list']);

	// double-checking returns!
	// all refs that don't have anchors (really important)
	elseif($bk===-1) 
		return array_unique(array_diff($_GET['list_ref'], $_GET['list_anc']));
	// all anchors that don't have refs (not important)
	elseif($bk===-2) 
		return array_unique(array_diff($_GET['list_anc'], $_GET['list_ref']));
	elseif($bk===-3) 
		return $_GET['list_ref'];
	elseif($bk===-4) 
		return $_GET['list_anc'];
	
	else {
		array_push($_GET['list_ref'],(string)$bk);
		$_GET['list'] .= "<p:BkHidden><text:bookmark text:name=\"" . 
			$bk . "\"/>". $bk ."</p>\n";
	}
}

// regex search to check for bkref not in echo
// \v(echo.*)@<!bkref\(
function bkref($link='') {
	if(bklist(1)>0) bklist($link,0);
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
