<?php

	hidden('III. Christmastide',2);
	space();
	bvm_head(3);
	rubp('Quod dicitur a Vesperis diei 24 decembris usque ad Completorium diei 2 februarii inclusive.', 'Which is said from Vespers on December 24 until Compline on February 2 inclusive.');
	include('omnia_dicuntur.php');
	space();

	hour('L');
	ant('prSanct/0325L.php','22222');
	space();
	ant('mirabile_mysterium_delcaratur_hodie.php','B');
	rubrics('head/Prayer.php');
	prayer('prSanct/0325.php');
	rubp('Quæ oratio dicitur ad omnes Horas.', 'Which prayer is said at all the Hours.');
	space();

	hour('V');
	rubrics('ps/antLauds.php');
	ant('prTemp/nativity/0101m2.php','M');
	space();

	rubp('Ad Completorium ad <snr>Nunc dimíttis</s> antiphona <snr>Magnum hereditátis</s>, ut supra ad Vesperas.', 'At Compline at the <snr>Nunc dimíttis</s>, the antiphon <snr>Great is the mystery</s>, as above at Vespers.');
	space();

?>
