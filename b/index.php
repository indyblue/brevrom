<?php

$zip = new ZipArchive();
$filename = "./b.odt";

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
	'/<sr>/',
	'/<snr>/',
	'/<sb>/',
	'/<p:([^\/>]*)/',
	'/<\/p>/',
	'/<s:([^\/>]*)/',
	'/<\/s>/',
	'/<table>/',
	'/<\/table>/',
	'/<tr>/',
	'/<\/tr>/',
	'/<td:([^\/>]*)/',
	'/<\/td>/',
	'/<t>/',
	'/Deus/', '/tibi/', '/tuam/', '/tuum/', 
	'/meam/', '/meus/', '/meum/', '/mihi/',
	'/cœtui/', '/fœdera/', '/fœdere/', '/fœderis/', '/fœtidum/',
	'/\bÁ/', '/\bÉ/', '/\bÍ/', '/\bÓ/', '/\bÚ/', '/\bÝ/', '/\bǼ/',
	'/ǽ/', '/œ/'
);
$repl=array(
	'<s:L>',
	'<s:Rubric>',
	'<s:NonRubric>',
	'<s:Bold>',
	'<text:p text:style-name="\1"',
	'</text:p>',
	'<text:span text:style-name="\1"',
	'</text:span>',
	'<table:table table:name="Table2399" table:style-name="TableParallel">
    <table:table-column table:style-name="TableParallel.A"/>
	 <table:table-column table:style-name="TableParallel.B"/>',
	'</table:table>',
	'<table:table-row>',
	'</table:table-row>',
	'<table:table-cell table:style-name="TableParallel.\1" office:value-type="string"',
	'</table:table-cell>',
	'<text:tab/>',
	'De­us', 'ti­bi', 'tu­am', 'tu­um', 
	'me­am', 'me­us', 'me­um', 'mi­hi',
	'cötui', 'födera', 'födere', 'föderis', 'fötidum',
	'A', 'E', 'I', 'O', 'U', 'Y', 'Æ',
	'ä', 'ô'
);

$txtContent = preg_replace($regex,$repl,$txtContent);

$zip->addFromString("content.xml", $txtContent);

$fh = fopen("content.xml", 'w');
fwrite($fh, $txtContent);
fclose($fh);

$zip->addFile("./OOo/meta.xml","meta.xml");
if($_GET['Style']=='7')
	$zip->addFile("./OOo/styles_7.xml","styles.xml");
if($_GET['Style']=='ds')
	$zip->addFile("./OOo/styles_7ds.xml","styles.xml");
elseif($_GET['Style']=='L4')
	$zip->addFile("./OOo/styles_Lulu4x6.xml","styles.xml");
elseif($_GET['Style']=='L5')
	$zip->addFile("./OOo/styles_Lulu5x8.xml","styles.xml");
elseif($_GET['Style']=='L6')
	$i = $zip->addFile("./OOo/styles_Lulu6x9.xml","styles.xml");
else
	$zip->addFile("./OOo/styles.xml","styles.xml");

$zip->addFile("./OOo/settings.xml","settings.xml");
$zip->addFile("./OOo/META-INF/manifest.xml","META-INF/manifest.xml");
$zip->addFile("./OOo/Object 1/content.xml","Object 1/content.xml");
$zip->addFile("./OOo/Object 1/settings.xml","Object 1/settings.xml");
$zip->addFile("./OOo/Object 1/styles.xml","Object 1/styles.xml");

$zip->addFile("./OOo/Object 2/content.xml","Object 2/content.xml");
$zip->addFile("./OOo/Object 2/settings.xml","Object 2/settings.xml");
$zip->addFile("./OOo/Object 2/styles.xml","Object 2/styles.xml");

echo $_GET['Style'];
echo $i;

// echo (int)'';
//echo "numfiles: " . $zip->numFiles . "\n";
//echo "status:" . $zip->status . "\n";
$zip->close();
?>

