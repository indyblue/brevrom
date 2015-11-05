<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<pre><?php
echo 'toc<br>';
$fname = 'toc.ncx';
$fin = 'toc_orig.ncx';
//rename($fname, $fin);
$sxml = file_get_contents($fin);

/************** LOAD XML FILE **************************************/
$dom = new DOMDocument();
$dom->loadXML($sxml);
echo $dom->encoding . '<br>';

/************** USE XPATH TO GET ALL NAVPOINTS *********************/
$dxp = new DOMXPath($dom);
$dxp->registerNamespace('c','http://www.daisy.org/z3986/2005/ncx/');
$xs = '//c:navPoint';
$nodes = $dxp->query($xs);
echo $nodes->length, "<br>";

/************** NEST NAVPOINTS BASED ON FILE ***********************/
$p0 = '';
$n0 = null;
$txt0 = '';
$e = 1;
foreach($nodes as $i=>$n) {
	$txt = $dxp->evaluate('./c:navLabel/c:text',$n)->item(0)->textContent;
	$src = $dxp->evaluate('./c:content/@src',$n)->item(0)->textContent;
	preg_match('/([^#]*)#(.*)/',$src, $m);
	$p = $m[1];
	$h = $m[2];
	if($p!==$p0) {
		$p0 = $p;
		$n0 = $n;
		$txt0 = $txt;
		$n1 = $n;
		$txt1 = $txt;
		if($e) echo "<h1>$i - <b>{$n->nodeName}</b> - $txt - $p - <b>{$n->parentNode->nodeName}</b> </h1>";
	} elseif(preg_match('/^([IV]{1,3}|M|N[123]|L|P|T|S|N|[12]V|V|C|Sab\.)$/',$txt)) {
		$n1->appendChild($n);
		$tn = $dxp->evaluate('./c:navLabel/c:text',$n)->item(0);
		$tn->nodeValue = $txt1 . ' - ' . $tn->nodeValue;
		$txt = $dxp->evaluate('./c:navLabel/c:text',$n)->item(0)->textContent;
		if($e) echo "$i - <b>{$n->nodeName}</b> - $txt - $p - <b>{$n->parentNode->nodeName}</b> <br>";
	} else {
		$n0->appendChild($n);
		$n1 = $n;
		$txt1 = $txt;
		if($e) echo "<h3>$i - <b>{$n->nodeName}</b> - $txt - $p - <b>{$n->parentNode->nodeName}</b> </h3>";
	}
}

/************** ORDER TOP LEVEL NAVPOINTS, BASED ON htm_k.htm *******/
// what a waste of time - calibre doesn't recognize the reorder :-(
/* 
$htmk = file_get_contents('../b/htm_k.htm');
$x = preg_match_all('/<a [^>]*href="(?:kindle\/)?([^"]*)[^>]*>([^<]*)</i', $htmk, $m);
$nprev=null;
foreach($m[1] as $i=>$url) {
	if(strpos($url, '#')!==false
		|| strpos($url, 'en/')!==false) continue;
	$t = $m[2][$i];
	$xs = "//c:navMap/c:navPoint[./c:navLabel/c:text/text()=\"$t\"]";
	//$xs = "//c:navMap//c:navPoint/c:navLabel/c:text";
	$nodes = $dxp->query($xs);
	echo "$t - {$nodes->length} - $url\n";
	if($nodes->length==1) {
		$n = $nodes->item(0);
		if($nprev!==null) 
			$n->parentNode->insertBefore($n, $nprev->nextSibling);
		else 
			$n->parentNode->insertBefore($n, $n->parentNode->firstChild);
		$nprev = $n;
	} elseif($nodes->length>1) foreach($nodes as $n) {
		$txt = $dxp->evaluate('./c:navLabel/c:text',$n)->item(0)->textContent;
		$src = $dxp->evaluate('./c:content/@src',$n)->item(0)->textContent;
		echo "  - $txt - $src\n";
	}
}

$xs = '//c:navPoint';
$nodes = $dxp->query($xs);
echo "\n\n<b>play order</b>\n";
foreach($nodes as $i=>$n) {
	$id = $n->attributes->getNamedItem("id");
	$po = $n->attributes->getNamedItem("playOrder");
	$txt = $dxp->evaluate('./c:navLabel/c:text',$n)->item(0)->textContent;
	echo "$txt - {$id->nodeValue} - {$po->nodeValue} - $i\n";
	$id->nodeValue = "num_" . ($i+1);
	$po->nodeValue = ($i+1);
}

$xs = '//c:navMap/c:navPoint';
$nodes = $dxp->query($xs);
echo "\n\n<b>file order</b>\n";
foreach($nodes as $n) {
	$txt = $dxp->evaluate('./c:navLabel/c:text',$n)->item(0)->textContent;
	$src = $dxp->evaluate('./c:content/@src',$n)->item(0)->textContent;
	echo "$txt - $src\n";
}

*/
/************** SAVE FILES *****************************************/
$txtout = $dom->saveXML();
$fout = 'toc_out.ncx';
file_put_contents($fout, $txtout);
file_put_contents($fname, $txtout);

/*
		$dom = new DOMDocument();
		libxml_use_internal_errors(true);
		$dom->loadHTML($txt);
		$dxp = new DOMXPath($dom);
		$xs = "//*[@class='". implode("'] | //*[@class='",$cl) . "']";
		$clns = $dxp->query($xs);
		$dom->saveHTML();
*/

?>
