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
$zip->addFromString("content.xml", $txtContent);

$fh = fopen("content.xml", 'w');
fwrite($fh, $txtContent);
fclose($fh);

$zip->addFile("./OOo/meta.xml","meta.xml");
$zip->addFile("./OOo/styles.xml","styles.xml");
$zip->addFile("./OOo/settings.xml","settings.xml");
$zip->addFile("./OOo/META-INF/manifest.xml","META-INF/manifest.xml");
$zip->addFile("./OOo/Object 1/content.xml","Object 1/content.xml");
$zip->addFile("./OOo/Object 1/settings.xml","Object 1/settings.xml");
$zip->addFile("./OOo/Object 1/styles.xml","Object 1/styles.xml");


//echo "numfiles: " . $zip->numFiles . "\n";
//echo "status:" . $zip->status . "\n";
$zip->close();
?>

