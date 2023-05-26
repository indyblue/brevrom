<?php
	space('PgH');
	img('ihs.png',100);
	head('Psalterium Breviarii Romani',
		'Psalter of the Roman Breviary',0);
	space('PgB');
	echo '<!--sec 2col -->';

	require '1sunday.php';
	require '2monday.php';
	require '3tuesday.php';
	require '4wednesday.php';
	require '5thursday.php';
	require '6friday.php';
	require '7saturday.php';
	echo '<!--sec 2col end -->';

?>

