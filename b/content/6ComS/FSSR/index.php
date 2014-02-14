<?php
	
include('cover.php');

	$_GET['long'] = 1;
	$_GET['matins'] = 1;
	$_GET['old'] = 0;
	$_GET['prayer_ending'] = 1;


include('prayers.php');

space();

include('bvm/index.php');

space();

include('690_OfficeDead.php');

space();

include('rule.php');


?>
