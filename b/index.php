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

if(isset($_GET['x']) && $_GET['x']==='1') {
	ob_start(); // start buffer
	readfile('b.xml');
	$txtContent = ob_get_contents(); // assign buffer contents to variable
	ob_end_clean(); // end buffer and remove buffer contents
}

//echo $txtContent;
//$txtContent = file_get_contents("content/content.xml");
if(isset($_GET['x']) && $_GET['x']==='1') {
	$temp = "
			<table> <tr> <td:A1>
      <p:BodyLDrop>APERI, Domine, os meum ad benedicendum nomen sanctum tuum: munda quoque cor meum ab omnibus vanis, perversis et alienis cogitationibus; intellectum illumina, affectum inflamma, ut digne, attente ac devote hoc Officium recitare valeam, et exaudiri merear ante conspectum divinae Majestatis tuae. Per Christum, Dominum nostrum. </p>
      <p:BodyL><s:VR>R. </s>Amen.</p>
     </td> <td:B1>
      <p:BodyEDrop>OPEN my mouth, O Lord, that I may bless thy holy name. Cleanse my heart from all vain, evil and wandering thoughts; enlighten my understanding, enkindle my affections, that I may worthily recite this Office with attention and devotion, and may worthily be heard before the presence of thy Divine Majesty. Through Christ our Lord. </p>
      <p:BodyE><s:VR>R. </s>Amen.</p>
     </td> </tr> <tr> <td:A1>
      <p:BodyLIndent>Domine, in unione illius divinae intentionis, qua ipse in terris laudes Deo persolvisti, has tibi Horas <sr>(vel </s>hanc tibi Horam<sr>)</s> persolvo.</p>
     </td> <td:B1>
      <p:BodyEIndent>O Lord, in union with that Divine Intention wherewith thou didst thyself praise God, while as thou wast on earth, I offer these Hours <sr>(or </s>this Hour<sr>)</s> unto thee.</p>
		</td> </tr> </table>

		";
	echo 'x=1 found';
	$regex=array(
		'/<\/{0,1}table([^:>]*)>/',
		'/<tr>.*?<td:A[0-9]>(.*?)<\/td>.*?<td:B[0-9]>(.*?)<\/td>.*?<\/tr>/s'
	);
	$repl=array(
		'',
		'\1'
	);

	$txtContent = preg_replace($regex,$repl,$txtContent);
	$temp2 = preg_replace($regex,$repl,$temp);
	$temp2 = preg_replace(array('/</','/>/'),array('&lt;','&gt;'),$temp2);
	//echo "<br><pre>$temp2</pre><br><br>";
	$fh = fopen("b_lo.xml", 'w');
	fwrite($fh, $txtContent);
	fclose($fh);
	//exit;
} else {
	$fh = fopen("b.xml", 'w');
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
$zip->addFile("./OOo/Object 1/content.xml","Object 1/content.xml");
$zip->addFile("./OOo/Object 1/settings.xml","Object 1/settings.xml");
$zip->addFile("./OOo/Object 1/styles.xml","Object 1/styles.xml");

$zip->addFile("./OOo/Object 2/content.xml","Object 2/content.xml");
$zip->addFile("./OOo/Object 2/settings.xml","Object 2/settings.xml");
$zip->addFile("./OOo/Object 2/styles.xml","Object 2/styles.xml");

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
?>

