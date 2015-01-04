<?php
	space();
	hidden('After Pentecost',1);
	hidden('Third Sunday',2);
	head_temp(2,'Dominica III Post Pentecosten', 'Third Sunday After Pentecost');

	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',0,'1V');
	ant('prTemp/post_pentecost/030m1.php','M');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_pentecost/030.php');
	space();

	vrS('Ord/dominus_regnavit_decorem_induit.php',0,'L');
	ant('prTemp/post_pentecost/030b.php','B');
	space();

	vrS('Ord/dirigatur_domine_oratio_mea.php',0,'2V');
	ant('prTemp/post_pentecost/030m2.php','M');

?>
