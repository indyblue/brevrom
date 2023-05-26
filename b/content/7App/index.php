<?php
	$long = $_GET['long'];
	global $kindle;

	space('Pg');
	space();
	hidden('',1);
	head('Appendix','',$kindle == 1 ? 1 : 0);
	space();
	echo '<!--sec 2col -->';

//	require 'hymns.php';

	require 'ps_gradual.php';

	require '7ps_litany.php';

	require 'mass_prep.php';

	require 'leonine.php';

	require 'mass_thanks.php';

	require '3_BVM.php';

	require 'veni_sancte_spiritus.php';

	require 'guardian_angel.php';

	echo '<!--sec 2col end -->';

?>
