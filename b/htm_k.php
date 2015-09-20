<?php 
// error_reporting(E_ALL);
ini_set('display_errors', 0);
mb_internal_encoding('UTF-8');
$_GET['htm'] = 1;
$_GET['old'] = 1;
$_GET['abbrev'] = 1;
$_GET['L'] = 0;
$_GET['par'] = 1;
$_GET['long'] = 1;
$_GET['root'] = dirname(__FILE__) . '/content';
$pos = strpos($_GET['root'],'\\content');
if($pos>0)
	$_GET['root'] = substr($_GET['root'],0,$pos+8);
require $_GET['root'] . '/fn/0list.php';
$root = $_GET['root'];

$uri = $_SERVER['REQUEST_URI'];

if(array_key_exists('v',$_GET)) {
	$v = $_GET['v'];
	$uri = substr($uri,0,strpos($uri,'&'));
}
else $v = false;

ob_start(); // start buffer


///////////////////////////////////////////////////////////
// Content goes here: /////////////////////////////////////
///////////////////////////////////////////////////////////

//*
$_GET['old'] = 1;
$_GET['long'] = 1;
$_GET['weekly'] = 0;
$_GET['matins'] = 1;
	
$url = $_GET['url'];
require 'content/'.$url;
// */

///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////


$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

	$Body = 30;
	$BodySm = $Body - 2;
	$RubricHSm = $Body - 3.5;
	$HymnR = $Body + 2;
	$Head1 = $Body * 1.9;
	$Head0 = $Head1 + 3;
	$Head2 = $Body * 1.1;
	$Head3 = $Body * 1.1;

$html1 = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
		"http://www.w3.org/TR/html4/loose.dtd">  
		<html><head>
	<title>Officium Divinum</title>
	<meta name="viewport" content="initial-scale=2"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link href="/b/htm_k.css" rel="stylesheet" type="text/css" />
	<STYLE type="text/css">
	div {font-size:'.$Body.'pt;}
	div.Body, div.BodyL, div.BodyE {font-size:'.$Body.'pt;}
	div.BodySm, div.BodyLSm, div.BodyESm {font-size:'.$BodySm.'pt}
	div.BodyIndent, div.BodyLIndent, div.BodyEIndent 
		{text-indent:'.$BodySm.'px;}
	div.RubricHSm {font-size:'.$RubricHSm.'pt;}
	div.Hymn {margin-left:'.$BodySm.'px; text-indent:-'.$BodySm.'px;}
	div.Hymn1 {margin-left:'.$BodySm.'px; text-indent:-'.$BodySm.'px;}
	div.Head0 {font-size:'.$Head0.'pt;}
	div.Head1 {font-size:'.$Head1.'pt;}
	div.Head1NI {font-size:'.$Head1.'pt;}
	div.Head2 {font-size:'.$Head2.'pt;}
	div.Head2Ps {font-size:'.$Body.'pt;}
	div.Head2Cant {font-size:'.$Body.'pt;}
	div.Head3 {font-size:'.$Head3.'pt;}
	div.Head4 {font-size:'.$Body.'pt;}
	div.Head5 {font-size:'.$RubricHSm.'pt;}
	span.HymnR {font-size:'.$HymnR.'pt;}
	div.h2 {display:'.($v?'auto':'none').';}
	</STYLE>
	</head>
	<body><div>
'. "\n";


$regex=array(
	'/<draw:frame.*rel-width="(\d*)%".*href="\.\.\/([^"]*").*<\/draw:frame>/',
	'/<text:note.*text:label="([^"]*)".*<p:Footnote>(.*)<\/p>.*<\/text:note>/',
	'/<text:bookmark-ref[^>]*text:ref-name="([^"]*)"[^>]*>/',
	'/<\/text:bookmark-ref>/',
	'/<text:bookmark.*text:name="([^"]*)"\/>/',
	'/<l>/',
	'/<r>/',
	'/<sr>/',
	'/<srh>/',
	'/<snr>/',
	'/<sb>/',
	'/<si>/',
	'/<[ph]:([^\/>]*)>/',
	'/<[ph]:([^\/>]*)\/>/',
	'/<\/[ph]>/',
	'/<s:([^\/>]*)>/',
	'/<s:([^\/>]*)\/>/',
	'/<\/s>/',
	'/<table([^:>]*)>/',
	'/<td:([^\/>]*)/',
	'/<t2>([^<]*)/',
	'/<t>/',
	'/<br\/*>/',
	'/cœtui/', '/cœtibus/', '/fœdera/', '/fœdere/', '/fœderis/', '/fœtidum/',
	'/pœnitens/',
	'/(?<!\pL)Á/u', '/(?<!\pL)É/u', '/(?<!\pL)Í/u', 
	'/(?<!\pL)Ó/u', '/(?<!\pL)Ú/u', '/(?<!\pL)Ý/u', '/(?<!\pL)Ǽ/u'
	//,'/ff/', '/fi/', '/fl/', '/ffi/', '/ffl/', '/st/', '/ct/'
	,'/(?m)^\s+/', '/(?<![\n\r])</'
	,'/(?i)[\n\r]+(?!<\/{0,1}(td|table|tr))/'
	,'/(?mi)^.*<td class="B\d".*$/'
	,'/(?<![\n\r])</', '/(?i)<\/{0,1}(td|table|tr)[^>]*>/', '/[\n\r]+/'
	,'/(<div class="Head(?:1|1NI)">)(?:.(?!<\/div>))*.<\/div>[^<]*<div class="Head5">((?:.(?!<\/div>))*.<\/div>)/i'
);
$repl=array(
	'<img src="/b/\2 width=\1%>',
	'</td></tr><tr><td colspan=2><span style="font-size:100%;color:red">\1\2</span>',
	'<a href="#\1">',
	'</a>',
	'<a class="anchor" id="\1" name="\1"></a>',
	'<s:L>',
	'<s:Red>',
	'<s:Rubric>',
	'<s:RubricH>',
	'<s:NonRubric>',
	'<s:Bold>',
	'<s:Italic>',
	'<div class="\1">',
	'<div class="\1">&nbsp;</div>',
	'</div>',
	'<span class="\1">',
	'<span class="\1"/>',
	'</span>',
	'<table>',
	'<td class="\1"',
	'<span style="float:right;">\1</span>',
	'&nbsp;',
	'<br/>',
	'cœ́tui', 'cœ́tibus', 'fœ́dera', 
	'fœ́dere', 'fœ́deris', "fœ́tidum",
	'pœ́nitens',
	'A', 'E', 'I', 'O', 'U', 'Y', 'Æ'
	//,'ﬀ', 'ﬁ', 'ﬂ', 'ﬃ', 'ﬄ', 'ﬆ', '﬇'
	,'', "\n<", '', '', "\n<", '', ''
	, '\1\2'
);
// fb00 = ff, fi, fl, ffi, ffl, x, st, ct

//'/<p:BodyLDrop>([^<]*)<t><br\/>(.*)
//	<p:BodyEDrop>([^<]*)<t><br\/>(.*)'
$txtContent = preg_replace($regex,$repl,$txtContent);

//	'/(<div class="Head1">)(?:.(?!<\/div>))*.</div>[^<]*.<div class="Head5">((?:.(?!<\/div>))*.</div>)/i',

$idx = "<div class='Index'>\n";
$idxc = 1;
if(!isset($idxtype)) $idxtype = 'Head[12]';
if(preg_match('/^5PropS.*/i',$_GET["url"])) $idxtype = 'Head1NI';
$txtContent = preg_replace_callback(
	'/(<div class="'.$idxtype.'">)((?:.(?!<\/div>))*.)(<\/div>(?:<div class="Head4">[^-<]*-(?:[^-<]*-)?\s*([^-<]*)<)?)/i',
	"fn_index",
	$txtContent);

function fn_index($matches) {
	global $idx, $idxc;
	//echo "$matches[0]";
	//var_dump($matches);
	$saintdate = '';
	if(count($matches)>4) $saintdate = $matches[4].' - ';
	$idx .= "<a href='#index_loc_$idxc'>$saintdate$matches[2]</a><br/>\n";
	$retval = "$matches[1]<a name='index_loc_$idxc'/>$matches[2]$matches[3]";
	$idxc++;
	return $retval;
}
$idx .= "</div>\n";


// add files to anchor links. generate links file using this command, from the content folder:
// grep "bookmark\(|hymn\(.*0\);" . -rP | sed -e "s/\.\/\([^:]*\):\s*[^']*'\([^.']*\).*/#\2=\1#\2/p" | sort -iu > htm_links.php
$links = file_load('content/htm_links.php');
function fn_links($m) {
	global $links;
	$retval = $m[0];
	foreach($links as $l) {
		$s = split('=',$l);
		if($s[0]===$m[0]) {
			$retval = '/b/kindle/'.$s[1];
			break;
		}
	}
	return $retval;
}
$txtContent = preg_replace_callback('/(?<=href=")[^"]*(?=")/i', 'fn_links', $txtContent);

$html2 = "\n</div></body></html>\n";

$html = $html1 . $idx . $txtContent . $html2;
// handle hyphenation
//*
require 'content/fn/hyph.php';
$hyph = new hyph();
$html = $hyph->html($html);
// */


echo $html;

?>
