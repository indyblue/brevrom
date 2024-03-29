<?php

$zip = new ZipArchive();
$filename = "./b.pdf";

if ($zip->open($filename, ZIPARCHIVE::OVERWRITE)!==TRUE) {
    exit("cannot open <$filename>\n");
}

//$zip->addFile("./OOo/content.xml","content.xml");

ob_start(); // start buffer
include ("content/content.php");
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents
//echo $txtContent;
//$txtContent = file_get_contents("content/content.xml");

$fh = fopen("b.xml", 'w');
fwrite($fh, $txtContent);
fclose($fh);

$regex=array(
	'/<l>/',
	'/<r>/',
	'/<sr>/',
	'/<srh>/',
	'/<snr>/',
	'/<sb>/',
	'/<si>/',
	'/<h:Hidden([12])>/',
	'/<\/h>/',
	'/<p:([^\/>]*)/',
	'/<\/p>/',
	'/<s:([^\/>]*)/',
	'/<\/s>/',
	'/<table([^:>]*)>/',
	'/<\/table>/',
	'/<tr>/',
	'/<\/tr>/',
	'/<td:([^\/>]*)/',
	'/<\/td>/',
	'/<t2>/',
	'/<t>/',
	'/<br\/*>/',
	'/Deus/', '/tibi/', '/tuam/', '/tuum/', 
	'/meam/', '/meus/', '/meum/', '/mihi/',
	'/cœtui/', '/cœtibus/', '/fœdera/', '/fœdere/', '/fœderis/', '/fœtidum/',
	'/pœnitens/',
	'/\bÁ/', '/\bÉ/', '/\bÍ/', '/\bÓ/', '/\bÚ/', '/\bÝ/', '/\bǼ/',
	'/ǽ/', '/œ/'
);
$repl=array(
	'<s:L>',
	'<s:Red>',
	'<s:Rubric>',
	'<s:RubricH>',
	'<s:NonRubric>',
	'<s:Bold>',
	'<s:Italic>',
	'<text:h text:style-name="Hidden\1" text:outline-level="\1">',
	'</text:h>',
	'<text:p text:style-name="\1"',
	'</text:p>',
	'<text:span text:style-name="\1"',
	'</text:span>',
	'<table:table table:name="Table2399" table:style-name="TableParallel\1">
    <table:table-column table:style-name="TableParallel.A"/>
	 <table:table-column table:style-name="TableParallel.B"/>',
	'</table:table>',
	'<table:table-row>',
	'</table:table-row>',
	'<table:table-cell table:style-name="TableParallel.\1" office:value-type="string"',
	'</table:table-cell>',
	'<t>',
	'<text:tab/>',
	'<text:line-break/>',
	'De­us', 'ti­bi', 'tu­am', 'tu­um', 
	'me­am', 'me­us', 'me­um', 'mi­hi',
	'cõtui', 'cõtibus', 'fõdera', 'fõdere', 'fõderis', 'fõtidum',
	'põnitens',
	'A', 'E', 'I', 'O', 'U', 'Y', 'Æ',
	'ã', 'ô'
);

$txtContent = preg_replace($regex,$repl,$txtContent);

/*****************************************************************************/
echo "<pre>\n";

//echo str_replace(array('<','>'),array('&lt;','&gt;'),$txtContent);

$reader = new XMLReader();
$reader->XML($txtContent);
$reader->read();
//$reader->setParserProperty(XMLReader::VALIDATE, true);
//var_dump($reader->isValid());
$node = $reader->expand();
print_r($node);
print_r($node->childNodes());


/*
$bxml = simplexml_load_string($txtContent);
$xpath = '//text:span/text:bookmark-ref';
$val = $bxml->xpath($xpath);
//print_r($bxml->getDocNamespaces());
//print_r($val);

echo $bxml->getName()."\n";
echo count($bxml->children('office'))."\n";

//echo str_replace(array('<','>'),array('&lt;','&gt;'),$bxml->asXML());
// */

/*****************************************************************************/
exit;


// This undoes the custom dipthong font modifications.
/*
$regex=array( '/ã/', '/ô/', '/õ/' );
$repl=array( 'ǽ', 'œ', 'œ' );
$txtContent = preg_replace($regex,$repl,$txtContent);
// */

$zip->addFromString("content.xml", $txtContent);

$fh = fopen("content.xml", 'w');
fwrite($fh, $txtContent);
fclose($fh);

$zip->addFile("./OOo/meta.xml","meta.xml");


// 
// new code to add styles.xml
//

ob_start(); // start buffer
include ("OOo/styles.php");
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

// adding styles file!
$zip->addFromString("styles.xml", $txtContent);


// old styles.xml code
/*
if($_GET['Style']=='7')
	$zip->addFile("./OOo/styles_7.xml","styles.xml");
elseif($_GET['Style']=='ds')
	$zip->addFile("./OOo/styles_7ds.xml","styles.xml");
elseif($_GET['Style']=='L4')
	$zip->addFile("./OOo/styles_Lulu4x6.xml","styles.xml");
elseif($_GET['Style']=='L5')
	$zip->addFile("./OOo/styles_Lulu5x8.xml","styles.xml");
elseif($_GET['Style']=='L6')
	$i = $zip->addFile("./OOo/styles_Lulu6x9.xml","styles.xml");
elseif($_GET['Style']=='L8')
	$i = $zip->addFile("./OOo/styles_Lulu8x11.xml","styles.xml");
else
	$zip->addFile("./OOo/styles.xml","styles.xml");
*/
$zip->addFile("./OOo/settings.xml","settings.xml");
$zip->addFile("./OOo/META-INF/manifest.xml","META-INF/manifest.xml");
$zip->addFile("./OOo/pubon/content.xml","pubon/content.xml");
$zip->addFile("./OOo/pubon/settings.xml","pubon/settings.xml");
$zip->addFile("./OOo/pubon/styles.xml","pubon/styles.xml");

$zip->addFile("./OOo/movable/content.xml","movable/content.xml");
$zip->addFile("./OOo/movable/settings.xml","movable/settings.xml");
$zip->addFile("./OOo/movable/styles.xml","movable/styles.xml");

echo "Style type: " . $_GET['Style'];
echo "\n<pre>";
echo "<br><br>All bookmark references that do not have anchors!<br>";
print_r(bklist(-1));
echo "<br><br>All anchors not referenced<br>";
print_r(bklist(-2));
echo "</pre>";

// echo $i;

// echo (int)'';
//echo "numfiles: " . $zip->numFiles . "\n";
//echo "status:" . $zip->status . "\n";
$zip->close();
?>

