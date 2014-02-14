<?php
	space();
	hidden('After Pentecost',1);
	hidden('Fifth Sunday',2);
	head_temp(2,'Dominica V Post Pentecosten', 'Fifth Sunday After Pentecost');

	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php',0,'1V');
	ant('PrTemp/post_pentecost/050m1.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/050.php');
	space();

	vrS('Ord/dominus_regnavit_decorem_induit.php',0,'L');
	ant('PrTemp/post_pentecost/050b.php','B');
	space();

	vrS('Ord/dirigatur_domine_oratio_mea.php',0,'2V');
	ant('PrTemp/post_pentecost/050m2.php','M');

?>
