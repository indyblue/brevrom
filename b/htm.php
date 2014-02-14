<?php 
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

	$Body = 12;
	$BodySm = $Body - 2;
	$RubricHSm = $Body - 3.5;
	$HymnR = $Body + 2;
	$Head1 = $Body * 1.9;
	$Head0 = $Head1 + 3;
	$Head2 = $Body * 1.1;
	$Head3 = $Body * 1.1;

echo '<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<STYLE type="text/css">
	body {padding:0px; margin:0 2% 0 4%; width:94%; max-width:600px;}

	table { width:100%; border-collapse:collapse}
	table, td, tr {
		border-width:0px; border-style:solid;
		margin:0px; padding:0px;
		border-color:red; vertical-align:top; }
	td.A1 { padding:0 6 0 0; width:48%}
	td.B1 { padding:0 0 0 6; width:52%; 
			border-width:0 0 0 1px; }

	div {margin:0px; padding:0px; text-align:justify;
		vertical-align:top; font-size:'.$Body.'pt;}
	div.Body, div.BodyL, div.BodyE {font-size:'.$Body.'pt;}
	div.BodySm, div.BodyLSm, div.BodyESm {font-size:'.$BodySm.'pt}
	div.BodyDrop:first-letter,
	div.BodyLDrop:first-letter,
	div.BodyEDrop:first-letter
		{ font-size:300%; font-weight:bold;
		float:left; width:1em; color:black;}
	div.BodyIndent, div.BodyLIndent, div.BodyEIndent 
		{text-indent:'.$BodySm.'px;}
	div.Rubric {font-style:italic; color:red}
	div.RubricH {font-style:italic; color:red}
	div.RubricHSm {font-size:'.$RubricHSm.'pt; font-style:italic; color:red}
	div.RubricHidden {visibility:hidden; height:0px; font-style:italic; color:red}
	div.BkHidden {visibility:hidden; height:0px}
	div.Hymn {margin-left:'.$BodySm.'px; text-indent:-'.$BodySm.'px;}
	div.Hymn1 {margin-left:'.$BodySm.'px; text-indent:-'.$BodySm.'px;}
	div.Head0 {font-size:'.$Head0.'pt; text-align:center; 
		font-variant:small-caps}
	div.Head1 {font-size:'.$Head1.'pt; text-align:center; font-variant:small-caps}
	div.Head1NI {font-size:'.$Head1.'pt; text-align:center; font-variant:small-caps}
	div.Head2 {font-size:'.$Head2.'pt; text-align:center; font-variant:small-caps}
	div.Head2Ps {font-size:'.$Body.'pt; text-align:center; 
		font-style:italic; color:red}
	div.Head2Cant {font-size:'.$Body.'pt; text-align:center; 
		font-style:italic; color:red}
	div.Head3 {font-size:'.$Head3.'pt; text-align:center; 
		font-style:italic;}
	div.Head4 {font-size:'.$Body.'pt; text-align:center; 
		font-style:italic; color:red}
	div.Head5 {font-size:'.$RubricHSm.'pt; text-align:center; 
		font-style:italic; color:red}
	div.Spacer {font-size:2pt;}
	div.Line {font-size:2pt; border-width:0px 0px 1px 0px; 
		border-color:red; border-style:solid;}

	span.HymnR {font-size:'.$HymnR.'pt; color:red; font-weight:bold}
	span.Red {color:red; font-size:60%;}
	span.Rubric {font-style:italic; color:red}
	span.RubricH {font-style:italic; color:red; 
		font-size:58%; vertical-align:top}
	span.NonRubric {font-style:normal; color:black}
	span.Italic {font-style:italic}
	span.Bold {font-weight:bold}
	span.BoldR {font-weight:bold; color:red}
	span.BoldRC {font-weight:bold; color:red; text-transform:uppercase}
	span.AllCaps {text-transform:uppercase}
	span.SmCaps {font-variant:small-caps}
	span.Super {font-size:58%; vertical-align:top}
	span.DropCap {font-weight:bold; color:red}
	span.VR {color:red; font-style:normal;}
	span.NH {}
	span.L {font-style:italic}


	div.Hidden1 {visibility:hidden; height:0px; overflow:hidden;
		padding:1 20px; background-color:gray;}
	div.Hidden2 {visibility:visible; padding:1 20px; background-color:gray;}

	div.h1 {height:auto; visibility:visible; overflow:hidden;}
	div.h2 {height:'.($v?'auto':'1px').'; 
				visibility:'.($v?'visible':'hidden').'; 
				overflow:hidden;}

	</STYLE>
	<script type="text/javascript">
		function h10(id) {
			div2 = document.getElementById(id).style;
			if(div2!=null) {
				if(div2.height!="auto") {
					div2.height="auto";
					div2.visibility="visible";
				} else {
					div2.height="1px";
					div2.visibility="hidden";
				}
			}
		}
		function name10() {
			divs = document.getElementsByName("h2");
			if(divs[0].style.height!="auto") {
				h0="auto";
				h1="visible";
			} else {
				h0="1px";
				h1="hidden";
			}
			for(var i=0;i<divs.length;i++) {
				divs[i].style.height = h0;
				divs[i].style.visibility = h1;
			}
		}
	</script>
	</head>
	<body><div>
	<div class="Hidden2" onClick="name10()"><a href="'.$uri.
		($v?'':'&v=1').'">Toggle all tags</a></div>'. "\n";


$regex=array(
	'/<draw:frame.*rel-width="(\d*)%".*href="\.\.\/([^"]*").*<\/draw:frame>/',
	'/<text:note.*text:label="([^"]*)".*<p:Footnote>(.*)<\/p>.*<\/text:note>/',
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
	'/<t2>/',
	'/<t>/',
	'/<br\/*>/',
	'/\bÁ/', '/\bÉ/', '/\bÍ/', '/\bÓ/', '/\bÚ/', '/\bÝ/', '/\bǼ/',
);
$repl=array(
	'<img src="/b/\2 width=\1%>',
	'</td></tr><tr><td colspan=2><span style="font-size:100%;color:red">\1\2</span>',
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
	'<span style="float:right;">',
	'&nbsp;',
	'<br/>',
	'A', 'E', 'I', 'O', 'U', 'Y', 'Æ',
);

//'/<p:BodyLDrop>([^<]*)<t><br\/>(.*)
//	<p:BodyEDrop>([^<]*)<t><br\/>(.*)'
$txtContent = preg_replace($regex,$repl,$txtContent);

// special function to wrap various sections in a div
// this gives the ability to show/hide sections
$txtContent = preg_replace_callback(
	'/<div class="Hidden([12])">(.*)<\/div>/',
	'hdiv',
	$txtContent);
	

echo $txtContent;
echo "\n</div></body></html>\n";

function hdiv($matches)
{
	$x=uniqid("t"); 
	return '</div><div class="Hidden'.$matches[1].
		'" onClick="h10(\''.$x.'\');">'.$matches[2].
		'</div><div id="'.$x.'" name="h'.$matches[1].
		'" class="h'.$matches[1].'">';
}

?>

