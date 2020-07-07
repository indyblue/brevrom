<?php 
// error_reporting(E_ALL);
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
//ini_set('display_errors', 0);
$_GET['interl-off'] = 1;

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

$kindle=1;
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

	$Body = 14;
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link href="/b/htm_p.css" rel="stylesheet" type="text/css" />
	<!-- position:fixed;left:0;background-color:gray; -->
	<STYLE type="text/css">
	#controls { font-size:20px; }
	</STYLE>
	<script src="/dist/my-preact.js"></script>
  <script src="/etc/dom-tools.js"></script>
	<!-- <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js">
	{ startOpened:true }
	</script> -->
	</head>
	<body class="" id=""><div id="body-center">
	<div id="controls">
	</div><br/>
	<script src="/b/htm_p.js"></script>
	';

$regex=array(
	'/<draw:frame.*rel-width="(\d*)%".*href="\.\.\/([^"]*").*<\/draw:frame>/',
	'/<text:note.*text:label="([^"]*)".*<p:Footnote>(.*)<\/p>.*<\/text:note>/',
	'/<text:bookmark-ref[^>]*text:ref-name="([^"]*)"[^>]*>/',
	'/<\/text:bookmark-ref>/',
	'/<text:bookmark.*text:name="([^"]*)"\/>/',
	// '/\*/',
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
);
$repl=array(
	'<img src="/b/\2 width=\1%>',
	'</td></tr><tr><td colspan=2><span style="font-size:100%;color:red">\1\2</span>',
	'<a href="#\1">',
	'</a>',
	'<a class="anchor" id="\1" name="\1"></a>',
	// '<sr>*</s>',
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
);
// fb00 = ff, fi, fl, ffi, ffl, x, st, ct

//'/<p:BodyLDrop>([^<]*)<t><br\/>(.*)
//	<p:BodyEDrop>([^<]*)<t><br\/>(.*)'
$txtContent = preg_replace($regex,$repl,$txtContent);

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
	'/(?<td><td[^>"]*"(?<tdc>[^"]*)"[^>]*>[^<]*)?(?<ot><div class="(?<cl>'.$idxtype.')">)(?<txt>(?:.(?!<\/div>))*.)(?<ct><\/div>(?:<div class="Head4">[^-<]*-(?:[^-<]*-)?\s*(?<t2>[^-<]*)<)?)/is',
	"fn_index",
	$txtContent);

function fn_index($matches) {
	global $idx, $idxc, $shortb, $show2, $psloc;
	//echo "$matches[0]";
	//echo "<pre style='text-align:left;background-color:white;'>". htmlspecialchars(var_export($matches,1)) ."</pre>";
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
		"ad Completórium"=>"C"
		];
	if($matches['txt']=='Pars Specialis') {
		$show2 = true;
		$shortb = true;
		$psloc = mb_strlen($idx);
	}
	
	$lClass = '';
	if(isset($matches['tdc']) && strlen($matches['tdc'])>0) $lClass='a-'.$matches['tdc'];
	if($matches['cl']!='Head2' || $show2) {
		if($shortb && isset($shorts[$matches['txt']])) {
				/*
				$idx = preg_replace('/<br.?>$/i', ' - ', $idx);
				*/
				$idx = preg_replace("/\ba-toc\b(.*?)$/i", '$1 - ', $idx);
				$repl = $shorts[$matches['txt']];
				$idx .= " <a class='$lClass' href='#index_loc_$idxc'>$repl</a>";
		} else {
			$idx .= "<a class='a-toc $lClass' href='#index_loc_$idxc'>$saintdate{$matches['txt']}</a>\n";
		}
		$retval = "{$matches['td']}{$matches['ot']}<a name='index_loc_$idxc'/>{$matches['txt']}{$matches['ct']}";
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

// special function to wrap various sections in a div
// this gives the ability to show/hide sections
/*
$txtContent = preg_replace_callback(
	'/<div class="Hidden([12])">(.*)<\/div>/',
	'hdiv',
	$txtContent);
*/

$html2 = '</div>
</body>
</html>';

$html = $html1 . $idx . $txtContent . $html2;
// handle hyphenation
//*
require 'content/fn/hyph.php';
$hyph = new hyph();
$html = $hyph->html($html);
// */

echo $html;

function hdiv($matches)
{
	$x=uniqid("t"); 
	return '</div><div class="Hidden'.$matches[1].
		'" onClick="h10(\''.$x.'\');">'.$matches[2].
		'</div><div id="'.$x.'" class="h'.$matches[1].'">';
}

?>
