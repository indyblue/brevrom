<?php 
// error_reporting(E_ALL);
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED);
//ini_set('display_errors', 0);

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
	<meta name="viewport" content="initial-scale=2"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<link href="htm.css" rel="stylesheet" type="text/css" />
	<STYLE type="text/css">
	div.h2 {display:'.($v?'auto':'none').';}
	</STYLE>
	<script type="text/javascript" src="jquery-1.7.2.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(document).on("click","a",function(e) {
				var $this = $(this);
				var $target = $( this.href.replace(/.*(#.*)/,"$1") );
				if($target.length && !$target.is(":visible")) {
					$target.parents().show();
				}
			});
		});
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
			if(divs[0].style.display!="block") {
				h0="block";
			} else {
				h0="none";
			}
			for(var i=0;i<divs.length;i++) {
				divs[i].style.display = h0;
			}
		}
	</script>
	<script type="text/javascript">
		$(document).ready(function docReady() {
			var $divh2 = $("div.h2");
			$(window).scroll(function fnScroll() {
				if(window.scrollY<window.innerHeight/2
					|| (typeof document.scrollYb == "number"
					&& Math.abs(document.scrollYb-window.scrollY)<100))
					return;
				document.scrollYb = window.scrollY
				var arr = Array();
				$divh2.each(function fnEach(i) {
					var br = this.getBoundingClientRect(); 
					var wh = window.innerHeight;

					if(br.top<=window.innerHeight 
						&& br.top+br.height>0
						&& br.height>10) {
						var obj = {
							i:i,
							y:br.y
						};
						arr.push(obj);
						console.log(i, br.top, br.height, 
							br.top + br.height);
					}
				});
				lsWrite(arr);
			});

			$("#resume").click(function fnResume() {
				var arr = lsRead();
				if(arr!=null) for(var x=0;x<arr.length;x++) {
					var obj = arr[x];
					var $div = $divh2.eq(obj.i);
					$div.show();
					var hProc = 0;
					var fn = function fnMover() {
						var br = $div[0].getBoundingClientRect();
						if(Math.abs(br.y-obj.y)>50) {
							console.log("trying", br.y, obj.y);
							window.scrollBy(0,br.y-obj.y);
						} else {
							console.log("done", br.y, obj.y);
							clearInterval(hProc);
						}
					};
					var hProc = setInterval(fn, 100);
				}
			});

			$("#clear").click(function fnClear() {
				window.localStorage.clear();
			});
		});

		function lsWrite(obj) {
			var sObj = JSON.stringify(obj);
			var sUrl = document.URL;
			window.localStorage.setItem(sUrl, sObj);
		}
		function lsRead(key) {
			if(typeof key != "string" || key.length==0)
				key = document.URL;
			var obj = null;
			try {
				var sObj = window.localStorage.getItem(key);
				var obj = JSON.parse(sObj);
			} catch(e) { }
			return obj;
		}
	</script>
	</head>
	<body id=""><div>
	<button id="resume">Resume</button> &nbsp; &nbsp; &nbsp;
	<button id="clear">Clear</button>
	<div class="Hidden2" onClick="name10()"><a href="'.$uri.
		($v?'':'&amp;v=1').'">Toggle all tags</a></div>'. "\n";


$regex=array(
	'/<draw:frame.*rel-width="(\d*)%".*href="\.\.\/([^"]*").*<\/draw:frame>/',
	'/<text:note.*text:label="([^"]*)".*<p:Footnote>(.*)<\/p>.*<\/text:note>/',
	'/<text:bookmark-ref[^>]*text:ref-name="([^"]*)"[^>]*>/',
	'/<\/text:bookmark-ref>/',
	'/<text:bookmark.*text:name="([^"]*)"\/>/',
	'/\*/',
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
	'<sr>*</s>',
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

// special function to wrap various sections in a div
// this gives the ability to show/hide sections
$txtContent = preg_replace_callback(
	'/<div class="Hidden([12])">(.*)<\/div>/',
	'hdiv',
	$txtContent);

$html2 = "\n</div></body></html>\n";

$html = $html1 . $txtContent . $html2;
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
