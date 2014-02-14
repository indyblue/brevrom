<?php
mb_internal_encoding("UTF-8");
require '/www/b/content/fn/0list.php';


$ps = $_GET['ps'];
if(array_key_exists('pt',$_GET))
	$pt = $_GET['pt'];
else
	$pt = 0;
if(array_key_exists('c',$_GET))
	$comm = $_GET['c'];
else
	$comm = 2;


if(strpos($ps,'.php')!==false) {
	$dir = "/www/b/content/00/Canticle/";
	$type = 'Cant';
} else {
	$dir = "/www/b/content/00/Psalm/";
	$type = 'Ps';
}

echo '<html><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	</head><body>'. "\n";

ob_start(); // start buffer
psalm($ps,$pt,0,$dir,$type,$comm);
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
