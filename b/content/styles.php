<?php
if($_GET['Style']=='7') {
	$PgW = 4.25;
	$PgH = 7;
	$PgMar = .25;
	$PgGMar = .25;
	$Body = 9;
} elseif($_GET['Style']=='clp') {
	$om = 0.25;
	$PgW = 5.5;
	$PgH = 8.5;
	$PgMar = 0.3; // + .125;
	$PgGMar = 0.75;
	$Body = 9;
} elseif($_GET['Style']=='Az6') {
	$om = 0.25;
	$PgW = 6;
	$PgH = 9;
	$PgMar = 0.3; // + .125;
	$PgGMar = 0.75;
	$Body = 9;
} elseif($_GET['Style']=='6') {
	$PgW = 4.5;
	$PgH = 6.0;
	$PgMar = .25;
	$PgGMar = .25;
	$Body = 9;
} elseif($_GET['Style']=='4') {
	$PgW = 3;
	$PgH = 5;
	$PgMar = .25;
	$PgGMar = .25;
	$Body = 7;
} elseif($_GET['Style']=='L5') {
	$PgW = 5.5 + .25;
	$PgH = 8.5 + .25;
	$PgMar = .25 + .125;
	$PgGMar = .75;
	$Body = 9;
	$Body = 8.9;
} elseif($_GET['Style']=='L8') {
	$PgW = 8.5 + .25;
	$PgH = 11 + .25;
	$PgMar = .4 + .125;
	$PgGMar = .75;
	$Body = 12;
} elseif($_GET['Style']=='S5') {
	$PgW = 5;
	$PgH = 8;
	$PgMar = .4;
	$PgGMar = .6;
	$Body = 9;
	$Body = 8.9;
} elseif($_GET['Style']=='A4') {
	$PgW = 8.27/2;
	$PgH = 11.69/2;
	$PgMar = .25;
	$PgGMar = .25;
	$Body = 9;
} else {
	$PgW = $_GET['PgW'];
	$PgH = $_GET['PgH'];
	$PgMar = $_GET['PgMar'];
	$PgGMar = $_GET['PgGMar'];
	$Body = $_GET['BodyFont'];
}

	if($Body<8.5) $BodySm = $Body;
	else $BodySm = $Body - 1;
	$RubricHSm = $Body - 1.5;
	$HymnR = $Body + 1;
	$Head1 = $Body * 1.9;
	$Head0 = $Head1 + 2;
	$Head2 = $Body * 1.1;
	$Head3 = $Body * 1.1;

/*	
RubricHSm		$BodySm
HymnS				4
Spacer			2
 */
?>
