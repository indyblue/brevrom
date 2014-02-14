<?php
	space();
	rubp('Si sequens dominica fuerit ultima post Pentecosten, ejus loco ponitur dominica XXIV ut infra, <snr>p. '.bkref('PostPent24').'</s>, et Officium dominicæ XXIII prætermittitur.', 'If the following Sunday is the last one after Pentecost, in this place the twenty-fourth Sunday is said, as below, <snr>p. '.bkref('PostPent24').'</s>, and the Office of the twenty-third Sunday is omitted.');
	space();
	hidden('After Pentecost',1);
	hidden('Twenty-third Sunday',2);
	head_temp(2,'Dominica XXIII Post Pentecosten', 'Twenty-third Sunday After Pentecost');

	rubrics('antiphona_ad_magnif_quae_contingit.php');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/230.php');
	space();

	vrS('Ord/dominus_regnavit_decorem_induit.php',0,'L');
	ant('PrTemp/post_pentecost/230b.php','B');
	space();

	vrS('Ord/dirigatur_domine_oratio_mea.php',0,'2V');
	ant('PrTemp/post_pentecost/230m2.php','M');

?>
