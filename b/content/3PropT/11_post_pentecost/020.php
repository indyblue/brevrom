<?php
	space();
	hidden('After Pentecost',1);
	hidden('Second Sunday',2);
	head_temp(2,'Dominica II Post Pentecosten', 'Second Sunday After Pentecost');
	hour('1V');
	rubp('Omnia ut in Psalterio de dominica, præter ant. ad <snr>Magníficat</s> et orationem; quod servatur etiam in ceteris dominicis post Pentecosten.', 'All as in the Psalter of Sunday, except the ant. at the <snr>Magnificat</s> and the prayer; which is the case in all the Sundays after Pentecost.');
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php');
	ant('PrTemp/post_pentecost/020m1.php','M');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_pentecost/020.php');
	space();

	hour('L');
	rubp('In hac et sequentibus dominicis usque ad diem 30 septembris inclusive occurentibus, dicitur hymnus <snr>Ecce jam noctis</s>, ut in Psalterio, <snr>p. '. bkref('ecce_jam_noctis_tenuatur_umbra') .'</s>.', 'In this and the following Sundays until September 30, inclusive if it occurs on a Sunday, the hymn <snr>Lo, fainter now lie spread</s>, as in the Psalter, <snr>p. '. bkref('ecce_jam_noctis_tenuatur_umbra') .'</s>.');
	vrS('Ord/dominus_regnavit_decorem_induit.php');
	ant('PrTemp/post_pentecost/020b.php','B');
	space();

	hour('2V');
	rubp('Omnia ut in Psalterio de dominica, <snr>p. '. bkref('psDV') .'</s>.', 'All as in the Psalter of Sunday, <snr>p. '. bkref('psDV') .'</s>.');
	vrS('Ord/dirigatur_domine_oratio_mea.php');
	ant('PrTemp/post_pentecost/020m2.php','M');

?>
