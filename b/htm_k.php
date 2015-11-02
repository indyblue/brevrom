<?php 
// error_reporting(E_ALL);
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
//ini_set('display_errors', 0);

mb_internal_encoding('UTF-8');
$kindle=1;
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
$lang = 'la';
if(isset($_REQUEST['lang'])) $lang=$_REQUEST['lang'];

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

if(isset($_REQUEST['x'])) {
	ob_end_flush();
	exit;
}

$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents


require 'htm_links.php';

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
//	'/œ́/',
	'/(?<!\pL)Á/u', '/(?<!\pL)É/u', '/(?<!\pL)Í/u', 
	'/(?<!\pL)Ó/u', '/(?<!\pL)Ú/u', '/(?<!\pL)Ý/u', '/(?<!\pL)Ǽ/u'
	,'/(?m)^\s+/', '/(?<![\n\r])</'
	,'/(?i)[\n\r]+(?!<\/{0,1}(td|table|tr))/'
	,'/(?mi)^.*<td class="'.(isset($lang) && $lang=='en'?'A':'B').'\d".*$/'
	,'/(?<![\n\r])</', '/(?i)<\/{0,1}(td|table|tr)[^>]*>/', '/[\n\r]+/'
	,'/(<div class="Head(?:1|1NI)">)((?:.(?!<\/div>))*.<\/div>)[^<]*<div class="Head5">((?:.(?!<\/div>))*.<\/div>)/i'
);
$repl=array(
	'', //'<img src="/b/\2 width=\1%>',
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
//	'œ',
	'A', 'E', 'I', 'O', 'U', 'Y', 'Æ'
	,'', "\n<", '', '', "\n<", '', ''
	, '\1'.(isset($lang) && $lang=='en'?'\2':'\3')
);
// fb00 = ff, fi, fl, ffi, ffl, x, st, ct

//'/<p:BodyLDrop>([^<]*)<t><br\/>(.*)
//	<p:BodyEDrop>([^<]*)<t><br\/>(.*)'
$txtContent = preg_replace($regex,$repl,$txtContent);

//	'/(<div class="Head1">)(?:.(?!<\/div>))*.</div>[^<]*.<div class="Head5">((?:.(?!<\/div>))*.</div>)/i',

/************** ADD INDEX ********************************/
$idx = "<div style='text-align:left;' class='Index'>\n";
$idxc = 1;
if(!isset($idxtype)) $idxtype = 'Head[12]';
if(preg_match('/^5PropS.*/i',$_GET["url"])) $idxtype = 'Head(?:1NI|2)';
$show2 = true;
if(preg_match('/^1Ordinary.*/i',$_GET["url"])) $show2 = false;

$shortb = false;
if(preg_match('/^(?:3PropT|5PropS).*/i',$_GET["url"])) $shortb=true;

$divloc = mb_strlen($idx);
$psloc = -1;
$txtContent = preg_replace_callback(
	'/(?<ot><div class="(?<cl>'.$idxtype.')">)(?<txt>(?:.(?!<\/div>))*.)(?<ct><\/div>(?:<div class="Head4">[^-<]*-(?:[^-<]*-)?\s*(?<t2>[^-<]*)<)?)/i',
	"fn_index",
	$txtContent);

function fn_index($matches) {
	global $idx, $idxc, $shortb, $show2, $psloc;
	//echo "$matches[0]";
	//var_dump($matches);
	$saintdate = '';
	if(isset($matches['t2'])) $saintdate = $matches['t2'].' - ';
	$shorts = [ "Feria Secunda"=>'II', "Feria Tertia"=>'III', 
		"Feria Quarta"=>'IV', "Feria Quinta"=>'V', 
		"Feria Sexta"=>'VI', "Sabbato"=>'Sab.',
		"ad I Vésperas"=>"1V",
		"ad Matutínum"=>"M",
		"In I Nocturno"=>"N1",
		"In II Nocturno"=>"N2",
		"In III Nocturno"=>"N3",
		"ad Laudes"=>"L",
		"ad Primam"=>"P",
		"ad Tértiam"=>"T",
		"ad Sextam"=>"S",
		"ad Nonam"=>"N",
		"ad II Vésperas"=>"2V",
		"ad Vésperas"=>"V",
		];
	if($matches['txt']=='Pars Specialis') {
		$show2 = true;
		$shortb = true;
		$psloc = mb_strlen($idx);
	}

	if($matches['cl']!='Head2' || $show2) {
		if($shortb && isset($shorts[$matches['txt']])) {
				$idx = preg_replace('/<br.?>$/i', ' - ', $idx);
				$repl = $shorts[$matches['txt']];
				$idx .= " <a href='#index_loc_$idxc'>$repl</a><br/>";
		} else {
			$idx .= "<a href='#index_loc_$idxc'>$saintdate{$matches['txt']}</a><br/>\n";
		}
		$retval = "{$matches['ot']}<a name='index_loc_$idxc'/>{$matches['txt']}{$matches['ct']}";
		$idxc++;
		return $retval;
	}
	else return;
}
$idx .= "</div>\n";
//echo $divloc, $psloc;

if($psloc>0) {
	$txtContent = preg_replace('/(<a[^>]*name="orSeason".*?<.div>)/i', 
	'\1' . mb_substr($idx, 0, $divloc) . mb_substr($idx, $psloc), $txtContent);
}



/************** FIX CROSS-PAGE LINKS ********************************/
function fn_links($m) {
	global $links, $lang;
	$retval = $m[0];
	$i = substr($retval,1);
	if(isset($links[$i])) {
			$retval = '/b/kindle/'
				.(isset($lang) && $lang=='en'?'en/':'')
				.$links[$i];
	}
	return $retval;
}
$txtContent = preg_replace_callback('/(?<=href=")[^"]*(?=")/i', 'fn_links', $txtContent);

/************** HYPHENATION AND ECHO PAGE TEXT **************************/
$html2 = "\n</div></body></html>\n";

$txta = preg_split('/^\s*(<div[^>]*>\s*<a[^>]*>\s*<.a>\s*<.div>)/',$txtContent,2, PREG_SPLIT_DELIM_CAPTURE);
//var_dump($x);

if(count($txta)==3) 
	$html = $html1 . $txta[1] . $idx . $txta[2] . $html2;
else
	$html = $html1 . $idx . $txtContent . $html2;
// handle hyphenation
//*
if(!isset($_REQUEST['h']) || $_REQUEST['h']!=0) {
	require 'content/fn/hyph.php';
	$hyph = new hyph();
	$html = $hyph->html($html);
}
// */


echo $html;

?>
