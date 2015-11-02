<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<pre><?php
echo 'toc<br>';
$fname = 'toc.ncx';
$sxml = file_get_contents($fname);

$dom = new DOMDocument();
$dom->loadXML($sxml);
echo $dom->encoding . '<br>';
$dxp = new DOMXPath($dom);
$dxp->registerNamespace('c','http://www.daisy.org/z3986/2005/ncx/');
$xs = '//c:navPoint';
$nodes = $dxp->query($xs);
echo $nodes->length, "<br>";
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

$txtout = $dom->saveXML();
$fout = 'toc2.ncx';
file_put_contents($fout, $txtout);

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
