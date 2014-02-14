<?php 
$_GET['L'] = 0;
$_GET['par'] = 1;
$_GET['long'] = 1;
$_GET['root'] = dirname(__FILE__);
$pos = strpos($_GET['root'],'\\content');
if($pos>0)
	$_GET['root'] = substr($_GET['root'],0,$pos+8);
require $_GET['root'] . '/fn/0list.php';
$root = $_GET['root'];

	$Body = 12;
	$BodySm = $Body - 1;
	$RubricHSm = $Body - 1.5;
	$HymnR = $Body + 1;
	$Head1 = $Body * 1.9;
	$Head0 = $Head1 + 2;
	$Head2 = $Body * 1.1;
	$Head3 = $Body * 1.1;

echo '<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<STYLE type="text/css">
	body {padding 0px; margin:3%; width:94%; max-width:600px}

	table { width:100%; border-collapse:collapse}
	table, td, tr {
		border-width:0px; border-style:solid;
		margin:0px; padding:0px;
		border-color:red; vertical-align:top; }
	td.A1 { padding:0 6 0 0; width:48%}
	td.B1 { padding:0 0 0 6; width:52%; 
			border-width:0 0 0 2px; }

	div {margin:0px; padding 0px; text-align:justify; vertical-align:top;
		text-justify:inter-word; font-size:'.$Body.'pt;}
	div.Body, div.BodyL, div.BodyE {font-size:'.$Body.'pt;}
	div.BodySm, div.BodyLSm, div.BodyESm {font-size:'.$BodySm.'pt}
	div.BodyDrop:first-letter,
	div.BodyLDrop:first-letter,
	div.BodyEDrop:first-letter
		{ font-size:300%; font-weight:bold;
		float:left; width:1em; color:red;}
	div.BodyIndent {text-indent:'.$BodySm.'px;}
	div.Rubric {font-style:italic; color:red}
	div.RubricH {font-style:italic; color:red}
	div.RubricHSm {font-size:'.$RubricHSm.'pt; font-style:italic; color:red}
	div.RubricHidden {visibility:hidden; font-style:italic; color:red}
	div.BkHidden {visibility:hidden}
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
	div.Hidden1 {visibility:hidden}
	div.Hidden2 {visibility:hidden}

	span.HymnR {font-size:'.$HymnR.'pt; color:red; font-weight:bold}
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
	span.Super {font-size:58%;vertical-align:top}
	span.DropCap {font-weight:bold; color:red}
	span.VR {color:red}
	span.NH {}
	span.L {font-style:italic}
	</STYLE>
	</head>
	<body> '. "\n";
ob_start(); // start buffer

///////////////////////////////////////////////////////////
// Content goes here: /////////////////////////////////////
///////////////////////////////////////////////////////////

//*
$_GET['old'] = 1;
$_GET['long'] = 1;
$_GET['weekly'] = 0;
$_GET['matins'] = 1;

require '../6ComS/677_BVMp.php';
	vrS('dominus_vobiscum_non.php');
// */

///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////

$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

/*
	NO TIFF SUPPORT IN WEB BROWSER...
	'/<draw:frame.*rel-(width="[^"]*").*href="\.\.\/([^"]*").*<\/draw:frame>/',
	'<img src="/b/\2 \1>',
*/

$regex=array(
	'/<text:note.*text:label="([^"]*)".*<p:Footnote>(.*)<\/p>.*<\/text:note>/',
	'/<l>/',
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
	'/<t>/',
	'/<br\/*>/',
);
$repl=array(
	'</td></tr><tr><td colspan=2><span style="font-size:100%;color:red">\1\2</span>',
	'<s:L>',
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
	'&nbsp;',
	'<br/>',
);


//'/<p:BodyLDrop>([^<]*)<t><br\/>(.*)
//	<p:BodyEDrop>([^<]*)<t><br\/>(.*)'
$txtContent = preg_replace($regex,$repl,$txtContent);

echo $txtContent;
echo "\n</body></html>\n";

?>

