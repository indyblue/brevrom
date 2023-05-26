<?php
function exception_handler(Throwable $exception) {
	ob_end_clean();
  echo "Uncaught exception: <pre>$exception</pre><br>";
}
set_exception_handler('exception_handler');

$errs = "Error list:\n";
function myErrorHandler($errno, $errstr, $errfile, $errline)
{
		global $errs;
		$e = "$errno | $errstr | $errfile | $errline\n";
		if(!str_contains($errs, $e))		
			$errs .= $e . var_export( debug_backtrace(), true) . "\n";
    return false;
}
$old_error_handler = set_error_handler("myErrorHandler");

$zip = new ZipArchive();
$filename = "./output/b.odt";

if ($zip->open($filename, ZIPARCHIVE::OVERWRITE)!==TRUE
 && $zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
    exit("cannot open '$filename'\n");
}

//$zip->addFile("./OOo/content.xml","content.xml");


$isx = isset($_GET['x']) && $_GET['x']==='1';

ob_start(); // start buffer
include ("content/content.php");
$txtContent = ob_get_contents(); // assign buffer contents to variable
ob_end_clean(); // end buffer and remove buffer contents

if(0 && $isx) {
	ob_start(); // start buffer
	readfile('./output/b.xml');
	$txtContent = ob_get_contents(); // assign buffer contents to variable
	ob_end_clean(); // end buffer and remove buffer contents
}

//echo $txtContent;
//$txtContent = file_get_contents("content/content.xml");
if($isx) {
	echo "x=1 found<br>";

	$kal = '';
	$txtContent = preg_replace_callback_array(
    [
        '/<!--sec calendar -->.*?<!--sec calendar end -->/s' => function ($match) {
            global $kal;
						$kal = $match[0];
						// $kal = var_dump($match, true);
						return '<!--sec calendar -->';
        }
		],
    $txtContent
	);

	$txtContent = preg_replace(array(
		'/<tr>\s*<td:A[0-9]>(.*?)<\/td>\s*<td:B[0-9]>(.*?)<\/td>\s*<\/tr>/s',
		'/<table[^:>]*>(?!\s*<tr[^>]*>)/s',
		'/(?!<\/tr[^>]*>\s*)<\/table[^:>]*>/s',
	),array(
		'\1',
		'',
		'',
	),$txtContent);

	$txtContent = str_replace(array(
		'<!--sec calendar -->',
	), array(
		$kal,
	), $txtContent);

	$txtContent = preg_replace(array(
		'/<!--sec 2col -->/s',
		'/<!--sec 2col end -->/s'
	),array(
		'<text:section text:style-name="Sect1" text:name="Section1">',
		'</text:section>',
	),$txtContent);

	$fh = fopen("./output/b_lo.xml", 'w');
	fwrite($fh, $txtContent);
	fclose($fh);
	//exit;
} else {
	$fh = fopen("./output/b.xml", 'w');
	fwrite($fh, $txtContent);
	fclose($fh);
}

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
	'/<sec:([^\/>]*)/',
	'/<\/sec>/',
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
	'<text:section text:style-name="\1" text:name="Section1"',
	'</text:section>',
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

// This undoes the custom dipthong font modifications.
/*
$regex=array( '/ã/', '/ô/', '/õ/' );
$repl=array( 'ǽ', 'œ', 'œ' );
$txtContent = preg_replace($regex,$repl,$txtContent);
// */

$zip->addFromString("content.xml", $txtContent);

$fh = fopen("./output/content.xml", 'w');
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

$fh = fopen("./output/styles.xml", 'w');
fwrite($fh, $txtContent);
fclose($fh);

// adding styles file!
$zip->addFromString("styles.xml", $txtContent);


$zip->addFile("./OOo/settings.xml","settings.xml");
$zip->addFile("./OOo/META-INF/manifest.xml","META-INF/manifest.xml");
$zip->addFile("./OOo/pubon/content.xml","pubon/content.xml");
$zip->addFile("./OOo/pubon/settings.xml","pubon/settings.xml");
$zip->addFile("./OOo/pubon/styles.xml","pubon/styles.xml");

$zip->addFile("./OOo/movable/content.xml","movable/content.xml");
$zip->addFile("./OOo/movable/settings.xml","movable/settings.xml");
$zip->addFile("./OOo/movable/styles.xml","movable/styles.xml");

if(isset($_GET['x']) && $_GET['x']==='1') {
} else {
	echo "Style type: " . $_GET['Style'];
	echo "\n<pre>";
	echo "<br><br>All bookmark references that do not have anchors!<br>";
	print_r(bklist(-1));
	echo "<br><br>All anchors not referenced<br>";
	print_r(bklist(-2));
	echo "</pre>";
}

// echo $i;

// echo (int)'';
//echo "numfiles: " . $zip->numFiles . "\n";
//echo "status:" . $zip->status . "\n";
$zip->close();
echo "<pre>$errs</pre>";
?>

