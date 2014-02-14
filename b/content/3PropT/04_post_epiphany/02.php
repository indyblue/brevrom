<?php

	space();
	hidden('Post-Epiphany',1);
	hidden('Second Sunday',2);
	head_temp(2,'Dominica II post Epiphaniam', 'Second Sunday after Epiphany');
	hour('1V');
	rubp('Omnia ut in Psalterio sabbati, <snr>p. '.bkref('psSV').'</s>, præter orationem: quod etiam servatur in ceteris dominicis ante Septuag.', 'All as in the Psalter for Saturday, <snr>p. '.bkref('psSV').'</s>, except the prayer: which pattern is also to be observed on the other Sundays before Septuagesima.');
	vrS('Ord/vespertina_oratio_ascendat_ad_te_domine.php');
	ant('Psalter/7Sat/6m.php','M');
	space();

	hour('L');
	hymn('aeterne_rerum_conditor.php',1, array(', etiam in reliquis dominicis post Epiphaniam.', ', likewise in the remaining Sundays after the Epiphany.'));
	vrS('Ord/dominus_regnavit_decorem_induit.php');
	ant('PrTemp/post_epiphany/02b.php','B');
	rubrics('head/Prayer.php');
	prayer('PrTemp/post_epiphany/02.php');
	space();

	hour('2V');
	rubp('Omnia ut in Psalterio de dominica, <snr>p. '.bkref('psDV').'</s>.', 'All as in the Psalter for Sunday, <snr>p. '.bkref('psSV').'</s>.');
	vrS('Ord/dirigatur_domine_oratio_mea.php');
	ant('PrTemp/post_epiphany/02m.php','M');

?>
