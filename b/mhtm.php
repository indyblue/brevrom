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
	<link href="mhtm.css" rel="stylesheet" type="text/css" />
	<STYLE type="text/css">
	div.h2 {display:'.($v?'auto':'none').';}
	</STYLE>
	<script type="text/javascript">
		function h10(id) {
			div2 = document.getElementById(id).style;
			if(div2!=null) {
				if(div2.display!="block") {
					div2.display="block";
				} else {
					div2.display="none";
				}
			}
		}
		function name10() {
			divs = document.getElementsByName("h2");
			if(divs[0].style.display!="auto") {
				h0="auto";
			} else {
				h0="none";
			}
			for(var i=0;i<divs.length;i++) {
				divs[i].style.display = h0;
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

