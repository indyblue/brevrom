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

echo '<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<STYLE type="text/css">
	span.Rubric {font-style:italic color:red}
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


	.myclass {border-width: 1; border: solid; text-align: center}
	'<span style="font-style:italic">',
	'<span style="font-style:italic">',
	'<span style="font-weight:bold">',
	'<span style="font-size:58%;vertical-align:top">',
	'<div style="font-size:150%;text-align:center">',
	'<div style="font-size:100%;color:red">',
	'<div>',
	'</div>',
	'<span>',
	'</span>',
	'<table border=1>',
	'<td>',
	
	</STYLE>
	</head><body>'. "\n";
ob_start(); // start buffer

///////////////////////////////////////////////////////////
// Content goes here: /////////////////////////////////////
///////////////////////////////////////////////////////////


	vrS('dominus_vobiscum_non.php');


///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////

$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

$regex=array(
	'/<text:note.*text:label="([^"]*)".*<p:Footnote>(.*)<\/p>.*<\/text:note>/',
	'/<l>/',
	'/<si>/',
	'/<sb>/',
	'/<s:Super>/',
	'/<p:Head([^\/>]*)>/',
	'/<p:Rubric([^\/>]*)>/',
	'/<p:([^\/>]*)>/',
	'/<\/p>/',
	'/<s:([^\/>]*)>/',
	'/<\/s>/',
	'/<table([^:>]*)>/',
	'/<td:([^\/>]*)>/',
	'/<t>/',
	'/\bÁ/', '/\bÉ/', '/\bÍ/', '/\bÓ/', '/\bÚ/', '/\bÝ/', '/\bǼ/'
);
$repl=array(
	'</td></tr><tr><td colspan=2><span style="font-size:100%;color:red">\1\2</span>',
	'<span style="font-style:italic">',
	'<span style="font-style:italic">',
	'<span style="font-weight:bold">',
	'<span style="font-size:58%;vertical-align:top">',
	'<div style="font-size:150%;text-align:center">',
	'<div style="font-size:100%;color:red">',
	'<div>',
	'</div>',
	'<span>',
	'</span>',
	'<table border=1>',
	'<td>',
	'',
	'A', 'E', 'I', 'O', 'U', 'Y', 'Æ'
);

//'/<p:BodyLDrop>([^<]*)<t><text:line-break\/>(.*)
//	<p:BodyEDrop>([^<]*)<t><text:line-break\/>(.*)'
$txtContent = preg_replace($regex,$repl,$txtContent);

echo $txtContent;
echo "</body></html>\n";

?>

