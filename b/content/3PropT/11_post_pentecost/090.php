<?php
	space();
	hidden('After Pentecost',1);
	hidden('Ninth Sunday',2);
	head_temp(2,'Dominica IX Post Pentecosten', 'Ninth Sunday After Pentecost');
	rubrics('augusto_occurrat.php');

	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',0,'1V');
	ant('prTemp/post_pentecost/090m1.php','M');
	rubrics('head/Prayer.php');
	prayer('prTemp/post_pentecost/090.php');
	space();

	vrS('Ord/dominus_regnavit_decorem_induit.php',0,'L');
	ant('prTemp/post_pentecost/090b.php','B');
	space();

	vrS('Ord/dirigatur_domine_oratio_mea.php',0,'2V');
	ant('prTemp/post_pentecost/090m2.php','M');

?>
